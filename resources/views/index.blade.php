<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta property="og:site_name" content="https://himafhunpam.com/">
    <meta property="og:title" content="Himpunan Mahasiswa Fakultas Hukum Universitas Pamulang 2022" />
    <meta property="og:description" content="Himpunan Mahasiswa Fakultas Hukum Universitas Pamulang 2022" />
    <Meta Content='Himpunan Mahasiswa Hukum Universitas Pamulang' Name='description'/>
    <meta property="og:image:type" content="image">
    <!-- Size of image. Any size up to 300. Anything above 300px will not work in WhatsApp -->
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://himafhunpam.com/images/logo.png">
    <meta property="og:image" itemprop="image" content="https://himafhunpam.com/images/logo.png">
    <meta property="og:updated_time" content="1440432930" />
    <title>Hima FH Unpam</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    {{-- Styling --}}
    @include('includes.front.style')
</head>

<body>
    <link itemprop="thumbnailUrl" href="url_gambar"> <span itemprop="thumbnail" itemscope itemtype="https://himafhunpam.com/images/logo.png"> 
    <link itemprop="url" href="https://himafhunpam.com/images/logo.png"> </span>
    @include('includes.front.navbar')
    <section id="hero" class="d-flex align-items-center mt-5">
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
                    <div data-aos="fade-up" data-aos-delay="500">
                        <a href="{{ route('login') }}" class="btn-get-started scrollto">Login</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                    <img src="{{ asset('images/banner2.png') }}" class="img-fluid animated" alt="" />
                </div>
            </div>
        </div>
    </section>
    {{-- Konten --}}
    <main id="main">
        {{-- Calon --}}
        <section id="calon" class="team section-bg">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Kandidat</h2>
                    <p>Ayo pilih kandidat terbaikmu</p>
                </div>

                <div class="row justify-content-center">
                    @foreach ($paslon as $item)
                        <div class="col-9 col-lg-4 d-flex align-items-stretch">
                            <div class="member" data-aos="fade-up" data-aos-delay="100">
                                <img src="{{ asset('/storage/' . $item->foto) }}"
                                                    class="img-fluid" alt="" />
                                <div class="row">
                                    <div class="col">
                                        <div class="member-info">
                                            <h6>{{ $item->ketua->user->name }}</h6>
                                            <span>Calon Ketua Umum</span>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="member-info">
                                            <h6>{{ $item->wakil->user->name }}</h6>
                                            <span>Calon Ketua Umum</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 mb-2">
                                    <a href="{{ route('profile', $item->id) }}" class="btn mx-2 mt-1 py-2">Profil
                                        Kandidat 0{{ $item->nomor }}</a>
                                </div>

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        {{-- Quotes --}}
        <section id="quotes" class="testimonials section-bg">
            <div class="container">
                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ asset('frontend/home/assets/img/quotes/gusdur.jpg') }}"
                                        class="testimonial-img" alt="" />
                                    <h3>Abdurahman Wahid</h3>
                                    <h4>Presiden Indonesia ke-4</h4>
                                    <p>
                                        <i
                                            class="
                                                    bx
                                                    bxs-quote-alt-left
                                                    quote-icon-left
                                                "></i>
                                        Demokrasi harus berlandaskan kedaulatan hukum dan persamaan setiap warga negara
                                        tenpa mebedakan latar belakang ras, suku agama dan asal muasal, di
                                        muka-undang-undang.
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

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ asset('frontend/home/assets/img/quotes/artidjo.jpg') }}"
                                        class="testimonial-img" alt="" />
                                    <h3>Artidjo Alkostar</h3>
                                    <h4>Hakim Agung</h4>
                                    <p>
                                        <i
                                            class="
                                                    bx
                                                    bxs-quote-alt-left
                                                    quote-icon-left
                                                "></i>
                                        Negara kita jangan kumuh dengan korupsi. Apapun yang dapat kita perbuat, ya kita
                                        perbuat. Kita cinta negeri ini. Suatu saat Republik ini akan bebas dari korupsi
                                        tapi harus bertahap
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

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ asset('frontend/home/assets/img/quotes/soekarno.jpg') }}"
                                        class="testimonial-img" alt="" />
                                    <h3>Ir. Soekarno</h3>
                                    <h4>Presiden Indonesia ke-1</h4>
                                    <p>
                                        <i
                                            class="
                                                    bx
                                                    bxs-quote-alt-left
                                                    quote-icon-left
                                                "></i>
                                        Belajar tanpa berpikir itu tidaklah berguna, berpikir tanpa belajar itu
                                        sangatlah berbahaya.
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

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ asset('frontend/home/assets/img/quotes/hatta.jpg') }}"
                                        class="testimonial-img" alt="" />
                                    <h3>Mohammad Hatta</h3>
                                    <h4>Wakil Presiden Indonesia ke-1</h4>
                                    <p>
                                        <i
                                            class="
                                                    bx
                                                    bxs-quote-alt-left
                                                    quote-icon-left
                                                "></i>
                                        Indonesia merdeka bukan tujuan akhir kita. Indonesia merdeka hanya syarat untuk
                                        bisa mencapai kebahagiaan dan kemakmuran rakyat.
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
                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ asset('frontend/home/assets/img/quotes/najwa.png') }}"
                                        class="testimonial-img" alt="" />
                                    <h3>Najwa Shihab</h3>
                                    <h4>Presenter Berita, Jurnalis Indonesia</h4>
                                    <p>
                                        <i
                                            class="
                                                    bx
                                                    bxs-quote-alt-left
                                                    quote-icon-left
                                                "></i>
                                        Pemuda hari ini harus turun tangan, berkarya nyata menjawab semesta Indonesia.
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
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        {{-- Pertanyaan --}}
        <section id="pertanyaan" class="faq">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Q & A</h2>
                </div>
                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>
                            Siapa saja sih yang bisa memilih calon ketua dan wakil ketua umum Hima FH?
                        </h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Mahasiswa reguler A, B, C, dan CK yang masuk ke dalam Daftar Pemilih Tetap (DPT) mempunyai
                            hak untuk memilih. Diambil dua orang untuk delegasi dari setiap kelas.
                        </p>
                    </div>
                </div>
                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>
                            Kapan sih Hima FH open recruitment?
                        </h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Untuk open recruitment akan kami infokan di sosial media kami, jangan lupa untuk ikuti ya
                            supaya tidak ketinggalan info.
                        </p>
                    </div>
                </div>
                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>
                            Kapan sih pemilihan raya Hima FH dilaksanakan?
                        </h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Untuk pemilihan dilaksanakan pada tanggal 17-19 Januari 2021.
                        </p>
                    </div>
                </div>
                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>
                            Gimana sih cara loginnya?
                        </h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Untuk login silahkan menonton video tutorial di youtube kami.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Contact Section ======= -->
        <section id="kontak" class="contact">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Kontak Kami</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="contact-about">
                            <h3>Sosial Media</h3>
                            <div class="social-links">
                                <a href="https://twitter.com/HimaFhu" class="twitter"><i
                                        class="bi bi-twitter"></i></a>
                                <a href="https://instagram.com/himafh_unpam" class="instagram"><i
                                        class="bi bi-instagram"></i></a>
                                <a href="https://www.youtube.com/channel/UCzTJ2Mnzl1Hc-7KR7u6itcg" class="youtube"><i
                                    class="bi bi-youtube"></i></a>
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
    <script src="{{ asset('frontend/home/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('frontend/home/assets/js/main.js') }}"></script>
</body>

</html>
