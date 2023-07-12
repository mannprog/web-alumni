@extends('admin.layouts.app', ['title' => 'Detail Alumni'])

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Alumni - {{ $alumni->name }}</h1>
        <a href="{{ route('allAlumni.index') }}" class="btn btn-sm btn-secondary shadow-sm">Kembali</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 text-center">
                    <img src="{{ asset('img/foto/' . $alumni->foto) }}" class="img-fluid rounded">
                </div>
                <div class="col-lg-9 mt-3 mt-lg-0">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <h4 class="font-weight-bold border-bottom pb-2">{{ $alumni->name }}
                            </h4>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <p class="font-weight-bold">Data Pribadi
                            </p>
                        </div>
                    </div>
                    <div class="container">
                        @include('admin.pages.general.alumni.partials.alumni-detail')
                    </div>
                    <div class="row align-items-center mt-3 mb-0">
                        <div class="col-lg-12">
                            <p class="font-weight-bold">Data Kontak
                            </p>
                        </div>
                    </div>
                    <div class="container">
                        @include('admin.pages.general.alumni.partials.alumni-kontak')
                    </div>
                    <div class="row align-items-center mt-3 mb-0">
                        <div class="col-lg-12">
                            <p class="font-weight-bold">Data Akademik
                            </p>
                        </div>
                    </div>
                    <div class="container">
                        @include('admin.pages.general.alumni.partials.alumni-akademik')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
