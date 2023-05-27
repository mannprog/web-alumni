<?php

namespace App\Http\Controllers;

use App\Models\User;
use InvalidArgumentException;
use Illuminate\Support\Facades\DB;
use App\DataTables\CompanyDataTable;
use App\Models\CompanyDetail;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CompanyDataTable $dataTable)
    {
        return $dataTable->render('admin.pages.company.index');
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
                    'jenis_perusahaan' => 'required|string',
                    'alamat_perusahaan' => 'required|string|max:255',
                    'no_perusahaan' => 'required|string|max:12',
                ]);

                // Buat User terlebih dahulu lalu ...
                $user = User::create([
                    'name' => request('name'),
                    'email' => request('email'),
                    'username' => request('username'),
                    'password' => password_hash(request('password'), PASSWORD_DEFAULT),
                ])->assignRole('perusahaan');

                CompanyDetail::create([
                    'user_id' => $user->id,
                    'jenis_perusahaan' => request('jenis_perusahaan'),
                    'alamat_perusahaan' => request('alamat_perusahaan'),
                    'no_perusahaan' => request('no_perusahaan'),
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

    /**
     * Display the specified resource.
     */
    public function show(string $companyId)
    {
        $company = User::with('company_detail')->find($companyId);

        return view('admin.pages.company.detail', [
            'company' => $company,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $companyId)
    {
        $company = User::with('company_detail')->find($companyId);
        return response()->json($company);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        $company_id = request('company_id');

        try {
            DB::transaction(function () use ($company_id) {

                $validated = [
                    'name' => 'required|string',
                    'username' => 'required|string',
                    'email' => 'required|email',
                    'jenis_perusahaan' => 'required|string',
                    'alamat_perusahaan' => 'required|string|max:255',
                    'no_perusahaan' => 'required|string|max:13',
                ];

                $user = User::findOrFail($company_id);
                $user->name = request('name');
                $user->email = request('email');
                $user->username = request('username');
                $user->save();

                $companyDetail = CompanyDetail::where('user_id', $user->id)->first();
                if (!$companyDetail) {
                    $companyDetail = new CompanyDetail();
                    $companyDetail->user_id = $user->id;
                }

                $companyDetail->jenis_perusahaan = request('jenis_perusahaan');
                $companyDetail->alamat_perusahaan = request('alamat_perusahaan');
                $companyDetail->no_perusahaan = request('no_perusahaan');
                $companyDetail->save();

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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $company = User::findOrFail($id);
            $company->delete();
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
