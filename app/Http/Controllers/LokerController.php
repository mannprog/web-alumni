<?php

namespace App\Http\Controllers;

use App\Models\Loker;
use Illuminate\Http\Request;
use InvalidArgumentException;
use App\DataTables\LokerDataTable;

class LokerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(LokerDataTable $dataTable)
    {
        return $dataTable->render('admin.pages.loker.index');
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
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
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
            $loker = Loker::findOrFail($id);
            $loker->delete();
        } catch (InvalidArgumentException $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 400);
        }
        return response()->json([
            'message' => 'Lowongan Kerja berhasil dihapus',
        ]);
    }
}