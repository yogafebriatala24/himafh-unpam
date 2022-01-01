<header id="header" class="fixed-top d-flex align-items-center">
    <div
        class="
                    container
                    d-flex
                    align-items-center
                    justify-content-between
                ">
        <div class="logo">
            <a href="index.html">
                <img src="{{ asset('images/logo.png') }}" alt="" /> </a>Hima FH Unpam
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li>
                    <a class="nav-link scrollto active" href="{{ route('depan') }}">Home</a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="#services">Kandidat</a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="#portfolio">Quick Count</a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="#team">Tulisan</a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="#pricing">Tentang Kami</a>
                </li>

                <li>
                    <a class="getstarted scrollto" href="{{ route('login') }}">Login</a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
    </div>
</header>
