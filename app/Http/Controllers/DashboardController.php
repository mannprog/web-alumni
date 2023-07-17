<?php

namespace App\Http\Controllers;

use App\Charts\AlumniJurusanChart;
use App\Charts\AlumniLulusChart;
use App\Models\User;
use App\Models\Loker;
use App\Models\UserKontak;
use App\Models\AlumniDetail;
use App\Models\AlumniFamily;
use Illuminate\Http\Request;
use App\Models\CivitasDetail;
use App\Models\CompanyDetail;
use App\Models\PetugasDetail;
use InvalidArgumentException;
use App\Models\AlumniAcademic;
use App\Models\AlumniAkademik;
use App\Models\AlumniKeluarga;
use App\Models\PerusahaanDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(AlumniJurusanChart $jurusanChart, AlumniLulusChart $lulusChart)
    {
        $petugas = User::whereHas('roles', function ($query) {
                $query->whereIn('name', ['admin', 'petugas', 'kepalasekolah']);
            })->count();
        $alumni = User::whereHas('roles', function ($query) {
                $query->where('name', 'alumni');
            })->count();
        $perusahaan = User::whereHas('roles', function ($query) {
                $query->where('name', 'perusahaan');
            })->count();
        $loker = Loker::count();

        $ajChart = $jurusanChart->build();
        $alChart = $lulusChart->build();
        
        return view('admin.dashboard', compact('petugas', 'alumni', 'perusahaan', 'loker', 'ajChart', 'alChart'));
    }

    public function notadmin()
    {
        return view('notadmin.index');
    }

    public function profile($id)
    {
        $user = User::with([
            'roles',
            'petugasDetail',
            'perusahaanDetail',
            'userKontak',
        ])->find($id);

        return view('admin.pages.profile.index', [
            'user' => $user,
        ]);
    }

    public function editProfile($id)
    {
        $user = User::with([
            'roles',
            'petugasDetail',
            'perusahaanDetail',
            'userKontak',
        ])->findOrFail($id);

        return response()->json($user);
    }

    public function updateProfile()
    {
        $userId = request('user_id');
        $role = request('edit_roles');

        try {
            DB::transaction(function () use ($userId, $role) {
                if ($role === 'admin' || $role === 'kepalasekolah' || $role === 'petugas') {
                    $validated = [
                        'name' => 'required|string',
                        'username' => 'required|string',
                        'email' => 'required|email',
                        'nip' => 'required|string|max:18',
                        'nuptk' => 'required|string|max:16',
                        'nik' => 'required|string|max:16',
                        'jenis_kelamin' => 'required',
                        'tempat_lahir' => 'required|string',
                        'tanggal_lahir' => 'required',
                        'alamat' => 'required|string',
                        'status' => 'required',
                        'pendidikan_terakhir' => 'required',
                        'no_handphone' => 'required',
                        'facebook' => 'required',
                        'instagram' => 'required',
                        'twitter' => 'required',
                        'foto' => 'sometimes|mimes:png,jpg,jpeg,svg|max:1048',
                    ];

                    request()->validate($validated);

                    $user = User::findOrFail($userId);
                    $user->name = request('name');
                    $user->email = request('email');
                    $user->username = request('username');
                    if (request()->hasFile('foto')) {
                        $foto = request()->file('foto');
                        $filename = $foto->getClientOriginalName();
                        $foto->move(public_path('img/foto'), $filename);
                        $user->foto = $filename;
                    }
                    $user->save();

                    $petugasDetail = PetugasDetail::where('user_id', $user->id)->first();
                    $petugasDetail->nip = request('nip');
                    $petugasDetail->nuptk = request('nuptk');
                    $petugasDetail->nik = request('nik');
                    $petugasDetail->jenis_kelamin = request('jenis_kelamin');
                    $petugasDetail->tempat_lahir = request('tempat_lahir');
                    $petugasDetail->tanggal_lahir = request('tanggal_lahir');
                    $petugasDetail->alamat = request('alamat');
                    $petugasDetail->status = request('status');
                    $petugasDetail->pendidikan_terakhir = request('pendidikan_terakhir');
                    $petugasDetail->save();

                    $userKontak = UserKontak::where('user_id', $user->id)->first();
                    $userKontak->no_handphone = request('no_handphone');
                    $userKontak->facebook = request('facebook');
                    $userKontak->instagram = request('instagram');
                    $userKontak->twitter = request('twitter');
                    $userKontak->save();
                } elseif ($role === 'perusahaan') {
                    $validated = [
                        'name' => 'required|string',
                        'username' => 'required|string',
                        'email' => 'required|email',
                        'foto' => 'sometimes|mimes:png,jpg,jpeg,svg|max:1048',
                        'jenis' => 'required|string',
                        'alamat' => 'required|string|max:255',
                        'no_handphone' => 'required|string|max:13',
                        'facebook' => 'required',
                        'instagram' => 'required',
                        'twitter' => 'required',
                    ];

                    request()->validate($validated);

                    $user = User::find($userId);
                    $user->name = request('name');
                    $user->email = request('email');
                    $user->username = request('username');
                    if (request()->hasFile('foto')) {
                        $foto = request()->file('foto');
                        $filename = $foto->getClientOriginalName();
                        $foto->move(public_path('img/foto'), $filename);
                        $user->foto = $filename;
                    }
                    $user->save();

                    $perusahaanDetail = PerusahaanDetail::where('user_id', $user->id)->first();
                    $perusahaanDetail->jenis = request('jenis');
                    $perusahaanDetail->alamat = request('alamat');
                    $perusahaanDetail->save();

                    $userKontak = UserKontak::where('user_id', $user->id)->first();
                    $userKontak->no_handphone = request('no_handphone');
                    $userKontak->facebook = request('facebook');
                    $userKontak->instagram = request('instagram');
                    $userKontak->twitter = request('twitter');
                    $userKontak->save();
                }
            });
        } catch (InvalidArgumentException $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 400);
        }

        return response()->json([
            'message' => 'Profil berhasil dirubah',
        ]);
    }
}