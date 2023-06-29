<div class="row">
    <div class="col-lg-3">
        <img src="<?php echo e(asset('img/foto/' . $user->foto)); ?>" class="img-fluid rounded">
    </div>
    <div class="col-lg-9">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <h4 class="font-weight-bold border-bottom pb-2"><?php echo e($user->name); ?>

                </h4>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-4">
                Jenis
            </div>
            <div class="col-1">
                :
            </div>
            <div class="col-7">
                <?php if($user->perusahaanDetail->jenis === 'pt'): ?>
                    Perseroan Terbatas (PT)
                <?php elseif($user->perusahaanDetail->jenis === 'cv'): ?>
                    Commanditaire Vennootschap (CV)
                <?php elseif($user->perusahaanDetail->jenis === 'firma'): ?>
                    Firma
                <?php elseif($user->perusahaanDetail->jenis === 'koperasi'): ?>
                    Koperasi
                <?php elseif($user->perusahaanDetail->jenis === 'persero'): ?>
                    Persero
                <?php elseif($user->perusahaanDetail->jenis === 'umkm'): ?>
                    UMKM
                <?php else: ?>
                    -
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
                <?php echo e($user->perusahaanDetail->alamat); ?>

            </div>
        </div>
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
                Nomor
            </div>
            <div class="col-1">
                :
            </div>
            <div class="col-7">
                <?php echo e($user->userKontak->no_handphone); ?>

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
                <?php echo e($user->userKontak->facebook); ?>

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
                <?php echo e($user->userKontak->instagram); ?>

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
                <?php echo e($user->userKontak->twitter); ?>

            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\web-alumni\resources\views/admin/pages/profile/partials/profil-perusahaan.blade.php ENDPATH**/ ?>