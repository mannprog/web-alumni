@extends('home.pages.layout')

@section('content')
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Detail Berita</h2>
                <ol>
                    <li><a href="{{ route('homepage') }}"><i class="bi bi-house-fill"></i> Beranda</a></li>
                    <li><a href="{{ route('all-berita') }}">Berita</a></li>
                    <li>Detail Berita</li>
                </ol>
            </div>

        </div>
    </section><!-- Breadcrumbs Section -->

    <div class="container">
        <div class="text-center mt-3">
            <h1><b>{{ $berita->judul }}</b></h1>
            <p>{{ \Carbon\Carbon::parse($berita->updated_at)->format('d M Y H:i:s') }}</p>
        </div>

        @if ($berita->foto)
            <img src="{{ asset('img/berita/' . $berita->foto) }}" class="img-fluid mt-3">
        @endif

        <p class="text-justify">{!! $berita->isi !!}</p>
    </div>
@endsection
