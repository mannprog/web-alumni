@extends('notadmin.layouts.app', ['title' => 'Alumni'])

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Alumni</h1>
    </div>

    <div class="row">
        @foreach ($alumni as $al)
            <div class="col-lg-3 col-md-4 mb-4">
                <a href="{{ route('alumnus.detail', $al->username) }}" class="card-link text-dark">
                    <div class="card shadow">
                        <img class="card-img-top img-fluid" src="{{ asset('img/foto/' . $al->foto) }}" style="height: 150px">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">{{ $al->name }}</h5>
                            <span class="badge badge-pill badge-primary mb-3">
                                @if ($al->alumniDetail->status === 'tidakbekerja')
                                    Belum Bekerja
                                @else
                                    Bekerja
                                @endif
                            </span>
                            <p class="card-text"><i class="fas fa-fw fa-venus-mars"></i>
                                @if ($al->alumniDetail->jenis_kelamin === 'l')
                                    Laki-laki
                                @else
                                    Perempuan
                                @endif
                            </p>
                            <p class="card-text"><i class="fas fa-fw fa-map-marker-alt"></i>
                                {{ $al->alumniDetail->alamat }}</p>
                            <p class="card-text"><i class="fas fa-fw fa-envelope"></i> {{ $al->email }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

    <div class="mt-4 pagination justify-content-center">
        {{ $alumni->links() }}
    </div>
@endsection
