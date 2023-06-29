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
            <?php echo $__env->make('admin.pages.profile.partials.part.alumni-detail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="row align-items-center mt-3 mb-0">
            <div class="col-lg-12">
                <p class="font-weight-bold">Data Kontak
                </p>
            </div>
        </div>
        <div class="container">
            <?php echo $__env->make('admin.pages.profile.partials.part.alumni-kontak', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="row align-items-center mt-3 mb-0">
            <div class="col-lg-12">
                <p class="font-weight-bold">Data Akademik
                </p>
            </div>
        </div>
        <div class="container">
            <?php echo $__env->make('admin.pages.profile.partials.part.alumni-akademik', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="row align-items-center mt-3 mb-0">
            <div class="col-lg-12">
                <p class="font-weight-bold">Data Keluarga
                </p>
            </div>
        </div>
        <div class="container">
            <?php echo $__env->make('admin.pages.profile.partials.part.alumni-keluarga', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\web-alumni\resources\views/admin/pages/profile/partials/profil-alumni.blade.php ENDPATH**/ ?>