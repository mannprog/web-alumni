@extends('home.pages.layout')

@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Semua Alumni</h2>
                <ol>
                    <li><a href="{{ route('homepage') }}"><i class="bi bi-house-fill"></i> Beranda</a></li>
                    <li>Alumni</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page pt-5">
        <div class="container">
            <div class="row">
                @if ($alumni->isEmpty())
                    <h3 class="text-center">Belum Ada Alumni</h3>
                @else
                    @foreach ($alumni as $al)
                        <div class="col-lg-3 col-md-6">
                            <div class="member" data-aos="fade-up" data-aos-delay="100">
                                <div class="pic">
                                    <a href="{{ route('detail-alumni', $al->username) }}"><img
                                            src="{{ asset('img/foto/' . $al->foto) }}" alt=""></a>
                                </div>
                                <h4>{{ $al->name }}</h4>
                                <span>{{ $al->alumniAkademik->tahun_masuk }} - {{ $al->alumniAkademik->tahun_lulus }}</span>
                                <div class="social">
                                    <a href="https://twitter.com/{{ $al->userKontak->twitter }}" target="_blank"><i
                                            class="bi bi-twitter"></i></a>
                                    <a href="https://facebook.com/{{ $al->userKontak->facebook }}" target="_blank"><i
                                            class="bi bi-facebook"></i></a>
                                    <a href="https://instagram.com/{{ $al->userKontak->instagram }}" target="_blank"><i
                                            class="bi bi-instagram"></i></a>
                                    <a href="mailto:{{ $al->email }}"><i class="bi bi-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="mb-4 pagination justify-content-center">
                {{ $alumni->links() }}
            </div>
        </div>
    </section>
@endsection
