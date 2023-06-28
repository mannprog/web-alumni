<div class="row align-items-center">
    <div class="col-4">
        Nama Ayah
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        @if ($alumni->alumniKeluarga->ayah)
            {{ $alumni->alumniKeluarga->ayah }}
        @else
            -
        @endif
    </div>
</div>
<div class="row align-items-center">
    <div class="col-4">
        Pekerjaan Ayah
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        @if ($alumni->alumniKeluarga->pekerjaan_ayah)
            {{ $alumni->alumniKeluarga->pekerjaan_ayah }}
        @else
            -
        @endif
    </div>
</div>
<div class="row align-items-center">
    <div class="col-4">
        Nama Ibu
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        @if ($alumni->alumniKeluarga->ibu)
            {{ $alumni->alumniKeluarga->ibu }}
        @else
            -
        @endif
    </div>
</div>
<div class="row align-items-center">
    <div class="col-4">
        Pekerjaan Ibu
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        @if ($alumni->alumniKeluarga->pekerjaan_ibu)
            {{ $alumni->alumniKeluarga->pekerjaan_ibu }}
        @else
            -
        @endif
    </div>
</div>
<div class="row align-items-center">
    <div class="col-4">
        Alamat Orang Tua
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        @if ($alumni->alumniKeluarga->alamat_ortu)
            {{ $alumni->alumniKeluarga->alamat_ortu }}
        @else
            -
        @endif
    </div>
</div>
