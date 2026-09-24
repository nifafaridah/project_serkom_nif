<nav class="pc-sidebar">
    <div class="navbar-wrapper">

        {{-- LOGO / HEADER --}}
        <div class="m-header">
            <a href="{{ url('/') }}" class="b-brand text-primary">
                <img src="{{ asset('assets/images/logo-dark.svg') }}"
                     class="img-fluid logo-lg"
                     alt="logo">
            </a>
        </div>

        {{-- MENU --}}
        <div class="navbar-content">
            <ul class="pc-navbar">

                {{-- DASHBOARD --}}
                <li class="pc-item {{ request()->is('/') ? 'active' : '' }}">
                    <a href="{{ url('/') }}" class="pc-link">
                        <span class="pc-micon">
                            <i class="ti ti-dashboard"></i>
                        </span>
                        <span class="pc-mtext">Dashboard</span>
                    </a>
                </li>

                {{-- PROFIL SEKOLAH --}}
                <li class="pc-item {{ request()->routeIs('profil-sekolah') ? 'active' : '' }}">
                    <a href="{{ route('profil-sekolah') }}" class="pc-link">
                        <span class="pc-micon">
                            <i class="ti ti-school"></i>
                        </span>
                        <span class="pc-mtext">Profil_Sekolah</span>
                    </a>
                </li>

                {{-- UI COMPONENTS --}}
                <li class="pc-item pc-caption">
                    <label>UI Components</label>
                    <i class="ti ti-dashboard"></i>
                </li>

                {{-- GURU --}}
                <li class="pc-item">
                    <a href="#" class="pc-link">
                        <span class="pc-micon">
                            <i class="ti ti-typography"></i>
                        </span>
                        <span class="pc-mtext">Guru</span>
                    </a>
                </li>

                {{-- SISWA --}}
                <li class="pc-item">
                    <a href="#" class="pc-link">
                        <span class="pc-micon">
                            <i class="ti ti-color-swatch"></i>
                        </span>
                        <span class="pc-mtext">Siswa</span>
                    </a>
                </li>

                {{-- USER --}}
                <li class="pc-item">
                    <a href="#" class="pc-link">
                        <span class="pc-micon">
                            <i class="ti ti-plant-2"></i>
                        </span>
                        <span class="pc-mtext">User</span>
                    </a>
                </li>

                {{-- GALERI --}}
                <li class="pc-item">
                    <a href="/galeri" class="pc-link">
                        <span class="pc-micon">
                            <i class="ti ti-photo"></i>
                        </span>
                        <span class="pc-mtext">Galeri</span>
                    </a>
                </li>

                {{-- PAGES --}}
                <li class="pc-item pc-caption">
                    <label>Pages</label>
                    <i class="ti ti-news"></i>
                </li>

                {{-- LOGIN --}}
                <li class="pc-item">
                    <a href="{{ url('/login') }}" class="pc-link">
                        <span class="pc-micon">
                            <i class="ti ti-lock"></i>
                        </span>
                        <span class="pc-mtext">Login</span>
                    </a>
                </li>

                {{-- REGISTER --}}
                <li class="pc-item">
                    <a href="#" class="pc-link">
                        <span class="pc-micon">
                            <i class="ti ti-user-plus"></i>
                        </span>
                        <span class="pc-mtext">Register</span>
                    </a>
                </li>

                {{-- OTHER --}}
                <li class="pc-item pc-caption">
                    <label>Other</label>
                    <i class="ti ti-brand-chrome"></i>
                </li>

                {{-- MENU LEVELS --}}
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i class="ti ti-menu"></i>
                        </span>

                        <span class="pc-mtext">Menu levels</span>

                        <span class="pc-arrow">
                            <i data-feather="chevron-right"></i>
                        </span>
                    </a>

                    <ul class="pc-submenu">

                        <li class="pc-item">
                            <a class="pc-link" href="#!">
                                Level 2.1
                            </a>
                        </li>

                        <li class="pc-item pc-hasmenu">
                            <a href="#!" class="pc-link">
                                Level 2.2

                                <span class="pc-arrow">
                                    <i data-feather="chevron-right"></i>
                                </span>
                            </a>

                            <ul class="pc-submenu">

                                <li class="pc-item">
                                    <a class="pc-link" href="#!">
                                        Level 3.1
                                    </a>
                                </li>

                                <li class="pc-item">
                                    <a class="pc-link" href="#!">
                                        Level 3.2
                                    </a>
                                </li>

                            </ul>
                        </li>

                    </ul>
                </li>

                {{-- EKSTRAKULIKULER --}}
                <li class="pc-item">
                    <a href="#" class="pc-link">

                        <span class="pc-micon">
                            <i class="ti ti-brand-chrome"></i>
                        </span>

                        <span class="pc-mtext">
                            Ekstrakulikuler
                        </span>

                    </a>
                </li>

            </ul>

            {{-- CARD BAWAH --}}
            <div class="card text-center">

                <div class="card-body">

                    <img src="{{ asset('assets/images/img-navbar-card.png') }}"
                         alt="images"
                         class="img-fluid mb-2">

                    <h5>Admin Sekolah</h5>

                    <p>
                        Kelola data sekolah dengan mudah
                    </p>

                </div>

            </div>

        </div>

    </div>
</nav>