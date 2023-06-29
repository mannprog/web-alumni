<div class="row align-items-center">
    <div class="col-4">
        NIS
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        <?php if($user->alumniAkademik->nis): ?>
            <?php echo e($user->alumniAkademik->nis); ?>

        <?php else: ?>
            -
        <?php endif; ?>
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
        <?php if($user->alumniAkademik->nisn): ?>
            <?php echo e($user->alumniAkademik->nisn); ?>

        <?php else: ?>
            -
        <?php endif; ?>
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
        <?php if($user->alumniAkademik->angkatan): ?>
            <?php echo e($user->alumniAkademik->angkatan); ?>

        <?php else: ?>
            -
        <?php endif; ?>
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
        <?php if($user->alumniAkademik->jurusan === 'tkj'): ?>
            Teknik Komputer Jaringan
        <?php elseif($user->alumniAkademik->jurusan === 'rpl'): ?>
            Rekayasa Perangkat Lunak
        <?php else: ?>
            -
        <?php endif; ?>
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
        <?php if($user->alumniAkademik->rombel): ?>
            <?php echo e($user->alumniAkademik->rombel); ?>

        <?php else: ?>
            -
        <?php endif; ?>
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
        <?php if($user->alumniAkademik->tahun_masuk): ?>
            <?php echo e($user->alumniAkademik->tahun_masuk); ?>

        <?php else: ?>
            -
        <?php endif; ?>
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
        <?php if($user->alumniAkademik->tahun_lulus): ?>
            <?php echo e($user->alumniAkademik->tahun_lulus); ?>

        <?php else: ?>
            -
        <?php endif; ?>
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
        <?php if($user->alumniAkademik->rata_ijazah): ?>
            <?php echo e($user->alumniAkademik->rata_ijazah); ?>

        <?php else: ?>
            -
        <?php endif; ?>
    </div>
</div>
<?php /**PATH C:\laragon\www\web-alumni\resources\views/notadmin/pages/profile/partials/alumni-akademik.blade.php ENDPATH**/ ?>