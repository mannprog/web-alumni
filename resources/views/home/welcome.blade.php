@extends('home.layouts.app')

@section('content')
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

                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bi bi-briefcase"></i></div>
                        <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                        <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero
                            tempore, cum soluta nobis est eligendi</p>
                    </div>

                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bi bi-card-checklist"></i></div>
                        <h4 class="title"><a href="">Magni Dolores</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia deserunt mollit anim id est laborum</p>
                    </div>

                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bi bi-binoculars"></i></div>
                        <h4 class="title"><a href="">Dolor Sitema</a></h4>
                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip ex ea commodo consequat tarad limino ata</p>
                    </div>

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
                @foreach ($berita as $brt)
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                        <div class="box">
                            <div class="icon"><a href="{{ route('detail-berita', $brt->slug) }}"><i
                                        class="bi bi-newspaper"></i></a></div>
                            <h4 class="title"><a href="{{ route('detail-berita', $brt->slug) }}">{{ $brt->judul }}</a>
                            </h4>
                            <p class="description">{!! $brt->kutipan !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="brt-btn-container text-center">
                <a class="brt-btn align-middle" href="{{ route('all-berita') }}">Lihat Selengkapnya</a>
            </div>
        </div>
    </section><!-- End Berita Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
        <div class="container">
            <div class="row" data-aos="zoom-in">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3 class="cta-title">Call To Action</h3>
                    <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                        dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#">Call To Action</a>
                </div>
            </div>

        </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Lowongan Section ======= -->
    <section id="lowongan" class="lowongan">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h3 class="section-title">Lowongan</h3>
                <p class="section-description">Berikut adalah daftar lowongan pekerjaan.</p>
            </div>

            <div class="row lowongan-container" data-aos="fade-up" data-aos-delay="200">
                @foreach ($loker as $lkr)
                    <div class="col-lg-4 col-md-6 lowongan-item">
                        <a href="#" class="card-link text-dark">
                            <div class="card shadow">
                                @if ($lkr->foto)
                                    <img class="card-img-top img-fluid" src="{{ asset('img/loker/' . $lkr->foto) }}"
                                        style="height: 150px">
                                @else
                                    <img class="card-img-top img-fluid" src="{{ asset('img/foto/' . $lkr->user->foto) }}"
                                        style="height: 150px">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold">{{ $lkr->nama }}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">{{ $lkr->user->name }}</h6>
                                    @if ($lkr->is_active === 0)
                                        <span class="badge badge-pill badge-primary mb-2">Dibuka</span>
                                    @else
                                        <span class="badge badge-pill badge-danger mb-2">Ditutup</span>
                                    @endif
                                    <p class="card-text"><i class="fas fa-fw fa-clock"></i>
                                        {{ \Carbon\Carbon::parse($lkr->tanggal_mulai)->format('d M Y') }} -
                                        {{ \Carbon\Carbon::parse($lkr->tanggal_akhir)->format('d M Y') }}</p>
                                    <p class="card-text"><i class="fas fa-fw fa-map-marker-alt"></i> {{ $lkr->lokasi }}
                                    </p>
                                </div>
                                <div class="card-footer text-muted">
                                    <i class="fas fa-fw fa-history"></i> Diperbarui pada
                                    {{ \Carbon\Carbon::parse($lkr->updated_at)->format('d M Y H:i:s') }}
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Lowongan Section -->

    <!-- ======= Alumni Section ======= -->
    <section id="alumni">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h3 class="section-title">Alumni</h3>
                <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                    accusantium doloremque</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="pic"><img src="assets/img/alumni-1.jpg" alt=""></div>
                        <h4>Walter White</h4>
                        <span>Chief Executive Officer</span>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="pic"><img src="assets/img/alumni-2.jpg" alt=""></div>
                        <h4>Sarah Jhinson</h4>
                        <span>Product Manager</span>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <div class="pic"><img src="assets/img/alumni-3.jpg" alt=""></div>
                        <h4>William Anderson</h4>
                        <span>CTO</span>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="pic"><img src="assets/img/alumni-4.jpg" alt=""></div>
                        <h4>Amanda Jepson</h4>
                        <span>Accountant</span>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Alumni Section -->

    <!-- ======= Kontak Section ======= -->
    <section id="kontak">
        <div class="container">
            <div class="section-header">
                <h3 class="section-title">Kontak Kami</h3>
                <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                    accusantium doloremque</p>
            </div>
        </div>

        <!-- Uncomment below if you wan to use dynamic maps -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452"
            width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

        <div class="container mt-5">
            <div class="row justify-content-center">

                <div class="col-lg-3 col-md-4">

                    <div class="info">
                        <div>
                            <i class="bi bi-geo-alt"></i>
                            <p>A108 Adam Street<br>New York, NY 535022</p>
                        </div>

                        <div>
                            <i class="bi bi-envelope"></i>
                            <p>info@example.com</p>
                        </div>

                        <div>
                            <i class="bi bi-phone"></i>
                            <p>+1 5589 55488 55s</p>
                        </div>
                    </div>

                    <div class="social-links">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>

                </div>

                <div class="col-lg-5 col-md-8">
                    <div class="form">
                        <form action="forms/kontak.php" method="post" role="form" class="php-email-form">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Kontak Section -->
@endsection
