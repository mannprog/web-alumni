@extends('home.pages.layout')

@section('content')
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Detail Alumni - <strong>{{ $alumni->name }}</strong></h2>
                <ol>
                    <li><a href="{{ route('homepage') }}"><i class="bi bi-house-fill"></i> Beranda</a></li>
                    <li><a href="{{ route('all-alumni') }}">Alumni</a></li>
                    <li>Detail Alumni</li>
                </ol>
            </div>

        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="lowongan-details" class="lowongan-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-5">
                    <div class="lowongan-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img src="{{ asset('img/foto/' . $alumni->foto) }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="lowongan-info">
                        <h3>Data Pribadi</h3>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Jenis Kelamin
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                @if ($alumni->alumniDetail->jenis_kelamin === 'l')
                                    Laki-laki
                                @elseif ($alumni->alumniDetail->jenis_kelamin === 'p')
                                    Perempuan
                                @else
                                    -
                                @endif
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Tempat, Tanggal Lahir
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                {{ $alumni->alumniDetail->tempat_lahir }},
                                @if ($alumni->alumniDetail->tanggal_lahir)
                                    {{ \Carbon\Carbon::parse($alumni->alumniDetail->tanggal_lahir)->format('d M Y') }}
                                @else
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
                                @if ($alumni->alumniDetail->alamat)
                                    {!! $alumni->alumniDetail->alamat !!}
                                @else
                                    -
                                @endif
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Status
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                @if ($alumni->alumniDetail->status === 'bekerja')
                                    Bekerja
                                @else
                                    Tidak Bekerja
                                @endif
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Pendidikan Terakhir
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                @if ($alumni->alumniDetail->pendidikan_terakhir === 'sma')
                                    SMA/Sederajat
                                @elseif ($alumni->alumniDetail->pendidikan_terakhir === 'd1')
                                    D1/Sederajat
                                @elseif ($alumni->alumniDetail->pendidikan_terakhir === 'd2')
                                    D2/Sederajat
                                @elseif ($alumni->alumniDetail->pendidikan_terakhir === 'd3')
                                    D3/Sederajat
                                @elseif ($alumni->alumniDetail->pendidikan_terakhir === 's1')
                                    S1/Sederajat
                                @elseif ($alumni->alumniDetail->pendidikan_terakhir === 's2')
                                    S2/Sederajat
                                @elseif ($alumni->alumniDetail->pendidikan_terakhir === 's3')
                                    S3/Sederajat
                                @else
                                    -
                                @endif
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Pendidikan Lain
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                @if ($alumni->alumniDetail->pendidikan_lain)
                                    {!! $alumni->alumniDetail->pendidikan_lain !!}
                                @else
                                    -
                                @endif
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Organisasi
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                @if ($alumni->alumniDetail->organisasi)
                                    {!! $alumni->alumniDetail->organisasi !!}
                                @else
                                    -
                                @endif
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Keahlian
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                @if ($alumni->alumniDetail->keahlian)
                                    {!! $alumni->alumniDetail->keahlian !!}
                                @else
                                    -
                                @endif
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Pengalaman Kerja
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                @if ($alumni->alumniDetail->pengalaman_kerja)
                                    {!! $alumni->alumniDetail->pengalaman_kerja !!}
                                @else
                                    -
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="lowongan-info">
                        <h3>Data Kontak</h3>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Username
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                {{ $alumni->username }}
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
                                {{ $alumni->email }}
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Nomor Handphone
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                @if ($alumni->userKontak->no_handphone)
                                    {{ $alumni->userKontak->no_handphone }}
                                @else
                                    -
                                @endif
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
                                @if ($alumni->userKontak->facebook)
                                    {{ $alumni->userKontak->facebook }}
                                @else
                                    -
                                @endif
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
                                @if ($alumni->userKontak->instagram)
                                    {{ $alumni->userKontak->instagram }}
                                @else
                                    -
                                @endif
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
                                @if ($alumni->userKontak->twitter)
                                    {{ $alumni->userKontak->twitter }}
                                @else
                                    -
                                @endif
                            </div>
                        </div>

                    </div>

                    <div class="lowongan-info">
                        <h3>Data Akademik</h3>
                        <div class="row align-items-center">
                            <div class="col-4">
                                NIS
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                @if ($alumni->alumniAkademik->nis)
                                    {{ $alumni->alumniAkademik->nis }}
                                @else
                                    -
                                @endif
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                NISN
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                @if ($alumni->alumniAkademik->nisn)
                                    {{ $alumni->alumniAkademik->nisn }}
                                @else
                                    -
                                @endif
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Angkatan
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                @if ($alumni->alumniAkademik->angkatan)
                                    {{ $alumni->alumniAkademik->angkatan }}
                                @else
                                    -
                                @endif
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Jurusan
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                @if ($alumni->alumniAkademik->jurusan === 'tkj')
                                    Teknik Komputer Jaringan
                                @elseif ($alumni->alumniAkademik->jurusan === 'rpl')
                                    Rekayasa Perangkat Lunak
                                @else
                                    -
                                @endif
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Rombel
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                @if ($alumni->alumniAkademik->rombel)
                                    {{ $alumni->alumniAkademik->rombel }}
                                @else
                                    -
                                @endif
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Tahun Masuk
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                @if ($alumni->alumniAkademik->tahun_masuk)
                                    {{ $alumni->alumniAkademik->tahun_masuk }}
                                @else
                                    -
                                @endif
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Tahun Lulus
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                @if ($alumni->alumniAkademik->tahun_lulus)
                                    {{ $alumni->alumniAkademik->tahun_lulus }}
                                @else
                                    -
                                @endif
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Nilai Rata-rata Ijazah
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                @if ($alumni->alumniAkademik->rata_ijazah)
                                    {{ $alumni->alumniAkademik->rata_ijazah }}
                                @else
                                    -
                                @endif
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section><!-- End lowongan Details Section -->
@endsection
