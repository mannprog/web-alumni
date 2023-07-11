<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

        <div id="logo">
            <a href="{{ route('homepage') }}"><img src="assets/img/logo.png" alt=""></a>
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
                @if (Route::has('login'))
                    @auth
                        @if (Auth::user()->is_admin == 0)
                            <li class="dropdown"><a href="#"><span>{{ auth()->user()->name }}</span> <i
                                        class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                    {{-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                            class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <li><a href="#">Deep Drop Down 1</a></li>
                                        <li><a href="#">Deep Drop Down 2</a></li>
                                        <li><a href="#">Deep Drop Down 3</a></li>
                                        <li><a href="#">Deep Drop Down 4</a></li>
                                        <li><a href="#">Deep Drop Down 5</a></li>
                                    </ul>
                                </li> --}}
                                </ul>
                            </li>
                        @else
                            <li class="dropdown"><a href="#"><span>{{ auth()->user()->name }}</span> <i
                                        class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="{{ route('dashboard-alumni') }}">Dashboard</a></li>
                                </ul>
                            </li>
                        @endif
                    @else
                        <li><a class="nav-link scrollto" href="{{ route('auth') }}">Login</a></li>
                    @endauth
                @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header>
