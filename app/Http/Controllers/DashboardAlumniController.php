<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserKontak;
use App\Models\AlumniDetail;
use Illuminate\Http\Request;
use InvalidArgumentException;
use App\Models\AlumniAkademik;
use App\Models\AlumniKeluarga;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class DashboardAlumniController extends Controller
{
    public function index()
    {
        return view('notadmin.index');
    }

    public function profile($id)
    {
        $user = User::with([
            'roles',
            'alumniDetail',
            'alumniKeluarga',
            'alumniAkademik',
            'userKontak',
        ])->find($id);

        return view('notadmin.pages.profile.index', [
            'user' => $user,
        ]);
    }

    public function editProfile($id)
    {
        $user = User::with([
            'roles',
            'alumniDetail',
            'alumniKeluarga',
            'alumniAkademik',
            'userKontak',
        ])->find($id);

        return view('notadmin.pages.profile.component.edit', [
            'alumni' => $user,
        ]);
    }

    public function updateProfile($id): RedirectResponse
    {
        try {
            DB::transaction(function () use ($id) {

                $validated = [
                    'name' => 'required|string',
                    'username' => 'required|string',
                    'email' => 'required|email',
                    'nik' => 'required|string|max:16',
                    'jenis_kelamin' => 'required',
                    'tempat_lahir' => 'required|string',
                    'tanggal_lahir' => 'required',
                    'alamat' => 'required|string',
                    'status' => 'required',
                    'pendidikan_terakhir' => 'required',
                    'keahlian' => 'required',
                    'organisasi' => 'required',
                    'pengalaman_kerja' => 'required',
                    'foto' => 'sometimes|mimes:png,jpg,jpeg,svg|max:1048',
                    'no_handphone' => 'required',
                    'facebook' => 'required',
                    'instagram' => 'required',
                    'twitter' => 'required',
                    'nis' => 'required|string|max:16',
                    'nisn' => 'required|string|max:8',
                    'angkatan' => 'required',
                    'jurusan' => 'required',
                    'rombel' => 'required',
                    'tahun_masuk' => 'required',
                    'tahun_lulus' => 'required',
                    'rata_ijazah' => 'required',
                    'ayah' => 'required',
                    'pekerjaan_ayah' => 'required',
                    'ibu' => 'required',
                    'pekerjaan_ibu' => 'required',
                    'alamat_ortu' => 'required|string',
                ];

                $user = User::findOrFail($id);
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

                $alumniDetail = AlumniDetail::where('user_id', $user->id)->first();
                if (!$alumniDetail) {
                    $alumniDetail = new AlumniDetail();
                    $alumniDetail->user_id = $user->id;
                }

                $alumniDetail->nik = request('nik');
                $alumniDetail->jenis_kelamin = request('jenis_kelamin');
                $alumniDetail->tempat_lahir = request('tempat_lahir');
                $alumniDetail->tanggal_lahir = request('tanggal_lahir');
                $alumniDetail->alamat = request('alamat');
                $alumniDetail->status = request('status');
                $alumniDetail->pendidikan_terakhir = request('pendidikan_terakhir');
                $alumniDetail->keahlian = request('keahlian');
                $alumniDetail->organisasi = request('organisasi');
                $alumniDetail->pengalaman_kerja = request('pengalaman_kerja');
                $alumniDetail->save();

                $userKontak = UserKontak::where('user_id', $user->id)->first();
                if (!$userKontak) {
                    $userKontak = new UserKontak();
                    $userKontak->user_id = $user->id;
                }

                $userKontak->no_handphone = request('no_handphone');
                $userKontak->facebook = request('facebook');
                $userKontak->instagram = request('instagram');
                $userKontak->twitter = request('twitter');
                $userKontak->save();

                $alumniAkademik = AlumniAkademik::where('user_id', $user->id)->first();
                if (!$alumniAkademik) {
                    $alumniAkademik = new AlumniAkademik();
                    $alumniAkademik->user_id = $user->id;
                }

                $alumniAkademik->nis = request('nis');
                $alumniAkademik->nisn = request('nisn');
                $alumniAkademik->angkatan = request('angkatan');
                $alumniAkademik->jurusan = request('jurusan');
                $alumniAkademik->rombel = request('rombel');
                $alumniAkademik->tahun_masuk = request('tahun_masuk');
                $alumniAkademik->tahun_lulus = request('tahun_lulus');
                $alumniAkademik->rata_ijazah = request('rata_ijazah');
                $alumniAkademik->save();

                $alumniKeluarga = AlumniKeluarga::where('user_id', $user->id)->first();
                if (!$alumniKeluarga) {
                    $alumniKeluarga = new AlumniKeluarga();
                    $alumniKeluarga->user_id = $user->id;
                }

                $alumniKeluarga->ayah = request('ayah');
                $alumniKeluarga->pekerjaan_ayah = request('pekerjaan_ayah');
                $alumniKeluarga->ibu = request('ibu');
                $alumniKeluarga->pekerjaan_ibu = request('pekerjaan_ibu');
                $alumniKeluarga->alamat_ortu = request('alamat_ortu');
                $alumniKeluarga->save();

            });
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
            return redirect()->route('profile-alumni', auth()->user()->id)->with('message', $message);
            // return response()->json([
            //     'message' => $e->getMessage(),
            // ], 400);
        }

        return redirect()->route('profile-alumni', auth()->user()->id)->with('success', 'Profil berhasil dirubah');
    }
}