@extends('notadmin.layouts.app', ['title' => 'Lowongan Kerja'])

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Lowongan Kerja</h1>
    </div>

    <div class="row">
        @foreach ($lowongan as $loker)
            <div class="col-lg-3 col-md-4 mb-4">
                <a href="{{ route('lowongan-alumni.detail', $loker->slug) }}" class="card-link text-dark">
                    <div class="card shadow">
                        @if ($loker->foto)
                            <img class="card-img-top img-fluid" src="{{ asset('img/loker/' . $loker->foto) }}"
                                style="height: 150px">
                        @else
                            <img class="card-img-top img-fluid" src="{{ asset('img/foto/' . $loker->user->foto) }}"
                                style="height: 150px">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $loker->nama }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $loker->user->name }}</h6>
                            @if ($loker->is_active === 0)
                                <span class="badge badge-pill badge-primary mb-2">Dibuka</span>
                            @else
                                <span class="badge badge-pill badge-danger mb-2">Ditutup</span>
                            @endif
                            <p class="card-text"><i class="fas fa-fw fa-clock"></i>
                                {{ \Carbon\Carbon::parse($loker->tanggal_mulai)->format('d M Y') }} -
                                {{ \Carbon\Carbon::parse($loker->tanggal_akhir)->format('d M Y') }}</p>
                            <p class="card-text"><i class="fas fa-fw fa-map-marker-alt"></i> {{ $loker->lokasi }}</p>
                        </div>
                        <div class="card-footer text-muted">
                            <i class="fas fa-fw fa-history"></i> Diperbarui pada
                            {{ \Carbon\Carbon::parse($loker->updated_at)->format('d M Y H:i:s') }}
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
