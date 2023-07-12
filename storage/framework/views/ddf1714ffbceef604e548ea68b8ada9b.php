

<?php $__env->startSection('content'); ?>
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Semua Alumni</h2>
                <ol>
                    <li><a href="<?php echo e(route('homepage')); ?>"><i class="bi bi-house-fill"></i> Beranda</a></li>
                    <li>Alumni</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page pt-5">
        <div class="container">
            <div class="row">
                <?php if($alumni->isEmpty()): ?>
                    <h3 class="text-center">Belum Ada Alumni</h3>
                <?php else: ?>
                    <?php $__currentLoopData = $alumni; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $al): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="member" data-aos="fade-up" data-aos-delay="100">
                                <div class="pic">
                                    <a href="<?php echo e(route('detail-alumni', $al->username)); ?>"><img
                                            src="<?php echo e(asset('img/foto/' . $al->foto)); ?>" alt=""></a>
                                </div>
                                <h4><?php echo e($al->name); ?></h4>
                                <span><?php echo e($al->alumniAkademik->tahun_masuk); ?> - <?php echo e($al->alumniAkademik->tahun_lulus); ?></span>
                                <div class="social">
                                    <a href="https://twitter.com/<?php echo e($al->userKontak->twitter); ?>" target="_blank"><i
                                            class="bi bi-twitter"></i></a>
                                    <a href="https://facebook.com/<?php echo e($al->userKontak->facebook); ?>" target="_blank"><i
                                            class="bi bi-facebook"></i></a>
                                    <a href="https://instagram.com/<?php echo e($al->userKontak->instagram); ?>" target="_blank"><i
                                            class="bi bi-instagram"></i></a>
                                    <a href="mailto:<?php echo e($al->email); ?>"><i class="bi bi-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
            <div class="mb-4 pagination justify-content-center">
                <?php echo e($alumni->links()); ?>

            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.pages.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\web-alumni\resources\views/home/pages/alumni/index.blade.php ENDPATH**/ ?>