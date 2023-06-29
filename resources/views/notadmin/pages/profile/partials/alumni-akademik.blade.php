<div class="row align-items-center">
    <div class="col-4">
        NIS
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        @if ($user->alumniAkademik->nis)
            {{ $user->alumniAkademik->nis }}
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
        @if ($user->alumniAkademik->nisn)
            {{ $user->alumniAkademik->nisn }}
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
        @if ($user->alumniAkademik->angkatan)
            {{ $user->alumniAkademik->angkatan }}
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
        @if ($user->alumniAkademik->jurusan === 'tkj')
            Teknik Komputer Jaringan
        @elseif ($user->alumniAkademik->jurusan === 'rpl')
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
        @if ($user->alumniAkademik->rombel)
            {{ $user->alumniAkademik->rombel }}
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
        @if ($user->alumniAkademik->tahun_masuk)
            {{ $user->alumniAkademik->tahun_masuk }}
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
        @if ($user->alumniAkademik->tahun_lulus)
            {{ $user->alumniAkademik->tahun_lulus }}
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
        @if ($user->alumniAkademik->rata_ijazah)
            {{ $user->alumniAkademik->rata_ijazah }}
        @else
            -
        @endif
    </div>
</div>
