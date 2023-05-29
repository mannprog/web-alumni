<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\AlumniDetail;
use App\Models\AlumniFamily;
use Illuminate\Http\Request;
use App\Models\CivitasDetail;
use App\Models\CompanyDetail;
use InvalidArgumentException;
use App\Models\AlumniAcademic;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function profile($id)
    {
        $user = User::with([
            'roles',
            'civitas_detail',
            'alumni_detail',
            'alumni_family',
            'alumni_academic',
            'company_detail',
            // 'visitor_detail'
        ])->find($id);

        return view('admin.pages.profile.index', [
            'user' => $user,
        ]);
    }

    public function editProfile($id)
    {
        $user = User::with([
            'roles',
            'civitas_detail',
            'alumni_detail',
            'alumni_family',
            'alumni_academic',
            'company_detail',
            // 'visitor_detail'
        ])->findOrFail($id);

        return response()->json($user);
    }

    public function updateProfile()
    {
        $userId = request('user_id');
        $role = request('edit_roles');

        try {
            DB::transaction(function () use ($userId, $role) {
                if($role === 'superadmin' || $role === 'admin' || $role === 'kepalasekolah' || $role ==='petugas') {
                    $validated = [
                        'name' => 'required|string',
                        'username' => 'required|string',
                        'email' => 'required|email',
                        'nip' => 'required|string|max:18',
                        'nuptk' => 'required|string|max:16',
                        'nik' => 'required|string|max:16',
                        'jk' => 'required',
                        'tempat_lahir' => 'required|string',
                        'tanggal_lahir' => 'required',
                        'no_handphone' => 'required',
                        'status' => 'required',
                        'alamat' => 'required|string',
                        'foto' => 'required|mimes:png,jpg,jpeg,svg|max:1048',
                    ];
    
                    request()->validate($validated);

                    if ($foto = request('foto')) {
                        $filename = $foto->getClientOriginalName();
                        $foto->move(public_path('img/foto'), $filename);
                    }
    
                    $user = User::findOrFail($userId);
                    $user->name = request('name');
                    $user->email = request('email');
                    $user->username = request('username');
                    $user->foto = $filename;
                    $user->save();
    
                    $civitasDetail = CivitasDetail::where('user_id', $user->id)->first();
                    $civitasDetail->nip = request('nip');
                    $civitasDetail->nuptk = request('nuptk');
                    $civitasDetail->nik = request('nik');
                    $civitasDetail->jk = request('jk');
                    $civitasDetail->tempat_lahir = request('tempat_lahir');
                    $civitasDetail->tanggal_lahir = request('tanggal_lahir');
                    $civitasDetail->no_handphone = request('no_handphone');
                    $civitasDetail->status = request('status');
                    $civitasDetail->alamat = request('alamat');
                    $civitasDetail->save();
                } elseif ($role === 'perusahaan') {
                    $validated = [
                        'name' => 'required|string',
                        'username' => 'required|string',
                        'email' => 'required|email',
                        'jenis_perusahaan' => 'required|string',
                        'alamat_perusahaan' => 'required|string|max:255',
                        'no_perusahaan' => 'required|string|max:13',
                    ];
    
                    request()->validate($validated);

                    if ($foto = request('foto')) {
                        $filename = $foto->getClientOriginalName();
                        $foto->move(public_path('img/foto'), $filename);
                    }
    
                    $user = User::find($userId);
                    $user->name = request('name');
                    $user->email = request('email');
                    $user->username = request('username');
                    $user->foto = $filename;
                    $user->save();
    
                    $companyDetail = CompanyDetail::where('user_id', $user->id)->first();
                    $companyDetail->jenis_perusahaan = request('jenis_perusahaan');
                    $companyDetail->alamat_perusahaan = request('alamat_perusahaan');
                    $companyDetail->no_perusahaan = request('no_perusahaan');
                    $companyDetail->save();
                } elseif ($role === 'alumni') {
                    $validated = [
                        'name' => 'required|string',
                        'username' => 'required|string',
                        'email' => 'required|email',
                        'nis' => 'required|string|max:18',
                        'nisn' => 'required|string|max:16',
                        'nik' => 'required|string|max:16',
                        'jk' => 'required',
                        'tempat_lahir' => 'required|string',
                        'tanggal_lahir' => 'required',
                        'no_handphone' => 'required',
                        'alamat' => 'required|string',
                        'status' => 'required',
                        'keahlian' => 'required',
                        'organisasi' => 'required',
                        'pengalaman_kerja' => 'required',
                        'foto' => 'required|mimes:png,jpg,jpeg,svg|max:1048',
                        'ayah' => 'required',
                        'pekerjaan_ayah' => 'required',
                        'ibu' => 'required',
                        'pekerjaan_ibu' => 'required',
                        'jurusan' => 'required',
                        'rombel' => 'required',
                        'tahun_masuk' => 'required',
                        'tahun_lulus' => 'required',
                        'rata_ijazah' => 'required',
                    ];
    
                    request()->validate($validated);
    
                    if ($foto = request('foto')) {
                        $filename = $foto->getClientOriginalName();
                        $foto->move(public_path('img/foto'), $filename);
                    }
    
                    $user = User::findOrFail($userId);
                    $user->name = request('name');
                    $user->email = request('email');
                    $user->username = request('username');
                    $user->foto = $filename;
                    $user->save();
    
                    $alumniDetail = AlumniDetail::where('user_id', $user->id)->first();
                    $alumniDetail->nis = request('nis');
                    $alumniDetail->nisn = request('nisn');
                    $alumniDetail->nik = request('nik');
                    $alumniDetail->jk = request('jk');
                    $alumniDetail->tempat_lahir = request('tempat_lahir');
                    $alumniDetail->tanggal_lahir = request('tanggal_lahir');
                    $alumniDetail->no_handphone = request('no_handphone');
                    $alumniDetail->alamat = request('alamat');
                    $alumniDetail->status = request('status');
                    $alumniDetail->keahlian = request('keahlian');
                    $alumniDetail->organisasi = request('organisasi');
                    $alumniDetail->pengalaman_kerja = request('pengalaman_kerja');
                    $alumniDetail->save();
    
                    $AlumniFamily = AlumniFamily::where('user_id', $user->id)->first();
                    $AlumniFamily->ayah = request('ayah');
                    $AlumniFamily->pekerjaan_ayah = request('pekerjaan_ayah');
                    $AlumniFamily->ibu = request('ibu');
                    $AlumniFamily->pekerjaan_ibu = request('pekerjaan_ibu');
                    $AlumniFamily->save();
    
                    $AlumniAcademic = AlumniAcademic::where('user_id', $user->id)->first();
                    $AlumniAcademic->jurusan = request('jurusan');
                    $AlumniAcademic->rombel = request('rombel');
                    $AlumniAcademic->tahun_masuk = request('tahun_masuk');
                    $AlumniAcademic->tahun_lulus = request('tahun_lulus');
                    $AlumniAcademic->rata_ijazah = request('rata_ijazah');
                    $AlumniAcademic->save();
                }
            });
        } catch (InvalidArgumentException $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 400);
        }

        return response()->json([
            'message' => 'Detail profil berhasil dirubah',
        ]);
    }
}
