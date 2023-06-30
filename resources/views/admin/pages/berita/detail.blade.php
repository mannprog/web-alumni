@extends('admin.layouts.app', ['title' => 'Detail Berita'])

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Berita - {{ $berita->judul }}</h1>
        <a href="{{ route('berita.index') }}" class="btn btn-sm btn-secondary shadow-sm">Kembali</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            @if ($berita->foto)
                <img class="card-img-top" src="{{ asset('img/berita/' . $berita->foto) }}" style="height: 250px">
            @else
                <h5 class="font-italic text-center">Tidak Ada Gambar</h5>
            @endif
            <div class="card-body">
                <h2 class="card-title font-weight-bold text-center">{{ $berita->judul }}</h2>
                <p class="card-text text-justify">{!! $berita->isi !!}</p>
            </div>
        </div>
    </div>
@endsection
