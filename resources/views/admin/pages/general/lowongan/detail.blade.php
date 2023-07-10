@extends('admin.layouts.app', ['title' => 'Detail Lowongan Kerja'])

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Lowongan Kerja - {{ $loker->nama }}</h1>
        <a href="{{ route('lowongan.index') }}" class="btn btn-sm btn-secondary shadow-sm">Kembali</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 mx-auto text-center mb-3">
                    @if ($loker->foto)
                        <img class="card-img-top" src="{{ asset('img/loker/' . $loker->foto) }}" style="height: 250px">
                    @else
                        <img class="card-img-top img-fluid" src="{{ asset('img/foto/' . $loker->user->foto) }}"
                            style="height: 250px">
                    @endif
                </div>
                <div class="col-lg-9">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <h4 class="font-weight-bold border-bottom pb-2">{{ $loker->nama }}
                            </h4>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-4 col-lg-2">
                            <p class="card-text">Status</p>
                        </div>
                        <div class="col-1">
                            <p class="card-text">:</p>
                        </div>
                        <div class="col-7 col-lg-9">
                            @if ($loker->is_active === 0)
                                <p class="card-text text-justify">Lowongan masih berlangsung</p>
                            @else
                                <p class="card-text text-justify">Lowongan sudah ditutup</p>
                            @endif
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-4 col-lg-2">
                            <p class="card-text">Lokasi</p>
                        </div>
                        <div class="col-1">
                            <p class="card-text">:</p>
                        </div>
                        <div class="col-7 col-lg-9">
                            <p class="card-text text-justify">{{ $loker->lokasi }}</p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-4 col-lg-2">
                            <p class="card-text">Tanggal Mulai</p>
                        </div>
                        <div class="col-1">
                            <p class="card-text">:</p>
                        </div>
                        <div class="col-7 col-lg-9">
                            <p class="card-text text-justify">
                                {{ \Carbon\Carbon::parse($loker->tanggal_mulai)->format('d M Y') }}</p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-4 col-lg-2">
                            <p class="card-text">Tanggal Akhir</p>
                        </div>
                        <div class="col-1">
                            <p class="card-text">:</p>
                        </div>
                        <div class="col-7 col-lg-9">
                            <p class="card-text text-justify">
                                {{ \Carbon\Carbon::parse($loker->tanggal_akhir)->format('d M Y') }}</p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-4 col-lg-2">
                            <p class="card-text">Spesifikasi</p>
                        </div>
                        <div class="col-1">
                            <p class="card-text">:</p>
                        </div>
                        <div class="col-7 col-lg-9">
                            <p class="card-text text-justify">{!! $loker->isi !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
