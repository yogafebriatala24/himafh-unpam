<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Profil Kandidat</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <link href="{{ asset('NiceAdmin/assets/img/favicon.png') }}" rel="icon" />
    @include('includes.front.style')
</head>

<body>
    {{-- header --}}
    @include('includes.front.navbar')
    {{-- Content --}}
    <main id="main">
        <section class="section profile container">
            <div class="row">
                <div class="col-xl-4 pt-5">
                    <div class="card">
                        <div
                            class="
                                    card-body
                                    profile-card
                                    pt-4
                                    d-flex
                                    flex-column
                                    align-items-center
                                ">
                            <img src="../../images/profile-img.jpg" alt="Profile" class="rounded-circle" />
                            <div class="pt-2 text-center">
                                <h2>Kevin Anderson</h2>
                                <h3>Web Designer</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8 pt-5">
                    <div class="card">
                        <div class="card-body pt-5">
                            <h5 class="card-title">About</h5>
                            <p class="small fst-italic">
                                Sunt est soluta temporibus
                                accusantium neque nam maiores cumque
                                temporibus. Tempora libero non est
                                unde veniam est qui dolor. Ut sunt
                                iure rerum quae quisquam autem
                                eveniet perspiciatis odit. Fuga
                                sequi sed ea saepe at unde.
                            </p>

                            <h5 class="card-title">
                                Profile Details
                            </h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">
                                    Full Name
                                </div>
                                <div class="col-lg-9 col-md-8">
                                    Kevin Anderson
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">
                                    Company
                                </div>
                                <div class="col-lg-9 col-md-8">
                                    Lueilwitz, Wisoky and Leuschke
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">
                                    Job
                                </div>
                                <div class="col-lg-9 col-md-8">
                                    Web Designer
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">
                                    Country
                                </div>
                                <div class="col-lg-9 col-md-8">
                                    USA
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">
                                    Address
                                </div>
                                <div class="col-lg-9 col-md-8">
                                    A108 Adam Street, New York, NY
                                    535022
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">
                                    Phone
                                </div>
                                <div class="col-lg-9 col-md-8">
                                    (436) 486-3538 x29071
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">
                                    Email
                                </div>
                                <div class="col-lg-9 col-md-8">
                                    k.anderson@example.com
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Bordered Tabs -->
                </div>
            </div>
            </div>
            </div>
        </section>
    </main>
    {{-- Footer --}}
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

    <script src="{{ asset('frontend/home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
