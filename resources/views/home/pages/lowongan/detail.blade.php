@extends('home.pages.layout')

@section('content')
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Detail Berita</h2>
                <ol>
                    <li><a href="{{ route('homepage') }}"><i class="bi bi-house-fill"></i> Beranda</a></li>
                    <li><a href="{{ route('all-berita') }}">Berita</a></li>
                    <li>Detail Berita</li>
                </ol>
            </div>

        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="lowongan-details" class="lowongan-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="lowongan-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="assets/img/lowongan/lowongan-details-1.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="assets/img/lowongan/lowongan-details-2.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="assets/img/lowongan/lowongan-details-3.jpg" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="lowongan-info">
                        <h3>Project information</h3>
                        <ul>
                            <li><strong>Category</strong>: Web design</li>
                            <li><strong>Client</strong>: ASU Company</li>
                            <li><strong>Project date</strong>: 01 March, 2020</li>
                            <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
                        </ul>
                    </div>
                    <div class="lowongan-description">
                        <h2>This is an example of lowongan detail</h2>
                        <p>
                            Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia
                            quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim.
                            Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla
                            at esse enim cum deserunt eius.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End lowongan Details Section -->
@endsection
