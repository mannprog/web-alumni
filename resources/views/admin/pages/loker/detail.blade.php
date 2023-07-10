@extends('admin.layouts.app', ['title' => 'Detail Lowongan Kerja'])

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Lowongan Kerja - {{ $loker->nama }}</h1>
        <a href="{{ route('loker.index') }}" class="btn btn-sm btn-secondary shadow-sm">Kembali</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 mx-auto text-center mb-3">
                    @if ($loker->foto)
                        <img class="card-img-top" src="{{ asset('img/loker/' . $loker->foto) }}" style="height: 250px">
                    @else
                        <h5 class="font-italic">Tidak Ada Gambar</h5>
                    @endif
                </div>
                <div class="col-lg-9">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <h4 class="font-weight-bold border-bottom pb-2">{{ $loker->nama }}
                            </h4>
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

    <div class="d-flex align-items-center justify-content-between my-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Pelamar - {{ $loker->nama }}</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Pelamar</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($lamaran->isEmpty())
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada pelamar yang melamar dalam lowongan ini.
                                </td>
                            </tr>
                        @else
                            @foreach ($lamaran as $lamar)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $lamar->user->name }}</td>
                                    <td>{{ \Carbon\Carbon::parse($lamar->tanggal_lamaran)->format('d M Y') }}</td>
                                    <td>
                                        @if ($lamar->is_accept === null)
                                            Belum ditentukan
                                        @else
                                            @if ($lamar->is_accept === 0)
                                                Disetujui
                                            @else
                                                Ditolak
                                            @endif
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('allAlumni.detail', $lamar->user->username) }}"
                                            class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                        @if ($lamar->is_accept === null)
                                            <a href="#" class="btn btn-sm btn-info" data-toggle="modal"
                                                data-target="#accModal"><i class="fas fa-check"></i></a>
                                            <a href="#" class="btn btn-sm btn-danger" data-toggle="modal"
                                                data-target="#rejModal"><i class="fas fa-times"></i></a>
                                        @else
                                            @if ($lamar->is_accept === 0)
                                                <a href="#" class="btn btn-sm btn-danger" data-toggle="modal"
                                                    data-target="#rejModal"><i class="fas fa-times"></i></a>
                                            @else
                                                <a href="#" class="btn btn-sm btn-info" data-toggle="modal"
                                                    data-target="#accModal"><i class="fas fa-check"></i></a>
                                            @endif
                                        @endif
                                    </td>
                                </tr>

                                @include('admin.pages.loker.component.accOrRej')
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('custom-scripts')
    <script src="{{ asset('library/http_cdn.datatables.net_1.13.4_js_jquery.dataTables.js') }}"></script>

    <script>
        $(document).ready(function() {
            var successMessage = '{{ session('success') }}';

            if (successMessage) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: successMessage,
                });
            }

        });
    </script>
@endpush
