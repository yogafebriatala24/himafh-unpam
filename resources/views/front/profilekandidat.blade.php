<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Profil Kandidat</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    @include('includes.front.style')
</head>

<body>
    @include('includes.front.navbar')
    <main id="main">
        <section class="section profile container">
            <div class="row">
                <div class="col-xl-4 mt-5">
                    <div class="row">
                        <div class="col-xl-12">
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
                                        <h4>Kevin Anderson</h4>
                                        <h5>Calon Ketua Umum</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 mt-2">
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
                                        <h4>Kevin Anderson</h4>
                                        <h5>Calon Wakil Ketua Umum</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <div class="col-xl-8 pt-5">
                    <div class="card">
                        <div class="card-body pt-5">
                            <h5 class="card-title">Visi</h5>
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
                                Misi
                            </h5>
                            <p class="small fst-italic">
                                Sunt est soluta temporibus
                                accusantium neque nam maiores cumque
                                temporibus. Tempora libero non est
                                unde veniam est qui dolor. Ut sunt
                                iure rerum quae quisquam autem
                                eveniet perspiciatis odit. Fuga
                                sequi sed ea saepe at unde.
                            </p>
                            <div class="ratio ratio-16x9">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/apjNfkysjbM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>
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
