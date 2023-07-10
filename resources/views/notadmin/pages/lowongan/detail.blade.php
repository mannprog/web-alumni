@extends('notadmin.layouts.app', ['title' => 'Detail Lowongan Kerja'])

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Lowongan Kerja - {{ $loker->nama }}</h1>
        <a href="{{ route('lowongan-alumni.index') }}" class="btn btn-sm btn-secondary shadow-sm">Kembali</a>
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
                            <div class="d-flex align-items-center justify-content-between border-bottom pb-2">
                                <h4 class="font-weight-bold">{{ $loker->nama }}
                                </h4>
                                @if ($loker->is_active === 0)
                                    @if ($loker->lamaran->isEmpty())
                                        <a href="#" class="btn btn-sm btn-primary shadow-sm" data-toggle="modal"
                                            data-target="#sendModal">Kirim Lamaran</a>
                                        @include('notadmin.pages.lowongan.component.kirimLamaran')
                                    @else
                                        <a href="#" class="btn btn-sm btn-secondary shadow-sm disabled" role="button"
                                            aria-disabled="true">Sudah Melamar</a>
                                    @endif
                                @endif
                            </div>
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

@push('custom-styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('library/http_cdn.datatables.net_1.13.4_css_dataTables.bootstrap5.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/http_cdn.datatables.net_responsive_2.4.1_css_responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('library/http_cdnjs.cloudflare.com_ajax_libs_toastr.js_latest_toastr.css') }}">
@endpush

@push('custom-scripts')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('library/http_cdn.datatables.net_1.13.4_js_jquery.dataTables.js') }}"></script>
    <script src="{{ asset('library/http_cdn.datatables.net_responsive_2.4.1_js_responsive.bootstrap4.js') }}"></script>

    <script>
        $(document).ready(function() {
            var message = '{{ session('message') }}';

            if (message) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: message,
                });
            }
        });
    </script>
@endpush
