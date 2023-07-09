@extends('admin.layouts.app', ['title' => 'Detail Kategori'])

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Kategori - {{ $kategori->nama }}</h1>
        <a href="{{ route('kategori.index') }}" class="btn btn-sm btn-secondary shadow-sm">Kembali</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Perusahaan</th>
                            <th scope="col">Nama Lowongan</th>
                            <th scope="col">Lokasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($lowongan->isEmpty())
                            <tr>
                                <td colspan="4" class="text-center">Tidak ada lowongan yang tersedia dalam kategori ini.
                                </td>
                            </tr>
                        @else
                            @foreach ($lowongan as $loker)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $loker->user->name }}</td>
                                    <td>{{ $loker->nama }}</td>
                                    <td>{{ $loker->lokasi }}</td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
