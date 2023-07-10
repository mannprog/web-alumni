<div class="row align-items-center">
    <div class="col-4">
        NIK
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        @if ($alumni->alumniDetail->nik)
            {{ $alumni->alumniDetail->nik }}
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
        @if ($alumni->alumniDetail->jenis_kelamin === 'l')
            Laki-laki
        @elseif ($alumni->alumniDetail->jenis_kelamin === 'p')
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
        {{ $alumni->alumniDetail->tempat_lahir }},
        @if ($alumni->alumniDetail->tanggal_lahir)
            {{ \Carbon\Carbon::parse($alumni->alumniDetail->tanggal_lahir)->format('d M Y') }}
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
        @if ($alumni->alumniDetail->alamat)
            {!! $alumni->alumniDetail->alamat !!}
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
        @if ($alumni->alumniDetail->status === 'bekerja')
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
        @if ($alumni->alumniDetail->pendidikan_terakhir === 'sma')
            SMA/Sederajat
        @elseif ($alumni->alumniDetail->pendidikan_terakhir === 'd1')
            D1/Sederajat
        @elseif ($alumni->alumniDetail->pendidikan_terakhir === 'd2')
            D2/Sederajat
        @elseif ($alumni->alumniDetail->pendidikan_terakhir === 'd3')
            D3/Sederajat
        @elseif ($alumni->alumniDetail->pendidikan_terakhir === 's1')
            S1/Sederajat
        @elseif ($alumni->alumniDetail->pendidikan_terakhir === 's2')
            S2/Sederajat
        @elseif ($alumni->alumniDetail->pendidikan_terakhir === 's3')
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
        @if ($alumni->alumniDetail->pendidikan_lain)
            {!! $alumni->alumniDetail->pendidikan_lain !!}
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
        @if ($alumni->alumniDetail->organisasi)
            {!! $alumni->alumniDetail->organisasi !!}
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
        @if ($alumni->alumniDetail->keahlian)
            {!! $alumni->alumniDetail->keahlian !!}
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
        @if ($alumni->alumniDetail->pengalaman_kerja)
            {!! $alumni->alumniDetail->pengalaman_kerja !!}
        @else
            -
        @endif
    </div>
</div>
