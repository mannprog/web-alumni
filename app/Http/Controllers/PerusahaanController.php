<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use InvalidArgumentException;
use Illuminate\Support\Facades\DB;
use App\DataTables\PerusahaanDataTable;
use App\Models\PerusahaanDetail;
use App\Models\UserKontak;

class PerusahaanController extends Controller
{
    public function index(PerusahaanDataTable $dataTable)
    {
        return $dataTable->render('admin.pages.perusahaan.index');
    }
    public function show(string $perusahaanId)
    {
        $perusahaan = User::with(['perusahaanDetail', 'userKontak'])->find($perusahaanId);

        return view('admin.pages.perusahaan.detail', [
            'data' => $perusahaan,
        ]);
    }

    public function store()
    {
        try {
            DB::transaction(function () {

                request()->validate([
                    'name' => 'required|string',
                    'username' => 'required|string|unique:users,username',
                    'email' => 'required|email|unique:users,email',
                    'password' => 'required|min:4',
                    'jenis' => 'required',
                    'alamat' => 'required',
                ]);

                $user = User::create([
                    'name' => request('name'),
                    'email' => request('email'),
                    'username' => request('username'),
                    'password' => password_hash(request('password'), PASSWORD_DEFAULT),
                    'is_admin' => 0,
                ])->assignRole('perusahaan');

                PerusahaanDetail::create([
                    'user_id' => $user->id,
                    'jenis' => request('jenis'),
                    'alamat' => request('alamat'),
                ]);

                UserKontak::create([
                    'user_id' => $user->id,
                    'no_handphone' => request('no_handphone'),
                    'facebook' => request('facebook'),
                    'instagram' => request('instagram'),
                    'twitter' => request('twitter'),
                ]);
            });
        } catch (InvalidArgumentException $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 400);
        }

        return response()->json([
            'message' => 'Data perusahaan berhasil ditambahkan',
        ]);
    }

    public function edit(string $perusahaanId)
    {
        $perusahaan = User::with(['perusahaanDetail', 'userKontak'])->find($perusahaanId);
        return response()->json($perusahaan);
    }

    public function update()
    {
        $perusahaan_id = request('perusahaan_id');

        try {
            DB::transaction(function () use ($perusahaan_id) {

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

                $user = User::findOrFail($perusahaan_id);
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
                if (!$perusahaanDetail) {
                    $perusahaanDetail = new PerusahaanDetail();
                    $perusahaanDetail->user_id = $user->id;
                }

                $perusahaanDetail->jenis = request('jenis');
                $perusahaanDetail->alamat = request('alamat');
                $perusahaanDetail->save();

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
            'message' => 'Data perusahaan berhasil dirubah',
        ]);
    }

    public function destroy(string $id)
    {
        try {
            $perusahaan = User::findOrFail($id);
            $perusahaan->delete();
        } catch (InvalidArgumentException $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 400);
        }
        return response()->json([
            'message' => 'Perusahaan berhasil dihapus',
        ]);
    }
}