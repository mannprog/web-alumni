<div class="row align-items-center">
    <div class="col-4">
        Username
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        <?php echo e($alumni->username); ?>

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
        <?php echo e($alumni->email); ?>

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
        <?php if($alumni->userKontak->no_handphone): ?>
            <?php echo e($alumni->userKontak->no_handphone); ?>

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
        <?php if($alumni->userKontak->facebook): ?>
            <?php echo e($alumni->userKontak->facebook); ?>

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
        <?php if($alumni->userKontak->instagram): ?>
            <?php echo e($alumni->userKontak->instagram); ?>

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
        <?php if($alumni->userKontak->twitter): ?>
            <?php echo e($alumni->userKontak->twitter); ?>

        <?php else: ?>
            -
        <?php endif; ?>
    </div>
</div>
<?php /**PATH C:\laragon\www\web-alumni\resources\views/admin/pages/alumni/partials/alumni-kontak.blade.php ENDPATH**/ ?>