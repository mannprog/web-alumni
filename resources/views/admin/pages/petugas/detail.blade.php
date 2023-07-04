@extends('admin.layouts.app', ['title' => 'Detail Petugas'])

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Petugas - {{ $petugas->name }}</h1>
        <a href="{{ route('petugas.index') }}" class="btn btn-sm btn-secondary shadow-sm">Kembali</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 text-center">
                    <img src="{{ asset('img/foto/' . $petugas->foto) }}" class="img-fluid rounded">
                </div>
                <div class="col-lg-9 mt-3 mt-lg-0">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <h4 class="font-weight-bold border-bottom pb-2">{{ $petugas->name }}
                            </h4>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <p class="font-weight-bold">Data Pribadi
                            </p>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-4">
                                Status
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                @if ($petugas->petugasDetail->status === 'pns')
                                    PNS
                                @elseif ($petugas->petugasDetail->status === 'nonpns')
                                    Non PNS
                                @else
                                    -
                                @endif
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                NIP
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                @if ($petugas->petugasDetail->nip)
                                    {{ $petugas->petugasDetail->nip }}
                                @else
                                    -
                                @endif
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                NUPTK
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                @if ($petugas->petugasDetail->nuptk)
                                    {{ $petugas->petugasDetail->nuptk }}
                                @else
                                    -
                                @endif
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                NIK
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                @if ($petugas->petugasDetail->nik)
                                    {{ $petugas->petugasDetail->nik }}
                                @else
                                    -
                                @endif
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Jenis Kelamin
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                @if ($petugas->petugasDetail->jenis_kelamin === 'l')
                                    Laki-laki
                                @elseif ($petugas->petugasDetail->jenis_kelamin === 'p')
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
                                {{ $petugas->petugasDetail->tempat_lahir }},
                                {{ \Carbon\Carbon::parse($petugas->petugasDetail->tanggal_lahir)->format('d M Y') }}
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
                                @if ($petugas->petugasDetail->alamat)
                                    {{ $petugas->petugasDetail->alamat }}
                                @else
                                    -
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
                                @if ($petugas->petugasDetail->pendidikan_terakhir === 'sma')
                                    SMA/Sederajat
                                @elseif ($petugas->petugasDetail->pendidikan_terakhir === 'd1')
                                    D1/Sederajat
                                @elseif ($petugas->petugasDetail->pendidikan_terakhir === 'd2')
                                    D2/Sederajat
                                @elseif ($petugas->petugasDetail->pendidikan_terakhir === 'd3')
                                    D3/Sederajat
                                @elseif ($petugas->petugasDetail->pendidikan_terakhir === 's1')
                                    S1/Sederajat
                                @elseif ($petugas->petugasDetail->pendidikan_terakhir === 's2')
                                    S2/Sederajat
                                @elseif ($petugas->petugasDetail->pendidikan_terakhir === 's3')
                                    S3/Sederajat
                                @else
                                    -
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mt-3 mb-0">
                        <div class="col-lg-12">
                            <p class="font-weight-bold">Data Kontak
                            </p>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-4">
                                Username
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                {{ $petugas->username }}
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
                                {{ $petugas->email }}
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
                                @if ($petugas->userKontak->no_handphone)
                                    {{ $petugas->userKontak->no_handphone }}
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
                                @if ($petugas->userKontak->facebook)
                                    {{ $petugas->userKontak->facebook }}
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
                                @if ($petugas->userKontak->instagram)
                                    {{ $petugas->userKontak->instagram }}
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
                                @if ($petugas->userKontak->twitter)
                                    {{ $petugas->userKontak->twitter }}
                                @else
                                    -
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
