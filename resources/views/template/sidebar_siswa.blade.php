<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile border-bottom">
            <a href="#" class="nav-link flex-column">
                <div class="nav-profile-image">
                    <img src="{{ asset('ui') }}/images/faces/face1.jpg" alt="profile" />
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex ms-0 mb-3 flex-column">
                    <span class="font-weight-semibold mb-1 mt-2 text-center">Antonio Olson</span>
                    <span class="text-secondary icon-sm text-center">$3499.00</span>
                </div>
            </a>
        </li>
        <li class="pt-2 pb-1">
            <span class="nav-item-head">Main</span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ '' }}">
                <i class="mdi mdi-compass-outline menu-icon"></i>
                <span class="menu-title">Home</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('kelas.index') }}">
                <i class="mdi mdi-school menu-icon"></i>
                <span class="menu-title">Lihat Raport</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('walas.index') }}">
                <i class="mdi mdi-school menu-icon"></i>
                <span class="menu-title">Lihat Nilai</span>
            </a>
        </li>
    </ul>
</nav>
