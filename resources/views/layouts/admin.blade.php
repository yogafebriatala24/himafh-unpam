<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title', 'Dashboard')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('includes.admin.style')
    @stack('style')
</head>

<body>

    <!-- ======= Header ======= -->
    @include('includes.admin.header')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('includes.admin.sidebar')
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>@yield('title', 'Dashboard')</h1>

        </div><!-- End Page Title -->

        <section class="section">
            @yield('content')
        </section>

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>HIMA FAKULTAS HUKUM UNIVERSITAS PAMULANG</span></strong>. All Rights Reserved
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('includes.admin.script')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <x-livewire-alert::scripts />
    <script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script>
    <x-livewire-alert::flash />

</body>

</html>
