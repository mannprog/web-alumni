<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Loker;
use App\Models\User;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $berita = Berita::latest()->take(3)->get();
        $loker = Loker::where('is_active', 0)->latest()->take(3)->get();
        $alumni = User::whereHas('roles', function ($query) {
            $query->where('name', 'alumni');
        })->take(4)->get();

        return view('home.welcome', compact('berita', 'loker', 'alumni'));
    }

    public function allBerita()
    {
        $berita = Berita::latest()->paginate(9);

        return view('home.pages.berita.index', compact('berita'));
    }

    public function detailBerita($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();

        return view('home.pages.berita.detail', compact('berita'));   
    }

    public function allLowongan()
    {
        $loker = Loker::where('is_active', 0)->latest()->paginate(9);

        return view('home.pages.lowongan.index', compact('loker'));
    }

    public function detailLowongan($slug)
    {
        $loker = Loker::where('slug', $slug)->firstOrFail();

        return view('home.pages.lowongan.detail', compact('loker'));   
    }
}
