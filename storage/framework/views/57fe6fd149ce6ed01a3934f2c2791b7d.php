

<?php $__env->startSection('content'); ?>
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Perusahaan <?php echo e($company->name); ?></h1>
        <a href="<?php echo e(route('perusahaan.index')); ?>" class="btn btn-sm btn-secondary shadow-sm">Kembali</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            
            <div class="row">
                <div class="col-lg-3">
                    <img src="<?php echo e(asset('img/foto/' . $company->foto)); ?>" class="img-fluid rounded">
                </div>
                <div class="col-lg-9">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <h4 class="font-weight-bold border-bottom pb-2"><?php echo e($company->name); ?>

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
                            <?php if($company->company_detail->jenis_perusahaan === 'pt'): ?>
                                Perseroan Terbatas (PT)
                            <?php elseif($company->company_detail->jenis_perusahaan === 'cv'): ?>
                                Commanditaire Vennootschap (CV)
                            <?php elseif($company->company_detail->jenis_perusahaan === 'firma'): ?>
                                Firma
                            <?php elseif($company->company_detail->jenis_perusahaan === 'koperasi'): ?>
                                Koperasi
                            <?php elseif($company->company_detail->jenis_perusahaan === 'persero'): ?>
                                Persero
                            <?php elseif($company->company_detail->jenis_perusahaan === 'umkm'): ?>
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
                            <?php echo e($company->company_detail->alamat_perusahaan); ?>

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
                            <?php echo e($company->username); ?>

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
                            <?php echo e($company->email); ?>

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
                            <?php echo e($company->company_detail->no_perusahaan); ?>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                </div>
                <div class="col-lg-6">
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', ['title' => 'Detail Perusahaan'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\web-alumni\resources\views/admin/pages/company/detail.blade.php ENDPATH**/ ?>