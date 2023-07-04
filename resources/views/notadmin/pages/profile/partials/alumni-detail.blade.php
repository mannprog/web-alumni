<div class="row align-items-center">
    <div class="col-4">
        NIK
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        @if ($user->alumniDetail->nik)
            {{ $user->alumniDetail->nik }}
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
        @if ($user->alumniDetail->jenis_kelamin === 'l')
            Laki-laki
        @elseif ($user->alumniDetail->jenis_kelamin === 'p')
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
        {{ $user->alumniDetail->tempat_lahir }},
        @if ($user->alumniDetail->tanggal_lahir)
            {{ \Carbon\Carbon::parse($user->alumniDetail->tanggal_lahir)->format('d M Y') }}
        @else
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
        @if ($user->alumniDetail->alamat)
            {!! $user->alumniDetail->alamat !!}
        @else
            -
        @endif
    </div>
</div>
<div class="row align-items-center">
    <div class="col-4">
        Status
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        @if ($user->alumniDetail->status === 'bekerja')
            Bekerja
        @else
            Tidak Bekerja
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
        @if ($user->alumniDetail->pendidikan_terakhir === 'sma')
            SMA/Sederajat
        @elseif ($user->alumniDetail->pendidikan_terakhir === 'd1')
            D1/Sederajat
        @elseif ($user->alumniDetail->pendidikan_terakhir === 'd2')
            D2/Sederajat
        @elseif ($user->alumniDetail->pendidikan_terakhir === 'd3')
            D3/Sederajat
        @elseif ($user->alumniDetail->pendidikan_terakhir === 's1')
            S1/Sederajat
        @elseif ($user->alumniDetail->pendidikan_terakhir === 's2')
            S2/Sederajat
        @elseif ($user->alumniDetail->pendidikan_terakhir === 's3')
            S3/Sederajat
        @else
            -
        @endif
    </div>
</div>
<div class="row align-items-center">
    <div class="col-4">
        Pendidikan Lain
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        @if ($user->alumniDetail->pendidikan_lain)
            {!! $user->alumniDetail->pendidikan_lain !!}
        @else
            -
        @endif
    </div>
</div>
<div class="row align-items-center">
    <div class="col-4">
        Organisasi
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        @if ($user->alumniDetail->organisasi)
            {!! $user->alumniDetail->organisasi !!}
        @else
            -
        @endif
    </div>
</div>
<div class="row align-items-center">
    <div class="col-4">
        Keahlian
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        @if ($user->alumniDetail->keahlian)
            {!! $user->alumniDetail->keahlian !!}
        @else
            -
        @endif
    </div>
</div>
<div class="row align-items-center">
    <div class="col-4">
        Pengalaman Kerja
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        @if ($user->alumniDetail->pengalaman_kerja)
            {!! $user->alumniDetail->pengalaman_kerja !!}
        @else
            -
        @endif
    </div>
</div>
