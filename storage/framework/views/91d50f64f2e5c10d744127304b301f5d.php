<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

        <div id="logo">
            <a href="<?php echo e(route('homepage')); ?>"><img src="assets/img/logo.png" alt=""></a>
            <!-- Uncomment below if you prefer to use a text logo -->
            <!--<h1><a href="index.html">Regna</a></h1>-->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                <li><a class="nav-link scrollto" href="#tentang">Tentang</a></li>
                <li><a class="nav-link scrollto" href="#berita">Berita</a></li>
                <li><a class="nav-link scrollto " href="#lowongan">Lowongan</a></li>
                <li><a class="nav-link scrollto" href="#alumni">Alumni</a></li>
                <li><a class="nav-link scrollto" href="#kontak">Kontak</a></li>
                <?php if(Route::has('login')): ?>
                    <?php if(auth()->guard()->check()): ?>
                        <?php if(Auth::user()->is_admin == 0): ?>
                            <li class="dropdown"><a href="#"><span><?php echo e(auth()->user()->name); ?></span> <i
                                        class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
                                    
                                </ul>
                            </li>
                        <?php else: ?>
                            <li class="dropdown"><a href="#"><span><?php echo e(auth()->user()->name); ?></span> <i
                                        class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="<?php echo e(route('dashboard-alumni')); ?>">Dashboard</a></li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    <?php else: ?>
                        <li><a class="nav-link scrollto" href="<?php echo e(route('auth')); ?>">Login</a></li>
                    <?php endif; ?>
                <?php endif; ?>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header>
<?php /**PATH C:\laragon\www\web-alumni\resources\views/home/layouts/navbar.blade.php ENDPATH**/ ?>