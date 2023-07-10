<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        {{-- <div class="sidebar-brand-icon">
            <img src="{{ asset('img/logo.png') }}" alt="SMK 35 PGRI Solokan Jeruk" class="img-fluid"
                style="max-height: 50px">
        </div>
        <div class="sidebar-brand-text ml-1">SMK 35 PGRI Solokan Jeruk</div> --}}
        <img src="{{ asset('img/logo.png') }}" alt="SMK 35 PGRI Solokan Jeruk" class="img-fluid" style="max-height: 50px">
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item {{ Route::is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    @role('admin|petugas|kepalasekolah')
        <li class="nav-item {{ Route::is('berita*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('berita.index') }}">
                <i class="fas fa-fw fa-newspaper"></i>
                <span>Berita</span>
            </a>
        </li>

        <li class="nav-item {{ Route::is('lowongan*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('lowongan.index') }}">
                <i class="fas fa-fw fa-suitcase"></i>
                <span>Lowongan</span>
            </a>
        </li>
    @endrole

    @role('perusahaan')
        <li class="nav-item  {{ Route::is('loker*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('loker.index') }}">
                <i class="fas fa-fw fa-suitcase"></i>
                <span>Lowongan</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link">
                <i class="fas fa-fw fa-user-graduate"></i>
                <span>Alumni</span>
            </a>
        </li>
    @endrole

    @role('admin|kepalasekolah')
        <li class="nav-item">
            <a class="nav-link">
                <i class="fas fa-fw fa-file-alt"></i>
                <span>Laporan</span>
            </a>
        </li>
    @endrole

    @role('admin|petugas|kepalasekolah')
        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            Pengaturan
        </div>

        <li class="nav-item  {{ Route::is('kategori*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('kategori.index') }}">
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
                    <a class="collapse-item {{ Route::is('petugas*') ? 'active' : '' }}"
                        href="{{ route('petugas.index') }}">Petugas</a>
                    <a class="collapse-item {{ Route::is('alumni*') ? 'active' : '' }}"
                        href="{{ route('alumni.index') }}">Alumni</a>
                    <a class="collapse-item {{ Route::is('perusahaan*') ? 'active' : '' }}"
                        href="{{ route('perusahaan.index') }}">Perusahaan</a>
                </div>
            </div>
        </li>
    @endrole

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
