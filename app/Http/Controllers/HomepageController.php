<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Loker;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $berita = Berita::latest()->take(3)->get();
        $loker = Loker::latest()->take(3)->get();

        return view('home.welcome', compact('berita', 'loker'));
    }

    public function allBerita()
    {
        $berita = Berita::latest()->paginate(9);

        return view('home.pages.berita.berita', compact('berita'));
    }

    public function detailBerita($slug)
{
    $berita = Berita::where('slug', $slug)->firstOrFail();

    return view('home.pages.berita.detail', compact('berita'));
}
}
