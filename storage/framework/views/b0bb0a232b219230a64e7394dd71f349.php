

<?php $__env->startSection('content'); ?>
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Semua Berita</h2>
                <ol>
                    <li><a href="<?php echo e(route('homepage')); ?>"><i class="bi bi-house-fill"></i> Beranda</a></li>
                    <li>Berita</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page pt-5">
        <div class="container">
            <div class="row">
                <?php if($berita->isEmpty()): ?>
                    <h3 class="text-center">Belum Ada Berita</h3>
                <?php else: ?>
                    <?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                            <div class="box">
                                <div class="icon"><a href="<?php echo e(route('detail-berita', $brt->slug)); ?>"><i
                                            class="bi bi-newspaper"></i></a></div>
                                <h4 class="title"><a
                                        href="<?php echo e(route('detail-berita', $brt->slug)); ?>"><?php echo e($brt->judul); ?></a>
                                </h4>
                                <p class="description"><?php echo $brt->kutipan; ?></p>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
            <div class="mb-4 pagination justify-content-center">
                <?php echo e($berita->links()); ?>

            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.pages.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\web-alumni\resources\views/home/pages/berita/index.blade.php ENDPATH**/ ?>