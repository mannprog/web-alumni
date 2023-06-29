<div class="row">
    <div class="col-lg-3 text-center">
        <img src="{{ asset('img/foto/' . $user->foto) }}" class="img-fluid rounded">
    </div>
    <div class="col-lg-9 mt-3 mt-lg-0">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <h4 class="font-weight-bold border-bottom pb-2">{{ $user->name }}
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
                    @if ($user->petugasDetail->status === 'pns')
                        PNS
                    @elseif ($user->petugasDetail->status === 'nonpns')
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
                    @if ($user->petugasDetail->nip)
                        {{ $user->petugasDetail->nip }}
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
                    @if ($user->petugasDetail->nuptk)
                        {{ $user->petugasDetail->nuptk }}
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
                    @if ($user->petugasDetail->nik)
                        {{ $user->petugasDetail->nik }}
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
                    @if ($user->petugasDetail->jenis_kelamin === 'l')
                        Laki-laki
                    @elseif ($user->petugasDetail->jenis_kelamin === 'p')
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
                    {{ $user->petugasDetail->tempat_lahir }}, {{ $user->petugasDetail->tanggal_lahir }}
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
                    @if ($user->petugasDetail->alamat)
                        {{ $user->petugasDetail->alamat }}
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
                    @if ($user->petugasDetail->pendidikan_terakhir === 'sma')
                        SMA/Sederajat
                    @elseif ($user->petugasDetail->pendidikan_terakhir === 'd1')
                        D1/Sederajat
                    @elseif ($user->petugasDetail->pendidikan_terakhir === 'd2')
                        D2/Sederajat
                    @elseif ($user->petugasDetail->pendidikan_terakhir === 'd3')
                        D3/Sederajat
                    @elseif ($user->petugasDetail->pendidikan_terakhir === 's1')
                        S1/Sederajat
                    @elseif ($user->petugasDetail->pendidikan_terakhir === 's2')
                        S2/Sederajat
                    @elseif ($user->petugasDetail->pendidikan_terakhir === 's3')
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
                    {{ $user->username }}
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
                    {{ $user->email }}
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
                    @if ($user->userKontak->no_handphone)
                        {{ $user->userKontak->no_handphone }}
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
                    @if ($user->userKontak->facebook)
                        {{ $user->userKontak->facebook }}
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
                    @if ($user->userKontak->instagram)
                        {{ $user->userKontak->instagram }}
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
                    @if ($user->userKontak->twitter)
                        {{ $user->userKontak->twitter }}
                    @else
                        -
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
