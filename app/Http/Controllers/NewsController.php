<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use InvalidArgumentException;
use App\DataTables\NewsDataTable;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(NewsDataTable $dataTable)
    {
        return $dataTable->render('admin.pages.news.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewsRequest $request)
    {
        $newsId = request('news_id');

        try {
            DB::transaction(function () use ($newsId, $request) {

                $news = $request->validated();

                $data = [
                    'user_id' => auth()->user()->id,
                    'judul' => request('judul'),
                    'isi' => request('isi'),
                ];

                News::updateOrCreate(['id' => $newsId], $data);

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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $newsId)
    {
        $news = News::findOrFail($newsId);
        return response()->json($news);
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
            $news = News::findOrFail($id);
            $news->delete();
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
