@extends('home.pages.layout')

@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Tentang Kami</h2>
                <ol>
                    <li><a href="{{ route('homepage') }}"><i class="bi bi-house-fill"></i> Beranda</a></li>
                    <li>Tentang Kami</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-items-center justify-content-center text-center">
                    <img src="{{ asset('img/logo.png') }}" class="img-fluid mb-2">
                </div>
                <div class="col-lg-6">
                    <h1 class="fw-bold">SEJARAH</h1>
                    <div class="container">
                        <p class="text-justify">SMK PGRI 35 Solokan Jeruk merupakan suatu lembaga pendidikan yang bergerak
                            di bidang pendidikan sejak tahun 2006 yang beralamatkan di Jl. R.H.O Kosasih No.90, Cibodas,
                            Kec. Solokanjeruk, Kabupaten Bandung, Jawa Barat 40376. SMK PGRI 35 Solokan Jeruk merupakan
                            sekolah yang memiliki 2 jurusan yakni jurusan Rekayasa Perangkat Lunak dan Teknik Komputer dan
                            Jaringan. Dikarenakan jumlah siswa yang terlalu banyak dan fasilitas kelas yang kurang, sekolah
                            membagi 2 sesi pembelajaran dengan sesi pertama dimulai dari pukul 07.00 – 13.00 WIB dan sesi 2
                            yang dimulai pukul 13.15 – 17.15 WIB.</p>
                    </div>
                    <h1 class="fw-bold">VISI DAN MISI</h1>
                    <div class="container">
                        <ul>
                            <li>
                                <h3 class="mb-2">Visi</h3>
                                <p class="fst-italic fw-bold text-center">"Membentuk Manusia yang unggul dalam Agama, Sains,
                                    Teknologi Komputer, Ekonomi dan Responsif"</p>
                            </li>
                            <li>
                                <h3 class="mb-2">Misi</h3>
                                <ol>
                                    <li>Memfasilitasi kegiatan-kegiatan pemahamandan Implementasi ajaran agama untuk
                                        mencerdaskan IQ, EQ, dan SQ.</li>
                                    <li>Menambah buku-buku sumber belajar sebagai referensi untuk menciptakan ilmuwan
                                        sejati.</li>
                                    <li>Menambah sarana pembelajaran berupa komputer untuk mencapai kemampuan teknik
                                        dibidang komputer dan jaringan.</li>
                                    <li>Mendorong, mengerahkan dan membimbing jiwa enterpreneurship atau jiwa wirausaha
                                        untuk menciptakan ekonomi baru untuk membangun bangsa.</li>
                                    <li>Mengembangkan dan mengaplikasikan sikap cepat tanggap terhadap permasalahan yang
                                        dihadapi oleh dirinya, keluarga, masyarakat, dan bangsa.</li>
                                </ol>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
