<div class="row">
    <div class="col-lg-3">
        <img src="{{ asset('img/foto/' . $user->foto) }}" class="img-fluid rounded">
    </div>
    <div class="col-lg-9">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <h4 class="font-weight-bold border-bottom pb-2">{{ $user->name }}
                </h4>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-4">
                Jenis
            </div>
            <div class="col-1">
                :
            </div>
            <div class="col-7">
                @if ($user->perusahaanDetail->jenis === 'pt')
                    Perseroan Terbatas (PT)
                @elseif ($user->perusahaanDetail->jenis === 'cv')
                    Commanditaire Vennootschap (CV)
                @elseif ($user->perusahaanDetail->jenis === 'firma')
                    Firma
                @elseif ($user->perusahaanDetail->jenis === 'koperasi')
                    Koperasi
                @elseif ($user->perusahaanDetail->jenis === 'persero')
                    Persero
                @elseif ($user->perusahaanDetail->jenis === 'umkm')
                    UMKM
                @else
                    -
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
                {{ $user->perusahaanDetail->alamat }}
            </div>
        </div>
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
                Nomor
            </div>
            <div class="col-1">
                :
            </div>
            <div class="col-7">
                {{ $user->userKontak->no_handphone }}
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
                {{ $user->userKontak->facebook }}
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
                {{ $user->userKontak->instagram }}
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
                {{ $user->userKontak->twitter }}
            </div>
        </div>
    </div>
</div>
