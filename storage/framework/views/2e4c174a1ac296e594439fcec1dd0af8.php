<div class="row align-items-center">
    <div class="col-4">
        Username
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        <?php echo e($user->username); ?>

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
        <?php echo e($user->email); ?>

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
        <?php if($user->userKontak->no_handphone): ?>
            <?php echo e($user->userKontak->no_handphone); ?>

        <?php else: ?>
            -
        <?php endif; ?>
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
        <?php if($user->userKontak->facebook): ?>
            <?php echo e($user->userKontak->facebook); ?>

        <?php else: ?>
            -
        <?php endif; ?>
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
        <?php if($user->userKontak->instagram): ?>
            <?php echo e($user->userKontak->instagram); ?>

        <?php else: ?>
            -
        <?php endif; ?>
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
        <?php if($user->userKontak->twitter): ?>
            <?php echo e($user->userKontak->twitter); ?>

        <?php else: ?>
            -
        <?php endif; ?>
    </div>
</div>
<?php /**PATH C:\laragon\www\web-alumni\resources\views/notadmin/pages/profile/partials/alumni-kontak.blade.php ENDPATH**/ ?>