

<?php $__env->startSection('content'); ?>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Lowongan Kerja</h1>
    </div>

    <div class="row">
        <?php $__currentLoopData = $lowongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 col-md-4 mb-4">
                <a href="<?php echo e(route('lowongan-alumni.detail', $loker->slug)); ?>" class="card-link text-dark">
                    <div class="card shadow">
                        <?php if($loker->foto): ?>
                            <img class="card-img-top img-fluid" src="<?php echo e(asset('img/loker/' . $loker->foto)); ?>"
                                style="height: 150px">
                        <?php else: ?>
                            <img class="card-img-top img-fluid" src="<?php echo e(asset('img/foto/' . $loker->user->foto)); ?>"
                                style="height: 150px">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($loker->nama); ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo e($loker->user->name); ?></h6>
                            <?php if($loker->is_active === 0): ?>
                                <span class="badge badge-pill badge-primary mb-2">Dibuka</span>
                            <?php else: ?>
                                <span class="badge badge-pill badge-danger mb-2">Ditutup</span>
                            <?php endif; ?>
                            <p class="card-text"><i class="fas fa-fw fa-clock"></i>
                                <?php echo e(\Carbon\Carbon::parse($loker->tanggal_mulai)->format('d M Y')); ?> -
                                <?php echo e(\Carbon\Carbon::parse($loker->tanggal_akhir)->format('d M Y')); ?></p>
                            <p class="card-text"><i class="fas fa-fw fa-map-marker-alt"></i> <?php echo e($loker->lokasi); ?></p>
                        </div>
                        <div class="card-footer text-muted">
                            <i class="fas fa-fw fa-history"></i> Diperbarui pada
                            <?php echo e(\Carbon\Carbon::parse($loker->updated_at)->format('d M Y H:i:s')); ?>

                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('notadmin.layouts.app', ['title' => 'Lowongan Kerja'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\web-alumni\resources\views/notadmin/pages/lowongan/index.blade.php ENDPATH**/ ?>