@extends('admin.layouts.app', ['title' => 'Detail Perusahaan'])

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Perusahaan {{ $company->name }}</h1>
        <a href="{{ route('perusahaan.index') }}" class="btn btn-sm btn-secondary shadow-sm">Kembali</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            {{-- <div class="d-flex align-items-center justify-content-end mb-4">
                <a href="#" class="btn btn-sm btn-warning">Ubah Password</a>
            </div> --}}
            <div class="row">
                <div class="col-lg-6">
                    <div class="row align-items-center">
                        <div class="col-4">
                            Nama
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            {{ $company->name }}
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
                            {{ $company->company_detail->jenis_perusahaan }}
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
                            {{ $company->company_detail->alamat_perusahaan }}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row align-items-center">
                        <div class="col-4">
                            Username
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            {{ $company->username }}
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
                            {{ $company->email }}
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
                            {{ $company->company_detail->no_perusahaan }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
