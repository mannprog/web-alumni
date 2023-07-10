

<?php $__env->startSection('content'); ?>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Alumni</h1>
    </div>

    <div class="row">
        <?php $__currentLoopData = $alumni; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $al): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 col-md-4 mb-4">
                <a href="<?php echo e(route('allAlumni.detail', $al->username)); ?>" class="card-link text-dark">
                    <div class="card shadow">
                        <img class="card-img-top img-fluid" src="<?php echo e(asset('img/foto/' . $al->foto)); ?>" style="height: 150px">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold"><?php echo e($al->name); ?></h5>
                            <span class="badge badge-pill badge-primary mb-3">
                                <?php if($al->alumniDetail->status === 'tidakbekerja'): ?>
                                    Belum Bekerja
                                <?php else: ?>
                                    Bekerja
                                <?php endif; ?>
                            </span>
                            <p class="card-text"><i class="fas fa-fw fa-venus-mars"></i>
                                <?php if($al->alumniDetail->jenis_kelamin === 'l'): ?>
                                    Laki-laki
                                <?php else: ?>
                                    Perempuan
                                <?php endif; ?>
                            </p>
                            <p class="card-text"><i class="fas fa-fw fa-map-marker-alt"></i>
                                <?php echo e($al->alumniDetail->alamat); ?></p>
                            <p class="card-text"><i class="fas fa-fw fa-envelope"></i> <?php echo e($al->email); ?></p>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="mt-4 pagination justify-content-center">
        <?php echo e($alumni->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', ['title' => 'Alumni'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\web-alumni\resources\views/admin/pages/general/alumni/index.blade.php ENDPATH**/ ?>