<?php

namespace App\Http\Controllers;

use App\Models\PetugasDetail;
use App\Models\User;
use App\Models\UserKontak;
use InvalidArgumentException;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\DataTables\PetugasDataTable;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PetugasDataTable $dataTable)
    {
        return $dataTable->render('admin.pages.petugas.index', [
            'roles' => Role::get(),
        ]);
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
                    'role' => 'required',
                ]);

                // Buat User terlebih dahulu lalu ...
                $user = User::create([
                    'name' => request('name'),
                    'email' => request('email'),
                    'username' => request('username'),
                    'password' => password_hash(request('password'), PASSWORD_DEFAULT),
                    'is_admin' => 0,
                ])->assignRole(request('role'));

                PetugasDetail::create([
                    'user_id' => $user->id,
                    'jenis_kelamin' => request('jenis_kelamin'),
                    'pendidikan_terakhir' => request('pendidikan_terakhir'),
                    'status' => request('status'),
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
            'message' => 'Data petugas berhasil ditambahkan',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $petugas = User::with(['petugasDetail', 'userKontak'])->find($id);

        return view('admin.pages.petugas.detail', [
            'petugas' => $petugas,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $petugas = User::with(['petugasDetail', 'userKontak', 'roles'])->findOrFail($id);
        return response()->json($petugas);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        $petugas_id = request('petugas_id');

        try {
            DB::transaction(function () use ($petugas_id) {

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
                    'role' => 'required',
                ];

                $user = User::findOrFail($petugas_id);
                $user->name = request('name');
                $user->email = request('email');
                $user->username = request('username');
                if (request()->hasFile('foto')) {
                    $foto = request()->file('foto');
                    $filename = $foto->getClientOriginalName();
                    $foto->move(public_path('img/foto'), $filename);
                    $user->foto = $filename;
                }
                (request('role')) ? $user->syncRoles(request('role')) : 'Berarti bukan civitas';
                $user->save();

                $petugasDetail = PetugasDetail::where('user_id', $user->id)->first();
                if (!$petugasDetail) {
                    $petugasDetail = new PetugasDetail();
                    $petugasDetail->user_id = $user->id;
                }

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
                if (!$userKontak) {
                    $userKontak = new UserKontak();
                    $userKontak->user_id = $user->id;
                }

                $userKontak->no_handphone = request('no_handphone');
                $userKontak->facebook = request('facebook');
                $userKontak->instagram = request('instagram');
                $userKontak->twitter = request('twitter');
                $userKontak->save();

            });
        } catch (InvalidArgumentException $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 400);
        }

        return response()->json([
            'message' => 'Data Petugas berhasil dirubah',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $petugas = User::findOrFail($id);
            $petugas->delete();
        } catch (InvalidArgumentException $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 400);
        }
        return response()->json([
            'message' => 'Petugas berhasil dihapus',
        ]);
    }
}