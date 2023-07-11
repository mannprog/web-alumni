

<?php $__env->startSection('content'); ?>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Alumni - <?php echo e($alumni->name); ?></h1>
        <a href="<?php echo e(route('allAlumni.index')); ?>" class="btn btn-sm btn-secondary shadow-sm">Kembali</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 text-center">
                    <img src="<?php echo e(asset('img/foto/' . $alumni->foto)); ?>" class="img-fluid rounded">
                </div>
                <div class="col-lg-9 mt-3 mt-lg-0">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <h4 class="font-weight-bold border-bottom pb-2"><?php echo e($alumni->name); ?>

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
                        <?php echo $__env->make('admin.pages.general.alumni.partials.alumni-detail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div class="row align-items-center mt-3 mb-0">
                        <div class="col-lg-12">
                            <p class="font-weight-bold">Data Kontak
                            </p>
                        </div>
                    </div>
                    <div class="container">
                        <?php echo $__env->make('admin.pages.general.alumni.partials.alumni-kontak', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div class="row align-items-center mt-3 mb-0">
                        <div class="col-lg-12">
                            <p class="font-weight-bold">Data Akademik
                            </p>
                        </div>
                    </div>
                    <div class="container">
                        <?php echo $__env->make('admin.pages.general.alumni.partials.alumni-akademik', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div class="row align-items-center mt-3 mb-0">
                        <div class="col-lg-12">
                            <p class="font-weight-bold">Data Keluarga
                            </p>
                        </div>
                    </div>
                    <div class="container">
                        <?php echo $__env->make('admin.pages.general.alumni.partials.alumni-keluarga', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', ['title' => 'Detail Alumni'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\web-alumni\resources\views/admin/pages/general/alumni/detail.blade.php ENDPATH**/ ?>