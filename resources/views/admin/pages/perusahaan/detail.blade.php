@extends('admin.layouts.app', ['title' => 'Detail Perusahaan'])

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Perusahaan - {{ $data->name }}</h1>
        <a href="{{ route('perusahaan.index') }}" class="btn btn-sm btn-secondary shadow-sm">Kembali</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            {{-- <div class="d-flex align-items-center justify-content-end mb-4">
                <a href="#" class="btn btn-sm btn-warning">Ubah Password</a>
            </div> --}}
            <div class="row">
                <div class="col-lg-3">
                    <img src="{{ asset('img/foto/' . $data->foto) }}" class="img-fluid rounded">
                </div>
                <div class="col-lg-9">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <h4 class="font-weight-bold border-bottom pb-2">{{ $data->name }}
                            </h4>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-4">
                            Jenis
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            @if ($data->perusahaanDetail->jenis === 'pt')
                                Perseroan Terbatas (PT)
                            @elseif ($data->perusahaanDetail->jenis === 'cv')
                                Commanditaire Vennootschap (CV)
                            @elseif ($data->perusahaanDetail->jenis === 'firma')
                                Firma
                            @elseif ($data->perusahaanDetail->jenis === 'koperasi')
                                Koperasi
                            @elseif ($data->perusahaanDetail->jenis === 'persero')
                                Persero
                            @elseif ($data->perusahaanDetail->jenis === 'umkm')
                                UMKM
                            @else
                                -
                            @endif
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-4">
                            Alamat
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            {{ $data->perusahaanDetail->alamat }}
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-4">
                            Username
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            {{ $data->username }}
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-4">
                            Email
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            {{ $data->email }}
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-4">
                            Nomor
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            {{ $data->userKontak->no_handphone }}
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-4">
                            Facebook
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            {{ $data->userKontak->facebook }}
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-4">
                            Instagram
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            {{ $data->userKontak->instagram }}
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-4">
                            Twitter
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            {{ $data->userKontak->twitter }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
