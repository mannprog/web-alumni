<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        
        <img src="<?php echo e(asset('img/logo.png')); ?>" alt="SMK 35 PGRI Solokan Jeruk" class="img-fluid" style="max-height: 50px">
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item <?php echo e(Route::is('dashboard') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'admin|petugas|kepalasekolah')): ?>
        <li class="nav-item <?php echo e(Route::is('berita*') ? 'active' : ''); ?>">
            <a class="nav-link" href="<?php echo e(route('berita.index')); ?>">
                <i class="fas fa-fw fa-newspaper"></i>
                <span>Berita</span>
            </a>
        </li>

        <li class="nav-item <?php echo e(Route::is('lowongan*') ? 'active' : ''); ?>">
            <a class="nav-link" href="<?php echo e(route('lowongan.index')); ?>">
                <i class="fas fa-fw fa-suitcase"></i>
                <span>Lowongan</span>
            </a>
        </li>
    <?php endif; ?>

    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'perusahaan')): ?>
        <li class="nav-item  <?php echo e(Route::is('loker*') ? 'active' : ''); ?>">
            <a class="nav-link" href="<?php echo e(route('loker.index')); ?>">
                <i class="fas fa-fw fa-suitcase"></i>
                <span>Lowongan</span>
            </a>
        </li>

        <li class="nav-item  <?php echo e(Route::is('allAlumni*') ? 'active' : ''); ?>">
            <a class="nav-link" href="<?php echo e(route('allAlumni.index')); ?>">
                <i class="fas fa-fw fa-user-graduate"></i>
                <span>Alumni</span>
            </a>
        </li>
    <?php endif; ?>

    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'admin|kepalasekolah')): ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLaporan"
                aria-expanded="true" aria-controls="collapseLaporan">
                <i class="fas fa-fw fa-file-alt"></i>
                <span>Laporan</span>
            </a>
            <div id="collapseLaporan" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item <?php echo e(Route::is('laporan.petugas') ? 'active' : ''); ?>"
                        href="<?php echo e(route('laporan.petugas')); ?>">Petugas</a>
                    <a class="collapse-item <?php echo e(Route::is('laporan.alumni') ? 'active' : ''); ?>"
                        href="<?php echo e(route('laporan.alumni')); ?>">Alumni</a>
                    <a class="collapse-item <?php echo e(Route::is('laporan.perusahaan') ? 'active' : ''); ?>"
                        href="<?php echo e(route('laporan.perusahaan')); ?>">Perusahaan</a>
                    <a class="collapse-item <?php echo e(Route::is('laporan.berita') ? 'active' : ''); ?>"
                        href="<?php echo e(route('laporan.berita')); ?>">Berita</a>
                    <a class="collapse-item <?php echo e(Route::is('laporan.lowongan') ? 'active' : ''); ?>"
                        href="<?php echo e(route('laporan.lowongan')); ?>">Lowongan</a>
                </div>
            </div>
        </li>
    <?php endif; ?>

    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'admin|petugas|kepalasekolah')): ?>
        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            Pengaturan
        </div>

        <li class="nav-item  <?php echo e(Route::is('kategori*') ? 'active' : ''); ?>">
            <a class="nav-link" href="<?php echo e(route('kategori.index')); ?>">
                <i class="fas fa-fw fa-th-large"></i>
                <span>Kategori</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-user"></i>
                <span>Users</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item <?php echo e(Route::is('petugas*') ? 'active' : ''); ?>"
                        href="<?php echo e(route('petugas.index')); ?>">Petugas</a>
                    <a class="collapse-item <?php echo e(Route::is('alumni*') ? 'active' : ''); ?>"
                        href="<?php echo e(route('alumni.index')); ?>">Alumni</a>
                    <a class="collapse-item <?php echo e(Route::is('perusahaan*') ? 'active' : ''); ?>"
                        href="<?php echo e(route('perusahaan.index')); ?>">Perusahaan</a>
                </div>
            </div>
        </li>
    <?php endif; ?>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<?php /**PATH C:\laragon\www\web-alumni\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>