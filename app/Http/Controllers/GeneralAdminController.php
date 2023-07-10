<?php

namespace App\Http\Controllers;

use App\Models\Loker;
use App\Models\Lamaran;
use Illuminate\Http\Request;
use InvalidArgumentException;
use Illuminate\Support\Facades\DB;

class GeneralAdminController extends Controller
{
    public function allLowongan()
    {
        return view('admin.pages.general.lowongan.index', [
            'lowongan' => Loker::all(),
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
            'lowongan' => Loker::all(),
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
}
