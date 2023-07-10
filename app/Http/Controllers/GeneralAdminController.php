<?php

namespace App\Http\Controllers;

use App\DataTables\LamaranDataTable;
use App\Models\Loker;
use App\Models\Lamaran;
use App\Models\User;
use Illuminate\Http\Request;
use InvalidArgumentException;
use Illuminate\Support\Facades\DB;

class GeneralAdminController extends Controller
{
    public function allLowongan()
    {
        return view('admin.pages.general.lowongan.index', [
            'lowongan' => Loker::paginate(10),
        ]);
    }

    public function detailLowongan(string $slug)
    {
        $loker = Loker::where('slug', $slug)->first();

        if (!$loker) {
            abort(404);
        }

        return view('admin.pages.general.lowongan.detail', compact('loker'));
    }

    public function allLowonganAlumni()
    {
        return view('notadmin.pages.lowongan.index', [
            'lowongan' => Loker::paginate(10),
        ]);
    }

    public function detailLowonganAlumni(string $slug)
    {
        $loker = Loker::where('slug', $slug)->first();

        if (!$loker) {
            abort(404);
        }

        return view('notadmin.pages.lowongan.detail', compact('loker'));
    }

    public function kirimLamaran()
    {
        try {
            DB::transaction(function () {

                $lamaran = new Lamaran();
                $lamaran->user_id = request('user_id');
                $lamaran->loker_id = request('loker_id');
                $lamaran->tanggal_lamaran = today();
                $lamaran->save();
            });
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
            return redirect()->back()->with('message', $message);
        }

        return redirect()->back()->with('message', 'Lamaran berhasil dikirim');
    }

    public function allAlumni()
    {
        $alumni = User::whereHas('roles', function ($query) {
            $query->where('name', 'alumni');
        })->paginate(10);

        return view('admin.pages.general.alumni.index', compact('alumni'));
    }

    public function detailAlumni($username)
    {
        $alumni = User::where('username', $username)->first();

        return view('admin.pages.general.alumni.detail', compact('alumni'));
    }

    public function alumnus()
    {
        $alumni = User::whereHas('roles', function ($query) {
            $query->where('name', 'alumni');
        })->paginate(10);

        return view('notadmin.pages.alumni.index', compact('alumni'));
    }

    public function detailAlumnus($username)
    {
        $alumni = User::where('username', $username)->first();

        return view('notadmin.pages.alumni.detail', compact('alumni'));
    }

    public function lamaran(LamaranDataTable $dataTable)
    {
        return $dataTable->render('notadmin.pages.lamaran.index');
    }
}
