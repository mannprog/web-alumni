<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use function Termwind\render;

use InvalidArgumentException;
use Illuminate\Support\Facades\DB;
use App\DataTables\KategoriDataTable;
use App\Http\Requests\KategoriRequest;
use App\Models\Loker;
use Cviebrock\EloquentSluggable\Services\SlugService;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('admin.pages.kategori.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KategoriRequest $request)
    {
        $kategoriId = request('kategori_id');

        try {
            DB::transaction(function () use ($kategoriId, $request) {

                $slug = SlugService::createSlug(Kategori::class, 'slug', request('nama'));
                $kategori = $request->validated();

                $kategoris = [
                    'nama' => $kategori['nama'],
                    'slug' => $slug,
                ];

                Kategori::updateOrCreate(['id' => $kategoriId], $kategoris);

            });
        } catch (InvalidArgumentException $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 400);
        }

        return response()->json([
            'message' => 'Data kategori lowongan berhasil disimpan',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $kategori = Kategori::where('slug', $slug)->first();

        if (!$kategori) {
            abort(404);
        }
        
        $lowongan = Loker::where('kategori_id', $kategori->id)->get();

        return view('admin.pages.kategori.detail', compact('kategori', 'lowongan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($kategoriId)
    {
        $kategori = Kategori::findOrFail($kategoriId);
        return response()->json($kategori);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $kategori = Kategori::findOrFail($id);
            $kategori->delete();
        } catch (InvalidArgumentException $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 400);
        }
        return response()->json([
            'message' => 'Kategori berhasil dihapus',
        ]);
    }
}
