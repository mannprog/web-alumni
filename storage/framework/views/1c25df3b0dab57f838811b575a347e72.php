<?php $__env->startSection('content'); ?>
    <!-- ======= Tentang Section ======= -->
    <section id="tentang">
        <div class="container" data-aos="fade-up">
            <div class="row tentang-container">

                <div class="col-lg-6 content order-lg-1 order-2">
                    <h2 class="title">Tentang Kami</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.
                    </p>

                    

                </div>

                <div class="col-lg-6 background order-lg-2 order-1" data-aos="fade-left" data-aos-delay="100">
                </div>
            </div>

        </div>
    </section><!-- End Tentang Section -->

    <!-- ======= Berita Section ======= -->
    <section id="berita">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h3 class="section-title">Berita</h3>
                <p class="section-description">Berikut adalah daftar berita atau pengumuman.</p>
            </div>
            <div class="row">
                <?php if($berita->isEmpty()): ?>
                    <h3 class="text-center">Belum Ada Berita</h3>
                <?php else: ?>
                    <?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                            <div class="box">
                                <div class="icon"><a href="<?php echo e(route('detail-berita', $brt->slug)); ?>"><i
                                            class="bi bi-newspaper"></i></a></div>
                                <h4 class="title"><a
                                        href="<?php echo e(route('detail-berita', $brt->slug)); ?>"><?php echo e($brt->judul); ?></a>
                                </h4>
                                <p class="description"><?php echo $brt->kutipan; ?></p>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
            <?php if($berita->isNotEmpty()): ?>
                <div class="brt-btn-container text-center">
                    <a class="brt-btn align-middle" href="<?php echo e(route('all-berita')); ?>">Lihat Selengkapnya</a>
                </div>
            <?php endif; ?>
        </div>
    </section><!-- End Berita Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
        <div class="container">
            <div class="row" data-aos="zoom-in">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3 class="cta-title">Ayo Bergabung, Eksplorasi Pengetahuan!</h3>
                    <p class="cta-text">Jadilah bagian dari komunitas sekolah kami yang penuh semangat dan inspiratif.
                        Segera bergabung dan capai prestasimu!</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#">Daftar Sekarang</a>
                </div>
            </div>

        </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Lowongan Section ======= -->
    <section id="lowongan">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h3 class="section-title">Lowongan</h3>
                <p class="section-description">Berikut adalah daftar lowongan pekerjaan.</p>
            </div>
            <div class="row">
                <?php if($loker->isEmpty()): ?>
                    <h3 class="text-center">Belum Ada Lowongan</h3>
                <?php else: ?>
                    <?php $__currentLoopData = $loker; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lkr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                            <div class="box">
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
            <?php if($loker->isNotEmpty()): ?>
                <div class="brt-btn-container text-center">
                    <a class="brt-btn align-middle" href="<?php echo e(route('all-lowongan')); ?>">Lihat Selengkapnya</a>
                </div>
            <?php endif; ?>
        </div>
    </section><!-- End Lowongan Section -->

    <!-- ======= Alumni Section ======= -->
    <section id="alumni">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h3 class="section-title">Alumni</h3>
                <p class="section-description">Berikut adalah daftar alumni.</p>
            </div>
            <div class="row">
                <?php $__currentLoopData = $alumni; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $al): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="pic">
                                <a href="<?php echo e(route('detail-alumni', $al->username)); ?>"><img
                                        src="<?php echo e(asset('img/foto/' . $al->foto)); ?>" alt=""></a>
                            </div>
                            <h4><?php echo e($al->name); ?></h4>
                            <span><?php echo e($al->alumniAkademik->tahun_masuk); ?> - <?php echo e($al->alumniAkademik->tahun_lulus); ?></span>
                            <div class="social">
                                <a href="https://twitter.com/<?php echo e($al->userKontak->twitter); ?>" target="_blank"><i
                                        class="bi bi-twitter"></i></a>
                                <a href="https://facebook.com/<?php echo e($al->userKontak->facebook); ?>" target="_blank"><i
                                        class="bi bi-facebook"></i></a>
                                <a href="https://instagram.com/<?php echo e($al->userKontak->instagram); ?>" target="_blank"><i
                                        class="bi bi-instagram"></i></a>
                                <a href="mailto:<?php echo e($al->email); ?>"><i class="bi bi-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php if($alumni->isNotEmpty()): ?>
                <div class="brt-btn-container text-center">
                    <a class="brt-btn align-middle" href="<?php echo e(route('all-alumni')); ?>">Lihat Selengkapnya</a>
                </div>
            <?php endif; ?>
        </div>
    </section><!-- End Alumni Section -->

    <!-- ======= Kontak Section ======= -->
    <section id="kontak">
        <div class="container">
            <div class="section-header">
                <h3 class="section-title">Kontak Kami</h3>
                <p class="section-description">Berikut adalah kontak kami yang dapat dihubungi.</p>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.9805483787104!2d107.76028151477338!3d-7.011570294935206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c1533c0f8d4d%3A0xff8005a5df42967!2sSMK%20PGRI%2035%20Solokan%20Jeruk!5e0!3m2!1sid!2sid!4v1689598314216!5m2!1sid!2sid"
                        width="100%" height="380" frameborder="0" style="border:0;" allowfullscreen></iframe>
                </div>

                <div class="col-lg-4 px-3">
                    <div class="info">
                        <div>
                            <i class="bi bi-geo-alt"></i>
                            <p>Jl. R.H.O Kosasih No.90, Cibodas, <br> Kec. Solokanjeruk, Kabupaten Bandung, Jawa Barat 40376
                            </p>
                        </div>

                        <div>
                            <i class="bi bi-envelope"></i>
                            <p>smkpgri35soljer@gmail.com</p>
                        </div>

                        <div>
                            <i class="bi bi-telephone"></i>
                            <p>(022) 85962018</p>
                        </div>
                    </div>

                    <div class="social-links">
                        <a href="#" class="telephone"><i class="bi bi-phone"></i></a>
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Kontak Section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\web-alumni\resources\views/home/welcome.blade.php ENDPATH**/ ?>