<div class="row align-items-center">
    <div class="col-4">
        NIK
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        <?php if($alumni->alumniDetail->nik): ?>
            <?php echo e($alumni->alumniDetail->nik); ?>

        <?php else: ?>
            -
        <?php endif; ?>
    </div>
</div>
<div class="row align-items-center">
    <div class="col-4">
        Jenis Kelamin
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        <?php if($alumni->alumniDetail->jenis_kelamin === 'l'): ?>
            Laki-laki
        <?php elseif($alumni->alumniDetail->jenis_kelamin === 'p'): ?>
            Perempuan
        <?php else: ?>
            -
        <?php endif; ?>
    </div>
</div>
<div class="row align-items-center">
    <div class="col-4">
        Tempat, Tanggal Lahir
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        <?php echo e($alumni->alumniDetail->tempat_lahir); ?>,
        <?php if($alumni->alumniDetail->tanggal_lahir): ?>
            <?php echo e(\Carbon\Carbon::parse($alumni->alumniDetail->tanggal_lahir)->format('d M Y')); ?>

        <?php else: ?>
        <?php endif; ?>
    </div>
</div>
<div class="row align-items-center">
    <div class="col-4">
        Alamat
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        <?php if($alumni->alumniDetail->alamat): ?>
            <?php echo $alumni->alumniDetail->alamat; ?>

        <?php else: ?>
            -
        <?php endif; ?>
    </div>
</div>
<div class="row align-items-center">
    <div class="col-4">
        Status
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        <?php if($alumni->alumniDetail->status === 'bekerja'): ?>
            Bekerja
        <?php else: ?>
            Tidak Bekerja
        <?php endif; ?>
    </div>
</div>
<div class="row align-items-center">
    <div class="col-4">
        Pendidikan Terakhir
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        <?php if($alumni->alumniDetail->pendidikan_terakhir === 'sma'): ?>
            SMA/Sederajat
        <?php elseif($alumni->alumniDetail->pendidikan_terakhir === 'd1'): ?>
            D1/Sederajat
        <?php elseif($alumni->alumniDetail->pendidikan_terakhir === 'd2'): ?>
            D2/Sederajat
        <?php elseif($alumni->alumniDetail->pendidikan_terakhir === 'd3'): ?>
            D3/Sederajat
        <?php elseif($alumni->alumniDetail->pendidikan_terakhir === 's1'): ?>
            S1/Sederajat
        <?php elseif($alumni->alumniDetail->pendidikan_terakhir === 's2'): ?>
            S2/Sederajat
        <?php elseif($alumni->alumniDetail->pendidikan_terakhir === 's3'): ?>
            S3/Sederajat
        <?php else: ?>
            -
        <?php endif; ?>
    </div>
</div>
<div class="row align-items-center">
    <div class="col-4">
        Pendidikan Lain
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        <?php if($alumni->alumniDetail->pendidikan_lain): ?>
            <?php echo $alumni->alumniDetail->pendidikan_lain; ?>

        <?php else: ?>
            -
        <?php endif; ?>
    </div>
</div>
<div class="row align-items-center">
    <div class="col-4">
        Organisasi
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        <?php if($alumni->alumniDetail->organisasi): ?>
            <?php echo $alumni->alumniDetail->organisasi; ?>

        <?php else: ?>
            -
        <?php endif; ?>
    </div>
</div>
<div class="row align-items-center">
    <div class="col-4">
        Keahlian
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        <?php if($alumni->alumniDetail->keahlian): ?>
            <?php echo $alumni->alumniDetail->keahlian; ?>

        <?php else: ?>
            -
        <?php endif; ?>
    </div>
</div>
<div class="row align-items-center">
    <div class="col-4">
        Pengalaman Kerja
    </div>
    <div class="col-1">
        :
    </div>
    <div class="col-7">
        <?php if($alumni->alumniDetail->pengalaman_kerja): ?>
            <?php echo $alumni->alumniDetail->pengalaman_kerja; ?>

        <?php else: ?>
            -
        <?php endif; ?>
    </div>
</div>
<?php /**PATH C:\laragon\www\web-alumni\resources\views/admin/pages/general/alumni/partials/alumni-detail.blade.php ENDPATH**/ ?>