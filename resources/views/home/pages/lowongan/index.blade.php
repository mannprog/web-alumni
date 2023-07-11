@extends('home.pages.layout')

@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Semua Lowongan</h2>
                <ol>
                    <li><a href="{{ route('homepage') }}"><i class="bi bi-house-fill"></i> Beranda</a></li>
                    <li>Lowongan</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page pt-5">
        <div class="container">
            <div class="row">
                @if ($loker->isEmpty())
                    <h3 class="text-center">Belum Ada Lowongan</h3>
                @else
                    @foreach ($loker as $lkr)
                        <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                            <div class="lkr-box">
                                <div class="icon"><a href="{{ route('detail-lowongan', $lkr->slug) }}"><i
                                            class="bi bi-briefcase"></i></a></div>
                                <h4 class="title mb-1"><a
                                        href="{{ route('detail-lowongan', $lkr->slug) }}">{{ $lkr->nama }}</a>
                                </h4>
                                <span class="text-muted">{{ $lkr->kategori->nama }}</span>
                                <p class="description mt-3 mb-0"><i class="bi bi-building"></i> {{ $lkr->user->name }}</p>
                                <p class="description mb-0"><i class="bi bi-alarm"></i>
                                    {{ \Carbon\Carbon::parse($lkr->tanggal_mulai)->format('d M Y') }} -
                                    {{ \Carbon\Carbon::parse($lkr->tanggal_akhir)->format('d M Y') }}</p>
                                <p class="description"><i class="bi bi-geo-alt"></i>
                                    {{ $lkr->lokasi }}</p>
                                <p class="description mt-4 pt-2 border-top"><i class="bi bi-clock-history"></i> Diperbarui
                                    pada
                                    {{ \Carbon\Carbon::parse($lkr->updated_at)->format('d M Y') }}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="mb-4 pagination justify-content-center">
                {{ $loker->links() }}
            </div>
        </div>
    </section>
@endsection
