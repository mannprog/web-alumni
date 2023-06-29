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
