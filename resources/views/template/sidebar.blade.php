<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile border-bottom">
            <a href="#" class="nav-link flex-column">
                <div class="nav-profile-image">
                    <img src="{{ asset('ui') }}/images/faces/face1.jpg" alt="profile" />
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex ms-0 mb-3 flex-column">
                    <span class="font-weight-semibold mb-1 mt-2 text-center">{{ auth()->user()->name }}</span>
                    <span class="text-secondary icon-sm text-center">
                        <?php if (auth()->user()->role == 1) {
                            echo 'Super Admin';
                        } elseif (auth()->user()->role == 2) {
                            echo 'Wali Kelas';
                        } ?>
                    </span>
                </div>
            </a>
        </li>
        <li class="pt-2 pb-1">
            <span class="nav-item-head">Main</span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="mdi mdi-compass-outline menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>


        @if (auth()->user()->role == 1)
            <li class="pt-2 pb-1">
                <span class="nav-item-head">Kelola Data</span>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('kelas.index') }}">
                    <i class="mdi mdi-school menu-icon"></i>
                    <span class="menu-title">Data Kelas</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('siswa.index') }}">
                    <i class="mdi mdi-account-group-outline menu-icon"></i>
                    <span class="menu-title">Data Siswa</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('mapel.index') }}">
                    <i class="mdi mdi-account-group-outline menu-icon"></i>
                    <span class="menu-title">Data Mata Pelajaran</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('walas.index') }}">
                    <i class="mdi mdi-teach menu-icon"></i>
                    <span class="menu-title">Daftar Wali Kelas</span>
                </a>
            </li>
            <li class="pt-2 pb-1">
                <span class="nav-item-head">Kelola Data</span>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#nilai" aria-expanded="false"
                    aria-controls="nilai">
                    <i class="mdi mdi-book menu-icon"></i>
                    <span class="menu-title">Data Nilai</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="nilai">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('nilai.index') }}">Daftar Nilai</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('k_nilai.index') }}">Kriteria Nilai</a>
                        </li>
                    </ul>
                </div>
            </li>
        @endif

        @if (auth()->user()->role == 2)
            <li class="pt-2 pb-1">
                <span class="nav-item-head">Kelola Data</span>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#nilai" aria-expanded="false"
                    aria-controls="nilai">
                    <i class="mdi mdi-book menu-icon"></i>
                    <span class="menu-title">Data Nilai</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="nilai">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('nilai.index') }}">Daftar Nilai</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('k_nilai.index') }}">Kriteria Nilai</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('siswa.index') }}">
                    <i class="mdi mdi-school menu-icon"></i>
                    <span class="menu-title">Data Siswa</span>
                </a>
            </li>
        @endif
    </ul>
</nav>
