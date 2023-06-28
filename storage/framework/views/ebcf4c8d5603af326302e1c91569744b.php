<div class="row align-items-center">
    <div class="col-4">
        NIS
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        <?php if($alumni->alumniAkademik->nis): ?>
            <?php echo e($alumni->alumniAkademik->nis); ?>

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
        <?php if($alumni->alumniAkademik->nisn): ?>
            <?php echo e($alumni->alumniAkademik->nisn); ?>

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
        <?php if($alumni->alumniAkademik->angkatan): ?>
            <?php echo e($alumni->alumniAkademik->angkatan); ?>

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
        <?php if($alumni->alumniAkademik->jurusan === 'tkj'): ?>
            Teknik Komputer Jaringan
        <?php elseif($alumni->alumniAkademik->jurusan === 'rpl'): ?>
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
        <?php if($alumni->alumniAkademik->rombel): ?>
            <?php echo e($alumni->alumniAkademik->rombel); ?>

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
        <?php if($alumni->alumniAkademik->tahun_masuk): ?>
            <?php echo e($alumni->alumniAkademik->tahun_masuk); ?>

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
        <?php if($alumni->alumniAkademik->tahun_lulus): ?>
            <?php echo e($alumni->alumniAkademik->tahun_lulus); ?>

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
        <?php if($alumni->alumniAkademik->rata_ijazah): ?>
            <?php echo e($alumni->alumniAkademik->rata_ijazah); ?>

        <?php else: ?>
            -
        <?php endif; ?>
    </div>
</div>
<?php /**PATH C:\laragon\www\web-alumni\resources\views/admin/pages/alumni/partials/alumni-akademik.blade.php ENDPATH**/ ?>