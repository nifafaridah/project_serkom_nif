<nav class="pc-sidebar">
  <div class="navbar-wrapper">

    <!-- LOGO / HEADER -->
    <div class="m-header">

      <a href="{{ url('/') }}"
         class="b-brand text-primary"
         style="
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
         ">

        <!-- LOGO SEKOLAH -->
        <img
          src="{{ asset('uploads/logo.png') }}"
          alt="Logo SDN CITATAH"
          style="
            width: 42px;
            height: 42px;
            object-fit: contain;
          "
        >

        <!-- NAMA SEKOLAH -->
        <span style="
          font-size: 20px;
          font-weight: 700;
          color: #1683ff;
          white-space: nowrap;
        ">
          SDN CITATAH
        </span>

      </a>

    </div>


    <!-- NAVIGATION MENU -->
    <div class="navbar-content">
      <ul class="pc-navbar">

        <!-- DASHBOARD -->
        <li class="pc-item {{ Request::is('dashboard*') || Request::is('/') ? 'active' : '' }}">
          <a href="{{ route('dashboard') }}" class="pc-link">
            <span class="pc-micon">
              <i class="ti ti-dashboard"></i>
            </span>
            <span class="pc-mtext">
              Dashboard
            </span>
          </a>
        </li>


        <!-- KELOLA DATA SEKOLAH -->
        <li class="pc-caption">
          <label>Data Sekolah</label>
        </li>


        <!-- PROFIL SEKOLAH -->
        <li class="pc-item {{ Request::is('profil-sekolah*') ? 'active' : '' }}">
          <a href="{{ route('profil-sekolah.index') }}" class="pc-link">
            <span class="pc-micon">
              <i class="ti ti-school"></i>
            </span>
            <span class="pc-mtext">
              Profil Sekolah
            </span>
          </a>
        </li>


        <!-- GURU -->
        <li class="pc-item {{ Request::is('guru*') ? 'active' : '' }}">
          <a href="{{ url('/guru') }}" class="pc-link">
            <span class="pc-micon">
              <i class="ti ti-user-check"></i>
            </span>
            <span class="pc-mtext">
              Guru
            </span>
          </a>
        </li>


        <!-- SISWA -->
        <li class="pc-item {{ Request::is('siswa*') ? 'active' : '' }}">
          <a href="{{ url('/siswa') }}" class="pc-link">
            <span class="pc-micon">
              <i class="ti ti-users"></i>
            </span>
            <span class="pc-mtext">
              Siswa
            </span>
          </a>
        </li>


        <!-- EKSTRAKURIKULER -->
        <li class="pc-item {{ Request::is('ekstrakurikuler*') ? 'active' : '' }}">
          <a href="{{ url('/ekstrakurikuler') }}" class="pc-link">
            <span class="pc-micon">
              <i class="ti ti-activity"></i>
            </span>
            <span class="pc-mtext">
              Ekstrakurikuler
            </span>
          </a>
        </li>


        <!-- PRESTASI -->
        <li class="pc-item {{ Request::is('prestasi*') ? 'active' : '' }}">
          <a href="{{ route('prestasi.index') }}" class="pc-link">
            <span class="pc-micon">
              <i class="ti ti-trophy"></i>
            </span>
            <span class="pc-mtext">
              Prestasi
            </span>
          </a>
        </li>


        <!-- MEDIA & INFORMASI -->
        <li class="pc-caption">
          <label>Informasi</label>
        </li>


        <!-- BERITA -->
        <li class="pc-item {{ request()->routeIs('berita.*') ? 'active' : '' }}">
          <a href="{{ route('berita.index') }}" class="pc-link">
            <span class="pc-micon">
              <i class="ti ti-news"></i>
            </span>
            <span class="pc-mtext">
              Berita
            </span>
          </a>
        </li>


        <!-- PENGUMUMAN -->
        <li class="pc-item {{ Request::is('pengumuman*') ? 'active' : '' }}">
          <a href="{{ url('pengumuman') }}" class="pc-link">
            <span class="pc-micon">
              <i class="ti ti-bell"></i>
            </span>
            <span class="pc-mtext">
              Pengumuman
            </span>
          </a>
        </li>


        <!-- GALERI -->
        <li class="pc-item {{ Request::is('galeri*') ? 'active' : '' }}">
          <a href="{{ url('/galeri') }}" class="pc-link">
            <span class="pc-micon">
              <i class="ti ti-photo"></i>
            </span>
            <span class="pc-mtext">
              Galeri
            </span>
          </a>
        </li>


        <!-- PENGATURAN SYSTEM -->
        <li class="pc-caption">
          <label>System</label>
        </li>


        <!-- KELOLA USER -->
        <li class="pc-item {{ Request::is('user*') ? 'active' : '' }}">
          <a href="{{ url('/user') }}" class="pc-link">
            <span class="pc-micon">
              <i class="ti ti-settings"></i>
            </span>
            <span class="pc-mtext">
              Kelola User
            </span>
          </a>
        </li>


        <!-- LOGOUT -->
        <li class="pc-item">
          <form action="{{ route('logout') }}"
                method="POST"
                style="margin: 0;">

            @csrf

            <button type="submit"
                    class="pc-link"
                    style="
                      border: none;
                      background: none;
                      width: 100%;
                      text-align: left;
                    ">

              <span class="pc-micon">
                <i class="ti ti-logout"></i>
              </span>

              <span class="pc-mtext">
                Logout
              </span>

            </button>

          </form>
        </li>

      </ul>
    </div>

  </div>
</nav>