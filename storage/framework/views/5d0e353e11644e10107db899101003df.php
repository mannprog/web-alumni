<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SMK 35 PGRI Solokan Jeruk</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item <?php echo e(Route::is('dashboard') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item <?php echo e(Route::is('berita.index') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('berita.index')); ?>">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>News</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link">
            <i class="fas fa-fw fa-suitcase"></i>
            <span>Lowongan</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>Kuesioner</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Pengaturan
    </div>

    <li class="nav-item <?php echo e(Route::is('perusahaan.index') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('perusahaan.index')); ?>">
            <i class="fas fa-fw fa-building"></i>
            <span>Perusahaan</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-user"></i>
            <span>Pengunjung</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-school"></i>
            <span>Civitas</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Alumni</a>
                <a class="collapse-item <?php echo e(Route::is('gtk.index') ? 'active' : ''); ?>"
                    href="<?php echo e(route('gtk.index')); ?>">GTK</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<?php /**PATH C:\laragon\www\web-alumni\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>