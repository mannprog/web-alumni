<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use InvalidArgumentException;
use Illuminate\Support\Facades\DB;
use App\DataTables\BeritaDataTable;
use Cviebrock\EloquentSluggable\Services\SlugService;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(BeritaDataTable $dataTable)
    {
        return $dataTable->render('admin.pages.berita.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        try {
            DB::transaction(function () {
                request()->validate([
                    'judul' => 'required',
                    'isi' => 'required',
                    'foto' => 'sometimes|mimes:png,jpg,jpeg,svg|max:1048',
                ]);

                $slug = SlugService::createSlug(Berita::class, 'slug', request('judul'));
                $kutipan = Str::limit(request('isi'), 200);

                $berita = new Berita();
                $berita->user_id = auth()->user()->id;
                $berita->judul = request('judul');
                $berita->slug = $slug;
                $berita->kutipan = $kutipan;
                $berita->isi = request('isi');

                if (request()->hasFile('foto')) {
                    $foto = request()->file('foto');
                    $filename = $foto->getClientOriginalName();
                    $foto->move(public_path('img/berita'), $filename);
                    $berita->foto = $filename;
                }

                $berita->save();
            });
        } catch (InvalidArgumentException $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 400);
        }

        return response()->json([
            'message' => 'Berita berhasil ditambahkan',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->first();

        if (!$berita) {
            abort(404);
        }

        return view('admin.pages.berita.detail', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $berita = Berita::where('slug', $slug)->first();

        if (!$berita) {
            abort(404); // Jika berita dengan slug tersebut tidak ditemukan, tampilkan halaman 404
        }

        return view('admin.pages.berita.component.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        $berita_id = request('berita_id');
        try {
            DB::transaction(function () use ($berita_id) {
                request()->validate([
                    'judul' => 'required',
                    'isi' => 'required',
                    'foto' => 'sometimes|mimes:png,jpg,jpeg,svg|max:1048',
                ]);

                $slug = SlugService::createSlug(Berita::class, 'slug', request('judul'));
                $kutipan = Str::limit(request('isi'), 200);

                $berita = Berita::findOrFail($berita_id);
                $berita->user_id = auth()->user()->id;
                $berita->judul = request('judul');
                $berita->slug = $slug;
                $berita->kutipan = $kutipan;
                $berita->isi = request('isi');

                if (request()->hasFile('foto')) {
                    $foto = request()->file('foto');
                    $filename = $foto->getClientOriginalName();
                    $foto->move(public_path('img/berita'), $filename);
                    $berita->foto = $filename;
                }

                $berita->save();
            });
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
            return redirect()->route('alumni.index')->with('message', $message);
        }

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $berita = Berita::findOrFail($id);
            $berita->delete();
        } catch (InvalidArgumentException $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 400);
        }
        return response()->json([
            'message' => 'Berita berhasil dihapus',
        ]);
    }
}