<?php

namespace App\Http\Controllers;

use App\Models\AlumniAcademic;
use App\Models\User;
use InvalidArgumentException;
use Illuminate\Support\Facades\DB;
use App\DataTables\AlumniDataTable;
use App\Models\AlumniDetail;
use App\Models\AlumniFamily;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(AlumniDataTable $dataTable)
    {
        return $dataTable->render('admin.pages.alumni.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        try {
            DB::transaction(function () {

                request()->validate([
                    'name' => 'required|string',
                    'username' => 'required|string|unique:users,username',
                    'email' => 'required|email|unique:users,email',
                    'password' => 'required|min:4',
                    'jk' => 'required',
                    'status' => 'required',
                    'jurusan' => 'required',
                ]);

                // Buat User terlebih dahulu lalu ...
                $user = User::create([
                    'name' => request('name'),
                    'email' => request('email'),
                    'username' => request('username'),
                    'password' => password_hash(request('password'), PASSWORD_DEFAULT),
                ])->assignRole('alumni');

                AlumniDetail::create([
                    'user_id' => $user->id,
                    'jk' => request('jk'),
                    'status' => request('status'),
                ]);

                AlumniFamily::create([
                    'user_id' => $user->id,
                ]);

                AlumniAcademic::create([
                    'user_id' => $user->id,
                    'jurusan' => request('jurusan'),
                ]);
            });
        } catch (InvalidArgumentException $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 400);
        }

        return response()->json([
            'message' => 'Data Alumni berhasil ditambahkan',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $alumniId)
    {
        $alumni = User::with(['alumni_detail', 'alumni_family', 'alumni_academic'])->findOrFail($alumniId);

        return view('admin.pages.alumni.detail', [
            'alumni' => $alumni
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $alumniId)
    {
        $alumni = User::with('alumni_detail', 'alumni_family', 'alumni_academic')->findOrFail($alumniId);
        return response()->json($alumni);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        $alumni_id = request('alumni_id');

        try {
            DB::transaction(function () use ($alumni_id) {

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

                if ($foto = request('foto')) {
                    $filename = $foto->getClientOriginalName();
                    $foto->move(public_path('img/foto'), $filename);
                }

                $user = User::findOrFail($alumni_id);
                $user->name = request('name');
                $user->email = request('email');
                $user->username = request('username');
                $user->foto = $filename;
                $user->save();

                $alumniDetail = AlumniDetail::where('user_id', $user->id)->first();
                if (!$alumniDetail) {
                    $alumniDetail = new AlumniDetail();
                    $alumniDetail->user_id = $user->id;
                }

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
                if (!$AlumniFamily) {
                    $AlumniFamily = new AlumniFamily();
                    $AlumniFamily->user_id = $user->id;
                }

                $AlumniFamily->ayah = request('ayah');
                $AlumniFamily->pekerjaan_ayah = request('pekerjaan_ayah');
                $AlumniFamily->ibu = request('ibu');
                $AlumniFamily->pekerjaan_ibu = request('pekerjaan_ibu');
                $AlumniFamily->save();

                $AlumniAcademic = AlumniAcademic::where('user_id', $user->id)->first();
                if (!$AlumniAcademic) {
                    $AlumniAcademic = new AlumniAcademic();
                    $AlumniAcademic->user_id = $user->id;
                }

                $AlumniAcademic->jurusan = request('jurusan');
                $AlumniAcademic->rombel = request('rombel');
                $AlumniAcademic->tahun_masuk = request('tahun_masuk');
                $AlumniAcademic->tahun_lulus = request('tahun_lulus');
                $AlumniAcademic->rata_ijazah = request('rata_ijazah');
                $AlumniAcademic->save();

            });
        } catch (InvalidArgumentException $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 400);
        }

        return response()->json([
            'message' => 'Data Alumni berhasil dirubah',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $alumni = User::findOrFail($id);
            $alumni->delete();
        } catch (InvalidArgumentException $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 400);
        }
        return response()->json([
            'message' => 'Alumni berhasil dihapus',
        ]);
    }
}
