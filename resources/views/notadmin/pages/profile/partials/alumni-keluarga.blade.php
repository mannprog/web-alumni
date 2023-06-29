<div class="row align-items-center">
    <div class="col-4">
        Nama Ayah
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        @if ($user->alumniKeluarga->ayah)
            {{ $user->alumniKeluarga->ayah }}
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
        @if ($user->alumniKeluarga->pekerjaan_ayah)
            {{ $user->alumniKeluarga->pekerjaan_ayah }}
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
        @if ($user->alumniKeluarga->ibu)
            {{ $user->alumniKeluarga->ibu }}
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
        @if ($user->alumniKeluarga->pekerjaan_ibu)
            {{ $user->alumniKeluarga->pekerjaan_ibu }}
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
        @if ($user->alumniKeluarga->alamat_ortu)
            {!! $user->alumniKeluarga->alamat_ortu !!}
        @else
            -
        @endif
    </div>
</div>
