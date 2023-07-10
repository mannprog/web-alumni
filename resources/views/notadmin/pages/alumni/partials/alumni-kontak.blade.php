<div class="row align-items-center">
    <div class="col-4">
        Username
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        {{ $alumni->username }}
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
        {{ $alumni->email }}
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
        @if ($alumni->userKontak->no_handphone)
            {{ $alumni->userKontak->no_handphone }}
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
        @if ($alumni->userKontak->facebook)
            {{ $alumni->userKontak->facebook }}
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
        @if ($alumni->userKontak->instagram)
            {{ $alumni->userKontak->instagram }}
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
        @if ($alumni->userKontak->twitter)
            {{ $alumni->userKontak->twitter }}
        @else
            -
        @endif
    </div>
</div>
