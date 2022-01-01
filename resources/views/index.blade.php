<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Hima FH Unpam</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    @include('includes.front.style')
</head>

<body>
    <!-- ======= Header ======= -->
    @include('includes.front.navbar')
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div
                    class="
                            col-lg-6
                            pt-5 pt-lg-0
                            order-2 order-lg-1
                            d-flex
                            flex-column
                            justify-content-center
                        ">
                    <h1 data-aos="fade-up">
                        Sistem Informasi E-Voting Pemilihan Raya Himpunan
                        Mahasiswa Fakultas Hukum Universitas Pamulang
                    </h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">
                        Selamat datang di website resmi Himpunan Mahasiswa
                        Fakultas Hukum Universitas Pamulang.
                    </h2>
                    <div data-aos="fade-up" data-aos-delay="800">
                        <a href="#team" class="btn-get-started scrollto">Lihat Kandidat</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                    <img src="{{ asset('images/banner2.png') }}" class="img-fluid animated" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Kandidat</h2>
                    <p>Ayo pilih kandidat terbaikmu</p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-6 col-lg-2 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ asset('frontend/home/assets/img/team/team-1.jpg') }}"
                                    class="img-fluid" alt="" />

                                <a href="{{ route('profile') }}" class="btn mt-1 py-2">Profil Kandidat</a>
                            </div>
                            <div class="member-info">
                                <h4>Walter }White</h4>
                                <span>Calon Ketua Umum <br>
                                    Paslon 1</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-lg-2 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ asset('frontend/home/assets/img/team/team-1.jpg') }}"
                                    class="img-fluid" alt="" />

                                <a href="profile.html" class="btn mt-1 py-2">Profil Kandidat</a>
                            </div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Calon Wakil Ketua Umum <br>
                                    Paslon 1</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ asset('frontend/home/assets/img/team/team-1.jpg') }}"
                                    class="img-fluid" alt="" />

                                <a href="profile.html" class="btn mt-1 py-2">Profil Kandidat</a>
                            </div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Calon Ketua Umum <br>
                                    Paslon 2</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ asset('frontend/home/assets/img/team/team-1.jpg') }}"
                                    class="img-fluid" alt="" />

                                <a href="profile.html" class="btn mt-1 py-2">Profil Kandidat</a>
                            </div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Calon Wakil Ketua Umum <br>
                                    Paslon 2</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ asset('frontend/home/assets/img/team/team-1.jpg') }}"
                                    class="img-fluid" alt="" />

                                <a href="profile.html" class="btn mt-1 py-2">Profil Kandidat</a>
                            </div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Calon Wakil Ketua Umum <br>
                                    Paslon 2</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ asset('frontend/home/assets/img/team/team-1.jpg') }}"
                                    class="img-fluid" alt="" />

                                <a href="profile.html" class="btn mt-1 py-2">Profil Kandidat</a>
                            </div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Calon Wakil Ketua Umum <br>
                                    Paslon 2</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Team Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container">
                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ asset('frontend/home/assets/img/quotes/gusdur.jpg') }}"
                                        class="testimonial-img" alt="" />
                                    <h2>Abdurahman Wahid</h2>
                                    <h4>Presiden Indonesia &amp; Ke-4</h4>
                                    <p>
                                        <i
                                            class="
                                                    bx
                                                    bxs-quote-alt-left
                                                    quote-icon-left
                                                "></i>
                                                Demokrasi harus berlandaskan kedaulatan hukum dan persamaan setiap warga negara tenpa mebedakan latar belakang ras, suku agama dan asal muasal, di muka-undang-undang.
                                        <i
                                            class="
                                                    bx
                                                    bxs-quote-alt-right
                                                    quote-icon-right
                                                "></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ asset('frontend/home/assets/img/testimonials/testimonials-2.jpg') }}"
                                        class="testimonial-img" alt="" />
                                    <h3>Sara Wilsson</h3>
                                    <h4>Designer</h4>
                                    <p>
                                        <i
                                            class="
                                                    bx
                                                    bxs-quote-alt-left
                                                    quote-icon-left
                                                "></i>
                                        Export tempor illum tamen malis
                                        malis eram quae irure esse labore
                                        quem cillum quid cillum eram malis
                                        quorum velit fore eram velit sunt
                                        aliqua noster fugiat irure amet
                                        legam anim culpa.
                                        <i
                                            class="
                                                    bx
                                                    bxs-quote-alt-right
                                                    quote-icon-right
                                                "></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ asset('frontend/home/assets/img/testimonials/testimonials-3.jpg') }}"
                                        class="testimonial-img" alt="" />
                                    <h3>Jena Karlis</h3>
                                    <h4>Store Owner</h4>
                                    <p>
                                        <i
                                            class="
                                                    bx
                                                    bxs-quote-alt-left
                                                    quote-icon-left
                                                "></i>
                                        Enim nisi quem export duis labore
                                        cillum quae magna enim sint quorum
                                        nulla quem veniam duis minim tempor
                                        labore quem eram duis noster aute
                                        amet eram fore quis sint minim.
                                        <i
                                            class="
                                                    bx
                                                    bxs-quote-alt-right
                                                    quote-icon-right
                                                "></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ asset('frontend/home/assets/img/testimonials/testimonials-4.jpg') }}"
                                        class="testimonial-img" alt="" />
                                    <h3>Matt Brandon</h3>
                                    <h4>Freelancer</h4>
                                    <p>
                                        <i
                                            class="
                                                    bx
                                                    bxs-quote-alt-left
                                                    quote-icon-left
                                                "></i>
                                        Fugiat enim eram quae cillum dolore
                                        dolor amet nulla culpa multos export
                                        minim fugiat minim velit minim dolor
                                        enim duis veniam ipsum anim magna
                                        sunt elit fore quem dolore labore
                                        illum veniam.
                                        <i
                                            class="
                                                    bx
                                                    bxs-quote-alt-right
                                                    quote-icon-right
                                                "></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ asset('frontend/home/assets/img/testimonials/testimonials-5.jpg') }}"
                                        class="testimonial-img" alt="" />
                                    <h3>John Larson</h3>
                                    <h4>Entrepreneur</h4>
                                    <p>
                                        <i
                                            class="
                                                    bx
                                                    bxs-quote-alt-left
                                                    quote-icon-left
                                                "></i>
                                        Quis quorum aliqua sint quem legam
                                        fore sunt eram irure aliqua veniam
                                        tempor noster veniam enim culpa
                                        labore duis sunt culpa nulla illum
                                        cillum fugiat legam esse veniam
                                        culpa fore nisi cillum quid.
                                        <i
                                            class="
                                                    bx
                                                    bxs-quote-alt-right
                                                    quote-icon-right
                                                "></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- End Testimonials Section -->

        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Frequently Asked Questions</h2>
                </div>

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>
                            Non consectetur a erat nam at lectus urna duis?
                        </h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Feugiat pretium nibh ipsum consequat. Tempus
                            iaculis urna id volutpat lacus laoreet non
                            curabitur gravida. Venenatis lectus magna
                            fringilla urna porttitor rhoncus dolor purus
                            non.
                        </p>
                    </div>
                </div>
                <!-- End F.A.Q Item-->

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>
                            Feugiat scelerisque varius morbi enim nunc
                            faucibus a pellentesque?
                        </h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Dolor sit amet consectetur adipiscing elit
                            pellentesque habitant morbi. Id interdum velit
                            laoreet id donec ultrices. Fringilla phasellus
                            faucibus scelerisque eleifend donec pretium. Est
                            pellentesque elit ullamcorper dignissim.
                        </p>
                    </div>
                </div>
                <!-- End F.A.Q Item-->

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>
                            Dolor sit amet consectetur adipiscing elit
                            pellentesque habitant morbi?
                        </h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Eleifend mi in nulla posuere sollicitudin
                            aliquam ultrices sagittis orci. Faucibus
                            pulvinar elementum integer enim. Sem nulla
                            pharetra diam sit amet nisl suscipit. Rutrum
                            tellus pellentesque eu tincidunt. Lectus urna
                            duis convallis convallis tellus.
                        </p>
                    </div>
                </div>
                <!-- End F.A.Q Item-->

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>
                            Ac odio tempor orci dapibus. Aliquam eleifend mi
                            in nulla?
                        </h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Aperiam itaque sit optio et deleniti eos nihil
                            quidem cumque. Voluptas dolorum accusantium sunt
                            sit enim. Provident consequuntur quam aut
                            reiciendis qui rerum dolorem sit odio. Repellat
                            assumenda soluta sunt pariatur error doloribus
                            fuga.
                        </p>
                    </div>
                </div>
                <!-- End F.A.Q Item-->

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>
                            Tempus quam pellentesque nec nam aliquam sem et
                            tortor consequat?
                        </h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Molestie a iaculis at erat pellentesque
                            adipiscing commodo. Dignissim suspendisse in est
                            ante in. Nunc vel risus commodo viverra maecenas
                            accumsan. Sit amet nisl suscipit adipiscing
                            bibendum est. Purus gravida quis blandit turpis
                            cursus in
                        </p>
                    </div>
                </div>
                <!-- End F.A.Q Item-->
            </div>
        </section>
        <!-- End F.A.Q Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Contact Us</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="contact-about">
                            <h3>Sosial Media</h3>
                            <div class="social-links">
                                <a href="https://twitter.com/HimaFhu" class="twitter"><i
                                        class="bi bi-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="https://instagram.com/himafh_unpam" class="instagram"><i
                                        class="bi bi-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-youtube"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="info">
                            <div>
                                <i class="ri-map-pin-line"></i>
                                <p>
                                    Jalan Raya Puspiptek No.46<br />
                                    Buara Serpong, Kota Tangerang Selatan,
                                    Banten 15310
                                </p>
                            </div>

                            <div>
                                <i class="ri-mail-send-line"></i>
                                <p>unpamhimafh@gmail.com</p>
                            </div>

                            <div>
                                <i class="ri-phone-line"></i>
                                <p>0812-1997-2916</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    required />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required />
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                    required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">
                                    Your message has been sent. Thank you!
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container-fluid">
            <div
                class="
                        row
                        border-top
                        justify-content-center
                        align-items-center
                        pt-4
                    ">
                <div class="col-auto text-gray-500 font-weight-light">
                    &copy; Copyright 2022 | Hima FH Unpam
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    {{-- <script src="{{asset('frontend/home/assets/vendor/purecounter/purecounter.js')}}"></script> --}}
    <script src="{{ asset('frontend/home/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('frontend/home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/home/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/home/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/home/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/home/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('frontend/home/assets/js/main.js') }}"></script>
</body>

</html>
