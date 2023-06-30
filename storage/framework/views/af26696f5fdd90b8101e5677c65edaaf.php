

<?php $__env->startSection('content'); ?>
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Berita - <?php echo e($berita->judul); ?></h1>
        <a href="<?php echo e(route('berita.index')); ?>" class="btn btn-sm btn-secondary shadow-sm">Kembali</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <?php if($berita->foto): ?>
                <img class="card-img-top" src="<?php echo e(asset('img/berita/' . $berita->foto)); ?>" style="height: 250px">
            <?php else: ?>
                <h5 class="font-italic text-center">Tidak Ada Gambar</h5>
            <?php endif; ?>
            <div class="card-body">
                <h2 class="card-title font-weight-bold text-center"><?php echo e($berita->judul); ?></h2>
                <p class="card-text text-justify"><?php echo $berita->isi; ?></p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', ['title' => 'Detail Berita'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\web-alumni\resources\views/admin/pages/berita/detail.blade.php ENDPATH**/ ?>