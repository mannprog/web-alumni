<div class="row">
    <div class="col-lg-3 text-center">
        <img src="<?php echo e(asset('img/foto/' . $user->foto)); ?>" class="img-fluid rounded">
    </div>
    <div class="col-lg-9 mt-3 mt-lg-0">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <h4 class="font-weight-bold border-bottom pb-2"><?php echo e($user->name); ?>

                </h4>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-12">
                <p class="font-weight-bold">Data Pribadi
                </p>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-4">
                    Status
                </div>
                <div class="col-1">
                    :
                </div>
                <div class="col-7">
                    <?php if($user->petugasDetail->status === 'pns'): ?>
                        PNS
                    <?php elseif($user->petugasDetail->status === 'nonpns'): ?>
                        Non PNS
                    <?php else: ?>
                        -
                    <?php endif; ?>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-4">
                    NIP
                </div>
                <div class="col-1">
                    :
                </div>
                <div class="col-7">
                    <?php if($user->petugasDetail->nip): ?>
                        <?php echo e($user->petugasDetail->nip); ?>

                    <?php else: ?>
                        -
                    <?php endif; ?>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-4">
                    NUPTK
                </div>
                <div class="col-1">
                    :
                </div>
                <div class="col-7">
                    <?php if($user->petugasDetail->nuptk): ?>
                        <?php echo e($user->petugasDetail->nuptk); ?>

                    <?php else: ?>
                        -
                    <?php endif; ?>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-4">
                    NIK
                </div>
                <div class="col-1">
                    :
                </div>
                <div class="col-7">
                    <?php if($user->petugasDetail->nik): ?>
                        <?php echo e($user->petugasDetail->nik); ?>

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
                    <?php if($user->petugasDetail->jenis_kelamin === 'l'): ?>
                        Laki-laki
                    <?php elseif($user->petugasDetail->jenis_kelamin === 'p'): ?>
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
                    <?php echo e($user->petugasDetail->tempat_lahir); ?>, <?php echo e($user->petugasDetail->tanggal_lahir); ?>

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
                    <?php if($user->petugasDetail->alamat): ?>
                        <?php echo e($user->petugasDetail->alamat); ?>

                    <?php else: ?>
                        -
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
                    <?php if($user->petugasDetail->pendidikan_terakhir === 'sma'): ?>
                        SMA/Sederajat
                    <?php elseif($user->petugasDetail->pendidikan_terakhir === 'd1'): ?>
                        D1/Sederajat
                    <?php elseif($user->petugasDetail->pendidikan_terakhir === 'd2'): ?>
                        D2/Sederajat
                    <?php elseif($user->petugasDetail->pendidikan_terakhir === 'd3'): ?>
                        D3/Sederajat
                    <?php elseif($user->petugasDetail->pendidikan_terakhir === 's1'): ?>
                        S1/Sederajat
                    <?php elseif($user->petugasDetail->pendidikan_terakhir === 's2'): ?>
                        S2/Sederajat
                    <?php elseif($user->petugasDetail->pendidikan_terakhir === 's3'): ?>
                        S3/Sederajat
                    <?php else: ?>
                        -
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row align-items-center mt-3 mb-0">
            <div class="col-lg-12">
                <p class="font-weight-bold">Data Kontak
                </p>
            </div>
        </div>
        <div class="container">
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
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\web-alumni\resources\views/admin/pages/profile/partials/profil-petugas.blade.php ENDPATH**/ ?>