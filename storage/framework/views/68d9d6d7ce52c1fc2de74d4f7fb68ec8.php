

<?php $__env->startSection('content'); ?>
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Detail Berita</h2>
                <ol>
                    <li><a href="<?php echo e(route('homepage')); ?>"><i class="bi bi-house-fill"></i> Beranda</a></li>
                    <li><a href="<?php echo e(route('all-berita')); ?>">Berita</a></li>
                    <li>Detail Berita</li>
                </ol>
            </div>

        </div>
    </section><!-- Breadcrumbs Section -->

    <div class="container">
        <div class="text-center mt-3">
            <h1><b><?php echo e($berita->judul); ?></b></h1>
            <p><?php echo e(\Carbon\Carbon::parse($berita->updated_at)->format('d M Y H:i:s')); ?></p>
        </div>

        <?php if($berita->foto): ?>
            <img src="<?php echo e(asset('img/berita/' . $berita->foto)); ?>" class="img-fluid mt-3">
        <?php endif; ?>

        <p class="text-justify"><?php echo $berita->isi; ?></p>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.pages.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\web-alumni\resources\views/home/pages/berita/detail.blade.php ENDPATH**/ ?>