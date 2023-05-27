<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use InvalidArgumentException;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\DataTables\CivitasDataTable;
use App\Models\CivitasDetail;

class CivitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CivitasDataTable $dataTable)
    {
        return $dataTable->render('admin.pages.civitas.index', [
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
                    'role' => 'required',
                ]);

                // Buat User terlebih dahulu lalu ...
                $user = User::create([
                    'name' => request('name'),
                    'email' => request('email'),
                    'username' => request('username'),
                    'password' => password_hash(request('password'), PASSWORD_DEFAULT),
                ])->assignRole(request('role'));

                CivitasDetail::create([
                    'user_id' => $user->id,
                ]);
            });
        } catch (InvalidArgumentException $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 400);
        }

        return response()->json([
            'message' => 'Data GTK berhasil ditambahkan',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $civitasId)
    {
        $civitas = User::with('civitas_detail')->find($civitasId);

        return view('admin.pages.civitas.detail', [
            'civitas' => $civitas,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $civitasId)
    {
        $civitas = User::with('civitas_detail', 'roles')->findOrFail($civitasId);
        return response()->json($civitas);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        $civitas_id = request('civitas_id');

        try {
            DB::transaction(function () use ($civitas_id) {

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
                    'role' => 'required',
                ];

                $user = User::findOrFail($civitas_id);
                $user->name = request('name');
                $user->email = request('email');
                $user->username = request('username');
                (request('role') )? $user->syncRoles(request('role')) : 'Berarti bukan civitas';
                $user->save();

                $civitasDetail = CivitasDetail::where('user_id', $user->id)->first();
                if (!$civitasDetail) {
                    $civitasDetail = new CivitasDetail();
                    $civitasDetail->user_id = $user->id;
                }

                if ($foto = request('foto')) {
                    $filename = $foto->getClientOriginalName();
                    $foto->move(public_path('img/foto'), $filename);
                }

                $civitasDetail->nip = request('nip');
                $civitasDetail->nuptk = request('nuptk');
                $civitasDetail->nik = request('nik');
                $civitasDetail->jk = request('jk');
                $civitasDetail->tempat_lahir = request('tempat_lahir');
                $civitasDetail->tanggal_lahir = request('tanggal_lahir');
                $civitasDetail->no_handphone = request('no_handphone');
                $civitasDetail->status = request('status');
                $civitasDetail->alamat = request('alamat');
                $civitasDetail->foto = $filename;
                $civitasDetail->save();

            });
        } catch (InvalidArgumentException $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 400);
        }

        return response()->json([
            'message' => 'Data GTK berhasil dirubah',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $civitas = User::findOrFail($id);
            $civitas->delete();
        } catch (InvalidArgumentException $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 400);
        }
        return response()->json([
            'message' => 'GTK berhasil dihapus',
        ]);
    }
}
