<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile border-bottom">
            <a href="{{ url('admin/edit_profile') }}" class="nav-link flex-column">
                <div class="nav-profile-image">
                    <img src="{{ !is_null(auth()->user()->foto) ? asset('profile/' . auth()->user()->foto) : asset('ui/images/user.jpg') }}"
                        alt="profile" />
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex ms-0 mb-3 flex-column">
                    <span class="font-weight-semibold mb-1 mt-2 text-center">{{ auth()->user()->name }}</span>
                    <small class="text-center">
                        Edit Profile
                    </small>
                </div>
            </a>
        </li>
        @if (auth()->user()->role == 1)
            <li class="pt-2 pb-1">
                <span class="nav-item-head">Main</span>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="mdi mdi-compass-outline menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="pt-2 pb-1">
                <span class="nav-item-head">Aksi</span>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('kenaikan.index') }}">
                    <i class="mdi mdi-chart-line menu-icon"></i>
                    <span class="menu-title">Kenaikan Kelas</span>
                </a>
            </li>
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
                    <i class="mdi mdi-book-open-variant menu-icon"></i>
                    <span class="menu-title">Data Mata Pelajaran</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('walas.index') }}">
                    <i class="mdi mdi-teach menu-icon"></i>
                    <span class="menu-title">Data Wali Kelas</span>
                </a>
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
                <a class="nav-link" href="{{ route('pengguna.index') }}">
                    <i class="mdi mdi-account-group menu-icon"></i>
                    <span class="menu-title">Data Pengguna</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('guru_mapel.index') }}">
                    <i class="mdi mdi-account-switch menu-icon"></i>
                    <span class="menu-title">Data Guru Mapel</span>
                </a>
            </li>
            <li class="pt-2 pb-1">
                <span class="nav-item-head">Secondary Menu</span>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('pengaturan') }}">
                    <i class="mdi mdi-settings menu-icon"></i>
                    <span class="menu-title">Pengaturan Sistem</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('arsip.index') }}">
                    <i class="mdi mdi-archive menu-icon"></i>
                    <span class="menu-title">Arsip Data</span>
                </a>
            </li>
        @endif

        @if (auth()->user()->role == 2)
            <li class="pt-2 pb-1">
                <span class="nav-item-head">Main</span>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="mdi mdi-compass-outline menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
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
            <li class="nav-item">
                <a class="nav-link" href="{{ route('siswa.index') }}">
                    <i class="mdi mdi-school menu-icon"></i>
                    <span class="menu-title">Data Siswa</span>
                </a>

            </li>
        @endif
        @if (auth()->user()->role == 3)
            <li class="pt-2 pb-1">
                <span class="nav-item-head">Main</span>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="mdi mdi-compass-outline menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="pt-2 pb-1">
                <span class="nav-item-head">Kelola Data</span>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('nilai.index') }}">
                    <i class="mdi mdi-school menu-icon"></i>
                    <span class="menu-title">Input Nilai Siswa</span>
                </a>

            </li>
        @endif

        @if (auth()->user()->role == 0)
            <li class="pt-2 pb-1">
                <span class="nav-item-head">Main</span>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('mysiswa.index') . '?mod=' }}">
                    <i class="mdi mdi-compass-outline menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('mysiswa.index') . '?mod=nilai' }}">
                    <i class="mdi mdi-database menu-icon"></i>
                    <span class="menu-title">Lihat Nilai</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('mysiswa.index') . '?mod=raport' }}">
                    <i class="mdi mdi-book menu-icon"></i>
                    <span class="menu-title">Raport</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#nilai" aria-expanded="false"
                    aria-controls="nilai">
                    <i class="mdi mdi-school menu-icon"></i>
                    <span class="menu-title">Data Profile</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="nilai">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('mysiswa.index') . '?mod=profile' }}">Lihat Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('mysiswa.edit', auth()->user()->id_join) }}">Edit
                                Profile
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        @endif

    </ul>
</nav>
