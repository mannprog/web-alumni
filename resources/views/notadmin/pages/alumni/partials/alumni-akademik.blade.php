<div class="row align-items-center">
    <div class="col-4">
        NIS
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        @if ($alumni->alumniAkademik->nis)
            {{ $alumni->alumniAkademik->nis }}
        @else
            -
        @endif
    </div>
</div>
<div class="row align-items-center">
    <div class="col-4">
        NISN
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        @if ($alumni->alumniAkademik->nisn)
            {{ $alumni->alumniAkademik->nisn }}
        @else
            -
        @endif
    </div>
</div>
<div class="row align-items-center">
    <div class="col-4">
        Angkatan
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        @if ($alumni->alumniAkademik->angkatan)
            {{ $alumni->alumniAkademik->angkatan }}
        @else
            -
        @endif
    </div>
</div>
<div class="row align-items-center">
    <div class="col-4">
        Jurusan
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        @if ($alumni->alumniAkademik->jurusan === 'tkj')
            Teknik Komputer Jaringan
        @elseif ($alumni->alumniAkademik->jurusan === 'rpl')
            Rekayasa Perangkat Lunak
        @else
            -
        @endif
    </div>
</div>
<div class="row align-items-center">
    <div class="col-4">
        Rombel
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        @if ($alumni->alumniAkademik->rombel)
            {{ $alumni->alumniAkademik->rombel }}
        @else
            -
        @endif
    </div>
</div>
<div class="row align-items-center">
    <div class="col-4">
        Tahun Masuk
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        @if ($alumni->alumniAkademik->tahun_masuk)
            {{ $alumni->alumniAkademik->tahun_masuk }}
        @else
            -
        @endif
    </div>
</div>
<div class="row align-items-center">
    <div class="col-4">
        Tahun Lulus
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        @if ($alumni->alumniAkademik->tahun_lulus)
            {{ $alumni->alumniAkademik->tahun_lulus }}
        @else
            -
        @endif
    </div>
</div>
<div class="row align-items-center">
    <div class="col-4">
        Nilai Rata-rata Ijazah
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        @if ($alumni->alumniAkademik->rata_ijazah)
            {{ $alumni->alumniAkademik->rata_ijazah }}
        @else
            -
        @endif
    </div>
</div>
