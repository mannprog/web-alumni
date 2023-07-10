<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        
        <img src="<?php echo e(asset('img/logo.png')); ?>" alt="SMK 35 PGRI Solokan Jeruk" class="img-fluid" style="max-height: 50px">
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item <?php echo e(Route::is('dashboard-alumni') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('dashboard-alumni')); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item <?php echo e(Route::is('berita*') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('berita.index')); ?>">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Berita</span>
        </a>
    </li>

    <li class="nav-item <?php echo e(Route::is('lowongan-alumni*') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('lowongan-alumni.index')); ?>">
            <i class="fas fa-fw fa-suitcase"></i>
            <span>Lowongan</span>
        </a>
    </li>

    <li class="nav-item <?php echo e(Route::is('alumnus*') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('alumnus.index')); ?>">
            <i class="fas fa-fw fa-user-graduate"></i>
            <span>Alumni</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<?php /**PATH C:\laragon\www\web-alumni\resources\views/notadmin/layouts/sidebar.blade.php ENDPATH**/ ?>