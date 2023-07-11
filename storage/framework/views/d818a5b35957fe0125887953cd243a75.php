

<?php $__env->startSection('content'); ?>
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Semua Lowongan</h2>
                <ol>
                    <li><a href="<?php echo e(route('homepage')); ?>"><i class="bi bi-house-fill"></i> Beranda</a></li>
                    <li>Lowongan</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page pt-5">
        <div class="container">
            <div class="row">
                <?php if($loker->isEmpty()): ?>
                    <h3 class="text-center">Belum Ada Lowongan</h3>
                <?php else: ?>
                    <?php $__currentLoopData = $loker; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lkr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                            <div class="lkr-box">
                                <div class="icon"><a href="<?php echo e(route('detail-lowongan', $lkr->slug)); ?>"><i
                                            class="bi bi-briefcase"></i></a></div>
                                <h4 class="title mb-1"><a
                                        href="<?php echo e(route('detail-lowongan', $lkr->slug)); ?>"><?php echo e($lkr->nama); ?></a>
                                </h4>
                                <span class="text-muted"><?php echo e($lkr->kategori->nama); ?></span>
                                <p class="description mt-3 mb-0"><i class="bi bi-building"></i> <?php echo e($lkr->user->name); ?></p>
                                <p class="description mb-0"><i class="bi bi-alarm"></i>
                                    <?php echo e(\Carbon\Carbon::parse($lkr->tanggal_mulai)->format('d M Y')); ?> -
                                    <?php echo e(\Carbon\Carbon::parse($lkr->tanggal_akhir)->format('d M Y')); ?></p>
                                <p class="description"><i class="bi bi-geo-alt"></i>
                                    <?php echo e($lkr->lokasi); ?></p>
                                <p class="description mt-4 pt-2 border-top"><i class="bi bi-clock-history"></i> Diperbarui
                                    pada
                                    <?php echo e(\Carbon\Carbon::parse($lkr->updated_at)->format('d M Y')); ?></p>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
            <div class="mb-4 pagination justify-content-center">
                <?php echo e($loker->links()); ?>

            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.pages.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\web-alumni\resources\views/home/pages/lowongan/index.blade.php ENDPATH**/ ?>