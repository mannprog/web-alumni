<?php

namespace App\Http\Controllers;

use App\Models\User;
use InvalidArgumentException;
use Illuminate\Support\Facades\DB;
use App\DataTables\AlumniDataTable;
use App\Models\AlumniAkademik;
use App\Models\AlumniDetail;
use App\Models\AlumniKeluarga;
use App\Models\UserKontak;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;

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
                    'jenis_kelamin' => 'required',
                    'pendidikan_terakhir' => 'required',
                    'status' => 'required',
                    'jurusan' => 'required',
                    'nis' => 'required|max:16',
                    'nisn' => 'required|max:8',
                    'tahun_masuk' => 'required',
                    'tahun_lulus' => 'required',
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
                    'jenis_kelamin' => request('jenis_kelamin'),
                    'status' => request('status'),
                    'pendidikan_terakhir' => request('pendidikan_terakhir'),
                ]);

                AlumniKeluarga::create([
                    'user_id' => $user->id,
                ]);

                AlumniAkademik::create([
                    'user_id' => $user->id,
                    'nis' => request('nis'),
                    'nisn' => request('nisn'),
                    'jurusan' => request('jurusan'),
                    'tahun_masuk' => request('tahun_masuk'),
                    'tahun_lulus' => request('tahun_lulus'),
                ]);

                UserKontak::create([
                    'user_id' => $user->id,
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
        $alumni = User::with(['alumniDetail', 'alumniKeluarga', 'alumniAkademik', 'userKontak'])->findOrFail($alumniId);

        return view('admin.pages.alumni.detail', [
            'alumni' => $alumni
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $alumniId)
    {
        $alumni = User::with(['alumniDetail', 'alumniKeluarga', 'alumniAkademik', 'userKontak'])->findOrFail($alumniId);
        return view('admin.pages.alumni.component.edit', [
            'alumni' => $alumni,
        ]);
        // return response()->json($alumni);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id): RedirectResponse
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
                    'foto' => 'required|mimes:png,jpg,jpeg,svg|max:1048',
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

                if ($foto = request('foto')) {
                    $filename = $foto->getClientOriginalName();
                    $foto->move(public_path('img/foto'), $filename);
                    $validated['foto'] = $filename;
                }

                $user = User::findOrFail($id);
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
            return redirect()->route('alumni.index')->with('message', $message);
            // return response()->json([
            //     'message' => $e->getMessage(),
            // ], 400);
        }

        return redirect()->route('alumni.index')->with('success', 'Data Alumni berhasil diupdate');
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