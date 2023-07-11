

<?php $__env->startSection('content'); ?>
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Detail Lowongan</h2>
                <ol>
                    <li><a href="<?php echo e(route('homepage')); ?>"><i class="bi bi-house-fill"></i> Beranda</a></li>
                    <li><a href="<?php echo e(route('all-lowongan')); ?>">Lowongan</a></li>
                    <li>Detail Lowongan</li>
                </ol>
            </div>

        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="lowongan-details" class="lowongan-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6">
                    <div class="lowongan-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <?php if($loker->foto): ?>
                                <div class="swiper-slide">
                                    <img src="<?php echo e(asset('img/loker/' . $loker->foto)); ?>" alt="">
                                </div>
                            <?php else: ?>
                                <div class="swiper-slide">
                                    <img src="<?php echo e(asset('img/foto/' . $loker->user->foto)); ?>" alt="">
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="lowongan-info">
                        <h3>Informasi Lowongan</h3>
                        <ul>
                            <li><strong>Nama</strong>: <?php echo e($loker->nama); ?></li>
                            <li><strong>Kategori</strong>: <?php echo e($loker->kategori->nama); ?></li>
                            <li><strong>Perusahaan</strong>: <?php echo e($loker->user->name); ?></li>
                            <li><strong>Lokasi</strong>: <?php echo e($loker->lokasi); ?></li>
                            <li><strong>Tanggal</strong>:
                                <?php echo e(\Carbon\Carbon::parse($loker->tanggal_mulai)->format('d M Y')); ?> -
                                <?php echo e(\Carbon\Carbon::parse($loker->tanggal_akhir)->format('d M Y')); ?></li>
                            <li><strong>Email</strong>: <?php echo e($loker->user->email); ?></li>
                        </ul>
                    </div>
                    <div class="lowongan-description">
                        <h2>Spesifikasi Lowongan</h2>
                        <p>
                            <?php echo $loker->isi; ?>

                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End lowongan Details Section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.pages.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\web-alumni\resources\views/home/pages/lowongan/detail.blade.php ENDPATH**/ ?>