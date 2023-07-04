<?php

namespace App\Http\Controllers;

use App\Models\Loker;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use InvalidArgumentException;
use App\DataTables\LokerDataTable;
use Illuminate\Support\Facades\DB;
use Cviebrock\EloquentSluggable\Services\SlugService;

class LokerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(LokerDataTable $dataTable)
    {
        $loker = Loker::with('kategori')->get();

        return $dataTable->render('admin.pages.loker.index', compact('loker'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        try {
            DB::transaction(function () {
                request()->validate([
                    'nama' => 'required',
                    'lokasi' => 'required',
                    'isi' => 'required',
                    'tanggal_mulai' => 'required',
                    'tanggal_akhir' => 'required',
                    'kategori_id' => 'required',
                    'is_active' => 'required',
                    'foto' => 'sometimes|mimes:png,jpg,jpeg,svg|max:1048',
                ]);

                $slug = SlugService::createSlug(Loker::class, 'slug', request('nama'));

                $loker = new Loker();
                $loker->user_id = auth()->user()->id;
                $loker->kategori_id = request('kategori_id');
                $loker->nama = request('nama');
                $loker->slug = $slug;
                $loker->lokasi = request('lokasi');
                $loker->isi = request('isi');
                $loker->tanggal_mulai = request('tanggal_mulai');
                $loker->tanggal_akhir = request('tanggal_akhir');
                $loker->is_active = request('is_active');

                if (request()->hasFile('foto')) {
                    $foto = request()->file('foto');
                    $filename = $foto->getClientOriginalName();
                    $foto->move(public_path('img/loker'), $filename);
                    $loker->foto = $filename;
                }

                $loker->save();
            });
        } catch (InvalidArgumentException $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 400);
        }

        return response()->json([
            'message' => 'Lowongan kerja berhasil ditambahkan',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $loker = Loker::where('slug', $slug)->first();

        if (!$loker) {
            abort(404);
        }

        return view('admin.pages.loker.detail', compact('loker'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        // $loker = Loker::where('slug', $slug)->first();
        $loker = Loker::with('kategori')->where('slug', $slug)->first();

        if (!$loker) {
            abort(404);
        }

        $kategoriList = Kategori::all();
        
        return view('admin.pages.loker.component.edit', compact('loker', 'kategoriList'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        $loker_id = request('loker_id');
        try {
            DB::transaction(function () use ($loker_id) {
                request()->validate([
                    'nama' => 'required',
                    'lokasi' => 'required',
                    'isi' => 'required',
                    'tanggal_mulai' => 'required',
                    'tanggal_akhir' => 'required',
                    'kategori_id' => 'required',
                    'is_active' => 'required',
                    'foto' => 'sometimes|mimes:png,jpg,jpeg,svg|max:1048',
                ]);

                $slug = SlugService::createSlug(Loker::class, 'slug', request('nama'));

                $loker = Loker::findOrFail($loker_id);
                $loker->user_id = auth()->user()->id;
                $loker->kategori_id = request('kategori_id');
                $loker->nama = request('nama');
                $loker->slug = $slug;
                $loker->lokasi = request('lokasi');
                $loker->isi = request('isi');
                $loker->tanggal_mulai = request('tanggal_mulai');
                $loker->tanggal_akhir = request('tanggal_akhir');
                $loker->is_active = request('is_active');

                if (request()->hasFile('foto')) {
                    $foto = request()->file('foto');
                    $filename = $foto->getClientOriginalName();
                    $foto->move(public_path('img/loker'), $filename);
                    $loker->foto = $filename;
                }

                $loker->save();
            });
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
            return redirect()->route('alumni.index')->with('message', $message);
        }

        return redirect()->route('loker.index')->with('success', 'Lowongan kerja berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $loker = Loker::findOrFail($id);
            $loker->delete();
        } catch (InvalidArgumentException $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 400);
        }
        return response()->json([
            'message' => 'Lowongan kerja berhasil dihapus',
        ]);
    }
}