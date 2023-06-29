<div class="row align-items-center">
    <div class="col-4">
        Nama Ayah
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        <?php if($user->alumniKeluarga->ayah): ?>
            <?php echo e($user->alumniKeluarga->ayah); ?>

        <?php else: ?>
            -
        <?php endif; ?>
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
        <?php if($user->alumniKeluarga->pekerjaan_ayah): ?>
            <?php echo e($user->alumniKeluarga->pekerjaan_ayah); ?>

        <?php else: ?>
            -
        <?php endif; ?>
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
        <?php if($user->alumniKeluarga->ibu): ?>
            <?php echo e($user->alumniKeluarga->ibu); ?>

        <?php else: ?>
            -
        <?php endif; ?>
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
        <?php if($user->alumniKeluarga->pekerjaan_ibu): ?>
            <?php echo e($user->alumniKeluarga->pekerjaan_ibu); ?>

        <?php else: ?>
            -
        <?php endif; ?>
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
        <?php if($user->alumniKeluarga->alamat_ortu): ?>
            <?php echo $user->alumniKeluarga->alamat_ortu; ?>

        <?php else: ?>
            -
        <?php endif; ?>
    </div>
</div>
<?php /**PATH C:\laragon\www\web-alumni\resources\views/admin/pages/profile/partials/part/alumni-keluarga.blade.php ENDPATH**/ ?>