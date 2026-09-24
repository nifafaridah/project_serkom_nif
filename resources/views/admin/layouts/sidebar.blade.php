<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <!-- LOGO / HEADER -->
    <div class="m-header">
      <a href="{{ url('/') }}" class="b-brand text-primary">
        <img src="{{ asset('assets/images/logo-dark.svg') }}" alt="logo" class="img-fluid logo-lg">
      </a>
    </div>

    <!-- NAVIGATION MENU -->
    <div class="navbar-content">
      <ul class="pc-navbar">

        <!-- DASHBOARD -->
        <li class="pc-item {{ Request::is('dashboard*') || Request::is('/') ? 'active' : '' }}">
          <a href="{{ url('/') }}" class="pc-link">
            <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
            <span class="pc-mtext">Dashboard</span>
          </a>
        </li>

        <!-- KELOLA DATA SEKOLAH -->
        <li class="pc-caption">
          <label>Data Sekolah</label>
        </li>

        <li class="pc-item {{ Request::is('profil-sekolah*') ? 'active' : '' }}">
          <a href="{{ route('profil-sekolah') }}" class="pc-link">
            <span class="pc-micon"><i class="ti ti-school"></i></span>
            <span class="pc-mtext">Profil Sekolah</span>
          </a>
        </li>

        <li class="pc-item {{ Request::is('guru*') ? 'active' : '' }}">
          <a href="{{ url('/guru') }}" class="pc-link">
            <span class="pc-micon"><i class="ti ti-user-check"></i></span>
            <span class="pc-mtext">Guru</span>
          </a>
        </li>

        <li class="pc-item {{ Request::is('siswa*') ? 'active' : '' }}">
          <a href="{{ url('/siswa') }}" class="pc-link">
            <span class="pc-micon"><i class="ti ti-users"></i></span>
            <span class="pc-mtext">Siswa</span>
          </a>
        </li>

        <li class="pc-item {{ Request::is('ekstrakurikuler*') ? 'active' : '' }}">
          <a href="{{ url('/ekstrakurikuler') }}" class="pc-link">
            <span class="pc-micon"><i class="ti ti-activity"></i></span>
            <span class="pc-mtext">Ekstrakulikuler</span>
          </a>
        </li>

        <!-- MEDIA & INFORMASI -->
        <li class="pc-caption">
          <label>Informasi</label>
        </li>

        <li class="pc-item {{ Request::is('berita*') ? 'active' : '' }}">
          <a href="{{ url('/berita') }}" class="pc-link">
            <span class="pc-micon"><i class="ti ti-news"></i></span>
            <span class="pc-mtext">Berita</span>
          </a>
        </li>

        <li class="pc-item {{ Request::is('pengumuman*') ? 'active' : ''}}">
            <a href="{{ url('pengumuman')}}" class="pc-link">
                <span class="pc-micon"><i class="ti ti-bell"></i></span>
                <span class="pc-mtext">Pengumuman</span>
            </a>
        </li>

        <li class="pc-item {{ Request::is('galeri*') ? 'active' : '' }}">
          <a href="{{ url('/galeri') }}" class="pc-link">
            <span class="pc-micon"><i class="ti ti-photo"></i></span>
            <span class="pc-mtext">Galeri</span>
          </a>
        </li>

        <!-- PENGATURAN SYSTEM -->
        <li class="pc-caption">
          <label>System</label>
        </li>

        <li class="pc-item {{ Request::is('user*') ? 'active' : '' }}">
          <a href="{{ url('/user') }}" class="pc-link">
            <span class="pc-micon"><i class="ti ti-settings"></i></span>
            <span class="pc-mtext">Kelola User</span>
          </a>
        </li>

      </ul>
    </div>
  </div>
</nav>