@extends('home.pages.layout')

@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Semua Berita</h2>
                <ol>
                    <li><a href="{{ route('homepage') }}"><i class="bi bi-house-fill"></i> Beranda</a></li>
                    <li>Berita</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page pt-5">
        <div class="container">
            <div class="row">
                @if ($berita->isEmpty())
                    <h3 class="text-center">Belum Ada Berita</h3>
                @else
                    @foreach ($berita as $brt)
                        <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                            <div class="box">
                                <div class="icon"><a href="{{ route('detail-berita', $brt->slug) }}"><i
                                            class="bi bi-newspaper"></i></a></div>
                                <h4 class="title"><a
                                        href="{{ route('detail-berita', $brt->slug) }}">{{ $brt->judul }}</a>
                                </h4>
                                <p class="description">{!! $brt->kutipan !!}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="mb-4 pagination justify-content-center">
                {{ $berita->links() }}
            </div>
        </div>
    </section>
@endsection
