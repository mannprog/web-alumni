

<?php $__env->startSection('content'); ?>
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Detail Alumni - <strong><?php echo e($alumni->name); ?></strong></h2>
                <ol>
                    <li><a href="<?php echo e(route('homepage')); ?>"><i class="bi bi-house-fill"></i> Beranda</a></li>
                    <li><a href="<?php echo e(route('all-alumni')); ?>">Alumni</a></li>
                    <li>Detail Alumni</li>
                </ol>
            </div>

        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="lowongan-details" class="lowongan-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-5">
                    <div class="lowongan-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img src="<?php echo e(asset('img/foto/' . $alumni->foto)); ?>" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="lowongan-info">
                        <h3>Data Pribadi</h3>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Jenis Kelamin
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                <?php if($alumni->alumniDetail->jenis_kelamin === 'l'): ?>
                                    Laki-laki
                                <?php elseif($alumni->alumniDetail->jenis_kelamin === 'p'): ?>
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
                                <?php echo e($alumni->alumniDetail->tempat_lahir); ?>,
                                <?php if($alumni->alumniDetail->tanggal_lahir): ?>
                                    <?php echo e(\Carbon\Carbon::parse($alumni->alumniDetail->tanggal_lahir)->format('d M Y')); ?>

                                <?php else: ?>
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
                                <?php if($alumni->alumniDetail->alamat): ?>
                                    <?php echo $alumni->alumniDetail->alamat; ?>

                                <?php else: ?>
                                    -
                                <?php endif; ?>
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
                                <?php if($alumni->alumniDetail->status === 'bekerja'): ?>
                                    Bekerja
                                <?php else: ?>
                                    Tidak Bekerja
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
                                <?php if($alumni->alumniDetail->pendidikan_terakhir === 'sma'): ?>
                                    SMA/Sederajat
                                <?php elseif($alumni->alumniDetail->pendidikan_terakhir === 'd1'): ?>
                                    D1/Sederajat
                                <?php elseif($alumni->alumniDetail->pendidikan_terakhir === 'd2'): ?>
                                    D2/Sederajat
                                <?php elseif($alumni->alumniDetail->pendidikan_terakhir === 'd3'): ?>
                                    D3/Sederajat
                                <?php elseif($alumni->alumniDetail->pendidikan_terakhir === 's1'): ?>
                                    S1/Sederajat
                                <?php elseif($alumni->alumniDetail->pendidikan_terakhir === 's2'): ?>
                                    S2/Sederajat
                                <?php elseif($alumni->alumniDetail->pendidikan_terakhir === 's3'): ?>
                                    S3/Sederajat
                                <?php else: ?>
                                    -
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Pendidikan Lain
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                <?php if($alumni->alumniDetail->pendidikan_lain): ?>
                                    <?php echo $alumni->alumniDetail->pendidikan_lain; ?>

                                <?php else: ?>
                                    -
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
                                <?php if($alumni->alumniDetail->organisasi): ?>
                                    <?php echo $alumni->alumniDetail->organisasi; ?>

                                <?php else: ?>
                                    -
                                <?php endif; ?>
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
                                <?php if($alumni->alumniDetail->keahlian): ?>
                                    <?php echo $alumni->alumniDetail->keahlian; ?>

                                <?php else: ?>
                                    -
                                <?php endif; ?>
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
                                <?php if($alumni->alumniDetail->pengalaman_kerja): ?>
                                    <?php echo $alumni->alumniDetail->pengalaman_kerja; ?>

                                <?php else: ?>
                                    -
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="lowongan-info">
                        <h3>Data Kontak</h3>
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
                                <?php if($alumni->userKontak->no_handphone): ?>
                                    <?php echo e($alumni->userKontak->no_handphone); ?>

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
                                <?php if($alumni->userKontak->facebook): ?>
                                    <?php echo e($alumni->userKontak->facebook); ?>

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
                                <?php if($alumni->userKontak->instagram): ?>
                                    <?php echo e($alumni->userKontak->instagram); ?>

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
                                <?php if($alumni->userKontak->twitter): ?>
                                    <?php echo e($alumni->userKontak->twitter); ?>

                                <?php else: ?>
                                    -
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>

                    <div class="lowongan-info">
                        <h3>Data Akademik</h3>
                        <div class="row align-items-center">
                            <div class="col-4">
                                NIS
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                <?php if($alumni->alumniAkademik->nis): ?>
                                    <?php echo e($alumni->alumniAkademik->nis); ?>

                                <?php else: ?>
                                    -
                                <?php endif; ?>
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
                                <?php if($alumni->alumniAkademik->nisn): ?>
                                    <?php echo e($alumni->alumniAkademik->nisn); ?>

                                <?php else: ?>
                                    -
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Angkatan
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                <?php if($alumni->alumniAkademik->angkatan): ?>
                                    <?php echo e($alumni->alumniAkademik->angkatan); ?>

                                <?php else: ?>
                                    -
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Jurusan
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                <?php if($alumni->alumniAkademik->jurusan === 'tkj'): ?>
                                    Teknik Komputer Jaringan
                                <?php elseif($alumni->alumniAkademik->jurusan === 'rpl'): ?>
                                    Rekayasa Perangkat Lunak
                                <?php else: ?>
                                    -
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
                                <?php if($alumni->alumniAkademik->rombel): ?>
                                    <?php echo e($alumni->alumniAkademik->rombel); ?>

                                <?php else: ?>
                                    -
                                <?php endif; ?>
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
                                <?php if($alumni->alumniAkademik->tahun_masuk): ?>
                                    <?php echo e($alumni->alumniAkademik->tahun_masuk); ?>

                                <?php else: ?>
                                    -
                                <?php endif; ?>
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
                                <?php if($alumni->alumniAkademik->tahun_lulus): ?>
                                    <?php echo e($alumni->alumniAkademik->tahun_lulus); ?>

                                <?php else: ?>
                                    -
                                <?php endif; ?>
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
                                <?php if($alumni->alumniAkademik->rata_ijazah): ?>
                                    <?php echo e($alumni->alumniAkademik->rata_ijazah); ?>

                                <?php else: ?>
                                    -
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section><!-- End lowongan Details Section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.pages.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\web-alumni\resources\views/home/pages/alumni/detail.blade.php ENDPATH**/ ?>