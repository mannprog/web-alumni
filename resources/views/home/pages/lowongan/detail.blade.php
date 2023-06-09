@extends('home.pages.layout')

@section('content')
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Detail Lowongan</h2>
                <ol>
                    <li><a href="{{ route('homepage') }}"><i class="bi bi-house-fill"></i> Beranda</a></li>
                    <li><a href="{{ route('all-lowongan') }}">Lowongan</a></li>
                    <li>Detail Lowongan</li>
                </ol>
            </div>

        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="lowongan-details" class="lowongan-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6">
                    <div class="lowongan-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            @if ($loker->foto)
                                <div class="swiper-slide">
                                    <img src="{{ asset('img/loker/' . $loker->foto) }}" alt="">
                                </div>
                            @else
                                <div class="swiper-slide">
                                    <img src="{{ asset('img/foto/' . $loker->user->foto) }}" alt="">
                                </div>
                            @endif
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="lowongan-info">
                        <h3>Informasi Lowongan</h3>
                        <ul>
                            <li><strong>Nama</strong>: {{ $loker->nama }}</li>
                            <li><strong>Kategori</strong>: {{ $loker->kategori->nama }}</li>
                            <li><strong>Perusahaan</strong>: {{ $loker->user->name }}</li>
                            <li><strong>Lokasi</strong>: {{ $loker->lokasi }}</li>
                            <li><strong>Tanggal</strong>:
                                {{ \Carbon\Carbon::parse($loker->tanggal_mulai)->format('d M Y') }} -
                                {{ \Carbon\Carbon::parse($loker->tanggal_akhir)->format('d M Y') }}</li>
                            <li><strong>Email</strong>: {{ $loker->user->email }}</li>
                        </ul>
                    </div>
                    <div class="lowongan-description">
                        <h2>Spesifikasi Lowongan</h2>
                        <p>
                            {!! $loker->isi !!}
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End lowongan Details Section -->
@endsection
