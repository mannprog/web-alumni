<?php $__env->startSection('content'); ?>
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Petugas - <?php echo e($petugas->name); ?></h1>
        <a href="<?php echo e(route('petugas.index')); ?>" class="btn btn-sm btn-secondary shadow-sm">Kembali</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 text-center">
                    <img src="<?php echo e(asset('img/foto/' . $petugas->foto)); ?>" class="img-fluid rounded">
                </div>
                <div class="col-lg-9 mt-3 mt-lg-0">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <h4 class="font-weight-bold border-bottom pb-2"><?php echo e($petugas->name); ?>

                            </h4>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <p class="font-weight-bold">Data Pribadi
                            </p>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-4">
                                Status
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                <?php if($petugas->petugasDetail->status === 'pns'): ?>
                                    PNS
                                <?php elseif($petugas->petugasDetail->status === 'nonpns'): ?>
                                    Non PNS
                                <?php else: ?>
                                    -
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                NIP
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                <?php if($petugas->petugasDetail->nip): ?>
                                    <?php echo e($petugas->petugasDetail->nip); ?>

                                <?php else: ?>
                                    -
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                NUPTK
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                <?php if($petugas->petugasDetail->nuptk): ?>
                                    <?php echo e($petugas->petugasDetail->nuptk); ?>

                                <?php else: ?>
                                    -
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                NIK
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                <?php if($petugas->petugasDetail->nik): ?>
                                    <?php echo e($petugas->petugasDetail->nik); ?>

                                <?php else: ?>
                                    -
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Jenis Kelamin
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                <?php if($petugas->petugasDetail->jenis_kelamin === 'l'): ?>
                                    Laki-laki
                                <?php elseif($petugas->petugasDetail->jenis_kelamin === 'p'): ?>
                                    Perempuan
                                <?php else: ?>
                                    -
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Tempat, Tanggal Lahir
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                <?php echo e($petugas->petugasDetail->tempat_lahir); ?>, <?php echo e($petugas->petugasDetail->tanggal_lahir); ?>

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
                                <?php if($petugas->petugasDetail->alamat): ?>
                                    <?php echo e($petugas->petugasDetail->alamat); ?>

                                <?php else: ?>
                                    -
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Pendidikan Terakhir
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                <?php if($petugas->petugasDetail->pendidikan_terakhir === 'sma'): ?>
                                    SMA/Sederajat
                                <?php elseif($petugas->petugasDetail->pendidikan_terakhir === 'd1'): ?>
                                    D1/Sederajat
                                <?php elseif($petugas->petugasDetail->pendidikan_terakhir === 'd2'): ?>
                                    D2/Sederajat
                                <?php elseif($petugas->petugasDetail->pendidikan_terakhir === 'd3'): ?>
                                    D3/Sederajat
                                <?php elseif($petugas->petugasDetail->pendidikan_terakhir === 's1'): ?>
                                    S1/Sederajat
                                <?php elseif($petugas->petugasDetail->pendidikan_terakhir === 's2'): ?>
                                    S2/Sederajat
                                <?php elseif($petugas->petugasDetail->pendidikan_terakhir === 's3'): ?>
                                    S3/Sederajat
                                <?php else: ?>
                                    -
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mt-3 mb-0">
                        <div class="col-lg-12">
                            <p class="font-weight-bold">Data Kontak
                            </p>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-4">
                                Username
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                <?php echo e($petugas->username); ?>

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
                                <?php echo e($petugas->email); ?>

                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Nomor Handphone
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                <?php if($petugas->userKontak->no_handphone): ?>
                                    <?php echo e($petugas->userKontak->no_handphone); ?>

                                <?php else: ?>
                                    -
                                <?php endif; ?>
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
                                <?php if($petugas->userKontak->facebook): ?>
                                    <?php echo e($petugas->userKontak->facebook); ?>

                                <?php else: ?>
                                    -
                                <?php endif; ?>
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
                                <?php if($petugas->userKontak->instagram): ?>
                                    <?php echo e($petugas->userKontak->instagram); ?>

                                <?php else: ?>
                                    -
                                <?php endif; ?>
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
                                <?php if($petugas->userKontak->twitter): ?>
                                    <?php echo e($petugas->userKontak->twitter); ?>

                                <?php else: ?>
                                    -
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', ['title' => 'Detail Petugas'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\web-alumni\resources\views/admin/pages/petugas/detail.blade.php ENDPATH**/ ?>