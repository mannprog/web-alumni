<?php $__env->startSection('content'); ?>
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Perusahaan - <?php echo e($data->name); ?></h1>
        <a href="<?php echo e(route('perusahaan.index')); ?>" class="btn btn-sm btn-secondary shadow-sm">Kembali</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            
            <div class="row">
                <div class="col-lg-3">
                    <img src="<?php echo e(asset('img/foto/' . $data->foto)); ?>" class="img-fluid rounded">
                </div>
                <div class="col-lg-9">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <h4 class="font-weight-bold border-bottom pb-2"><?php echo e($data->name); ?>

                            </h4>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-4">
                            Jenis
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            <?php if($data->perusahaanDetail->jenis === 'pt'): ?>
                                Perseroan Terbatas (PT)
                            <?php elseif($data->perusahaanDetail->jenis === 'cv'): ?>
                                Commanditaire Vennootschap (CV)
                            <?php elseif($data->perusahaanDetail->jenis === 'firma'): ?>
                                Firma
                            <?php elseif($data->perusahaanDetail->jenis === 'koperasi'): ?>
                                Koperasi
                            <?php elseif($data->perusahaanDetail->jenis === 'persero'): ?>
                                Persero
                            <?php elseif($data->perusahaanDetail->jenis === 'umkm'): ?>
                                UMKM
                            <?php else: ?>
                                -
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-4">
                            Alamat
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            <?php echo e($data->perusahaanDetail->alamat); ?>

                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-4">
                            Username
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            <?php echo e($data->username); ?>

                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-4">
                            Email
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            <?php echo e($data->email); ?>

                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-4">
                            Nomor
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            <?php echo e($data->userKontak->no_handphone); ?>

                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-4">
                            Facebook
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            <?php echo e($data->userKontak->facebook); ?>

                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-4">
                            Instagram
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            <?php echo e($data->userKontak->instagram); ?>

                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-4">
                            Twitter
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            <?php echo e($data->userKontak->twitter); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', ['title' => 'Detail Perusahaan'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\web-alumni\resources\views/admin/pages/perusahaan/detail.blade.php ENDPATH**/ ?>