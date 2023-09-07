<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-chevron-double-left"></span>
        </button>
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('ui') }}/images/logo-mini.svg"
                    alt="logo" /></a>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link text-uppercase" id="messageDropdown" href="#" data-bs-toggle="dropdown"
                    aria-expanded="false">SELAMAT DATANG DI STAMBUK -
                    <?php if (auth()->user()->role == 1) {
                        echo ' Super Admin ';
                    } elseif (auth()->user()->role == 2) {
                        echo ' Wali Kelas ';
                    } elseif (auth()->user()->role == 3) {
                        echo ' Guru Mata Pelajaran ';
                    } ?>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown d-none d-md-block">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <div class="nav-profile-text">Halo, {{ auth()->user()->name }} </div>
                </a>
                <div class="dropdown-menu center navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}">
                        <i class="mdi mdi-sign-out me-3"></i> logout </a>
                </div>
            </li>
            <li class="nav-item nav-logout d-none d-lg-block">
                <a class="nav-link" href="#">
                    <i class="mdi mdi-home-circle"></i>
                </a>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
