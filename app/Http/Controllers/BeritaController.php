<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use InvalidArgumentException;
use Illuminate\Support\Facades\DB;
use App\DataTables\BeritaDataTable;
use App\Http\Requests\BeritaRequest;

// use function Termwind\render;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(BeritaDataTable $datatable)
    {
        return $datatable->render('admin.pages.berita.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BeritaRequest $request)
    {
        $beritaId = request('berita_id');

        try {
            DB::transaction(function () use ($beritaId, $request) {

                $berita = $request->validated();

                Berita::updateOrCreate(['id' => $beritaId], $berita);

            });
        } catch (InvalidArgumentException $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 400);
        }

        return response()->json([
            'message' => 'News added successfully',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $beritaId)
    {
        $berita = Berita::findOrFail($beritaId);
        return response()->json($berita);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
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
            'message' => 'News has been deleted',
        ]);
    }
}
