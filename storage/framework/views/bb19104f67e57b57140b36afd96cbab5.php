

<?php $__env->startSection('content'); ?>
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Alumni - <?php echo e($alumni->name); ?></h1>
        <a href="<?php echo e(route('alumni.index')); ?>" class="btn btn-sm btn-secondary shadow-sm">Kembali</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            
            <div class="row">
                <div class="col-lg-3">
                    <img src="<?php echo e(asset('img/foto/' . $alumni->alumni_detail->foto)); ?>" class="img-fluid rounded">
                </div>
                <div class="col-lg-9">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <h4 class="font-weight-bold border-bottom pb-2"><?php echo e($alumni->name); ?>

                            </h4>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <h5 class="font-weight-bold">Data Pribadi
                                </h5>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    NIS
                                </div>
                                <div class="col-1">
                                    :
                                </div>
                                <div class="col-7">
                                    <?php echo e($alumni->alumni_detail->nis); ?>

                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-4">
                                    NISN
                                </div>
                                <div class="col-1">
                                    :
                                </div>
                                <div class="col-7">
                                    <?php echo e($alumni->alumni_detail->nisn); ?>

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
                                    <?php echo e($alumni->alumni_detail->nik); ?>

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
                                    <?php if($alumni->alumni_detail->jk === 'l'): ?>
                                        Laki-laki
                                    <?php else: ?>
                                        Perempuan
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
                                    <?php echo e($alumni->alumni_detail->tempat_lahir); ?>, <?php echo e($alumni->alumni_detail->tanggal_lahir); ?>

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
                                    <?php echo e($alumni->alumni_detail->alamat); ?>

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
                                    <?php echo e($alumni->username); ?>

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
                                    <?php echo e($alumni->email); ?>

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
                                    <?php echo e($alumni->alumni_detail->no_handphone); ?>

                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-4">
                                    Status
                                </div>
                                <div class="col-1">
                                    :
                                </div>
                                <div class="col-7">
                                    <?php if($alumni->alumni_detail->status === 'bekerja'): ?>
                                        Bekerja
                                    <?php else: ?>
                                        Tidak Bekerja
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-4">
                                    Organisasi
                                </div>
                                <div class="col-1">
                                    :
                                </div>
                                <div class="col-7">
                                    <?php echo e($alumni->alumni_detail->organisasi); ?>

                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-4">
                                    Keahlian
                                </div>
                                <div class="col-1">
                                    :
                                </div>
                                <div class="col-7">
                                    <?php echo e($alumni->alumni_detail->keahlian); ?>

                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-4">
                                    Pengalaman Kerja
                                </div>
                                <div class="col-1">
                                    :
                                </div>
                                <div class="col-7">
                                    <?php echo e($alumni->alumni_detail->pengalaman_kerja); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <h5 class="font-weight-bold">Data Keluarga
                                </h5>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    Nama Ayah
                                </div>
                                <div class="col-1">
                                    :
                                </div>
                                <div class="col-7">
                                    <?php echo e($alumni->alumni_family->ayah); ?>

                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-4">
                                    Pekerjaan Ayah
                                </div>
                                <div class="col-1">
                                    :
                                </div>
                                <div class="col-7">
                                    <?php echo e($alumni->alumni_family->pekerjaan_ayah); ?>

                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-4">
                                    Nama Ibu
                                </div>
                                <div class="col-1">
                                    :
                                </div>
                                <div class="col-7">
                                    <?php echo e($alumni->alumni_family->ibu); ?>

                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-4">
                                    Pekerjaan Ibu
                                </div>
                                <div class="col-1">
                                    :
                                </div>
                                <div class="col-7">
                                    <?php echo e($alumni->alumni_family->pekerjaan_ibu); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <h5 class="font-weight-bold">Data Akademik
                                </h5>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    Jurusan
                                </div>
                                <div class="col-1">
                                    :
                                </div>
                                <div class="col-7">
                                    <?php if($alumni->alumni_academic->jurusan === 'tkj'): ?>
                                        Teknik Komputer Jaringan
                                    <?php else: ?>
                                        Rekayasa Perangkat Lunak
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-4">
                                    Rombel
                                </div>
                                <div class="col-1">
                                    :
                                </div>
                                <div class="col-7">
                                    <?php echo e($alumni->alumni_academic->rombel); ?>

                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-4">
                                    Tahun Masuk
                                </div>
                                <div class="col-1">
                                    :
                                </div>
                                <div class="col-7">
                                    <?php echo e($alumni->alumni_academic->tahun_masuk); ?>

                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-4">
                                    Tahun Lulus
                                </div>
                                <div class="col-1">
                                    :
                                </div>
                                <div class="col-7">
                                    <?php echo e($alumni->alumni_academic->tahun_lulus); ?>

                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-4">
                                    Nilai Rata-rata Ijazah
                                </div>
                                <div class="col-1">
                                    :
                                </div>
                                <div class="col-7">
                                    <?php echo e($alumni->alumni_academic->rata_ijazah); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', ['title' => 'Detail Alumni'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\web-alumni\resources\views/admin/pages/alumni/detail.blade.php ENDPATH**/ ?>