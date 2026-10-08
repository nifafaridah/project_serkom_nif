
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ $profil->nama_sekolah ?? 'SDN CITATAH' }}
    </title>
    <meta name="description"
          content="Website resmi {{ $profil->nama_sekolah ?? 'SDN CITATAH' }}">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            color: #1e293b;
            background: #ffffff;
        }

        a {
            text-decoration: none;
        }

        .text-primary-custom {
            color: #1769ff;
        }

        .btn-primary-custom {
            background: #1769ff;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            font-weight: 600;
        }

        .btn-primary-custom:hover {
            background: #0d55d8;
            color: white;
        }


        /* =========================
           NAVBAR
        ========================= */

        .navbar-school {
            background: white;
            min-height: 76px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.06);
            position: sticky;
            top: 0;
            z-index: 999;
        }

        .logo-school {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: #1769ff;

            display: flex;
            align-items: center;
            justify-content: center;

            color: white;
            font-size: 22px;
            padding:0;
            marggin:0;
            overflow:hidden;
        }

        .brand-name {
            color: #1769ff;
            font-size: 22px;
            font-weight: 700;
        }

        .navbar-school .nav-link {
            color: #334155;
            font-weight: 500;
            margin: 0 8px;
            transition: 0.3s;
        }

        .navbar-school .nav-link:hover,
        .navbar-school .nav-link.active {
            color: #1769ff;
        }


        /* =========================
           DROPDOWN
        ========================= */

        .navbar-school .dropdown-menu {
            border: none;
            border-radius: 12px;
            padding: 8px;
            margin-top: 10px;
            background: white;
            box-shadow: 0 8px 25px rgba(0,0,0,0.12);
        }

        .navbar-school .dropdown-item {
            color: #334155;
            font-weight: 500;
            padding: 10px 14px;
            border-radius: 8px;
            transition: 0.2s;
        }

        .navbar-school .dropdown-item:hover {
            background: #eaf2ff;
            color: #1769ff;
        }

        .navbar-school .dropdown-toggle::after {
            margin-left: 7px;
            vertical-align: middle;
        }

        .navbar-school .dropdown-item i {
            color: #1769ff;
        }


        /* =========================
           LOGIN
        ========================= */

        .login-button {
            background: #1769ff;
            color: white !important;
            padding: 11px 23px !important;
            border-radius: 8px;
            font-weight: 600 !important;
        }

        .login-button:hover {
            background: #0d55d8;
        }


        /* =========================
           HERO
        ========================= */

        .hero {
            background: linear-gradient(
                135deg,
                #eef6ff 0%,
                #ffffff 55%,
                #e6f0ff 100%
            );

            padding: 85px 0 80px;
        }

        .hero-small-title {
            color: #1769ff;
            font-size: 17px;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 15px;
        }

        .hero h1 {
            font-size: 58px;
            line-height: 1.05;
            font-weight: 800;
            color: #173f78;
            margin-bottom: 25px;
        }

        .hero h1 span {
            color: #1769ff;
        }

        .hero-description {
            color: #64748b;
            font-size: 17px;
            line-height: 1.8;
            max-width: 620px;
        }

        .hero-buttons {
            margin-top: 30px;
        }

        .hero-image-box {
            min-height: 400px;
            border-radius: 25px;
            background: #1769ff;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 25px;
            box-shadow: 0 20px 50px rgba(23,105,255,0.22);
        }

        .hero-image {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 18px;
        }

        .hero-no-image {
            text-align: center;
            color: white;
        }

        .hero-no-image i {
            font-size: 70px;
            margin-bottom: 20px;
        }

        .hero-no-image h3 {
            font-weight: 700;
        }


        /* =========================
           STATISTIK
        ========================= */

        .stats-section {
            padding: 55px 0;
            background: white;
        }

        .stat-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            text-align: center;

            box-shadow: 0 8px 25px rgba(0,0,0,0.07);

            height: 100%;
        }

        .stat-icon {
            width: 55px;
            height: 55px;
            background: #eaf2ff;
            color: #1769ff;

            border-radius: 12px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 25px;
            margin: 0 auto 15px;
        }

        .stat-number {
            color: #173f78;
            font-size: 30px;
            font-weight: 800;
        }

        .stat-title {
            color: #64748b;
        }


        /* =========================
           SECTION
        ========================= */

        .section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title .small-title {
            color: #1769ff;
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .section-title h2 {
            color: #173f78;
            font-size: 38px;
            font-weight: 800;
            margin-top: 8px;
        }

        .section-title p {
            color: #64748b;
            max-width: 700px;
            margin: 15px auto 0;
        }


        /* =========================
           PROFIL
        ========================= */

        #profil {
            background: #f8fbff;
        }

        .profile-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 20px;
        }

        .profile-placeholder {
            height: 400px;
            border-radius: 20px;
            background: #eaf2ff;

            display: flex;
            align-items: center;
            justify-content: center;

            color: #1769ff;
            font-size: 80px;
        }

        .profile-content h3 {
            color: #173f78;
            font-size: 32px;
            font-weight: 800;
        }

        .profile-content p {
            color: #64748b;
            line-height: 1.8;
        }

        .profile-info {
            margin-top: 25px;
        }

        .profile-info-item {
            margin-bottom: 15px;
        }

        .profile-info-item strong {
            color: #173f78;
        }

        .profile-info-item span {
            color: #64748b;
        }


        /* =========================
           VISI MISI
        ========================= */

        #visi-misi {
            background: white;
        }

        .visi-card,
        .misi-card {
            background: white;
            border-radius: 20px;
            padding: 35px;
            height: 100%;

            box-shadow: 0 8px 30px rgba(0,0,0,0.07);
            border: 1px solid #edf2f7;
        }

        .visi-icon,
        .misi-icon {
            width: 60px;
            height: 60px;
            border-radius: 15px;
            background: #eaf2ff;
            color: #1769ff;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 28px;
            margin-bottom: 20px;
        }

        .visi-card h4,
        .misi-card h4 {
            color: #173f78;
            font-weight: 800;
            margin-bottom: 18px;
        }

        .visi-text {
            color: #64748b;
            line-height: 1.9;
            font-size: 16px;
        }

        .misi-list {
            padding-left: 20px;
            margin-bottom: 0;
        }

        .misi-list li {
            color: #64748b;
            line-height: 1.8;
            margin-bottom: 12px;
        }


        /* =========================
           PENGUMUMAN
        ========================= */

        #pengumuman {
            background: #f8fbff;
        }

        .pengumuman-card {
            background: white;
            border-radius: 18px;
            padding: 30px 25px;
            height: 100%;

            box-shadow: 0 8px 25px rgba(0,0,0,0.06);

            transition: 0.3s;

            border-left: 5px solid #1769ff;
        }

        .pengumuman-card:hover {
            transform: translateY(-7px);

            box-shadow: 0 15px 35px rgba(0,0,0,0.10);
        }

        .pengumuman-icon {
            width: 60px;
            height: 60px;

            border-radius: 15px;

            background: #eaf2ff;
            color: #1769ff;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 28px;

            margin-bottom: 20px;
        }

        .pengumuman-card h4 {
            color: #173f78;
            font-weight: 800;

            margin-bottom: 12px;
        }

        .pengumuman-date {
            display: inline-block;

            background: #eaf2ff;
            color: #1769ff;

            padding: 7px 12px;

            border-radius: 8px;

            font-size: 13px;
            font-weight: 700;

            margin-bottom: 15px;
        }

        .pengumuman-card p {
            color: #64748b;
            line-height: 1.8;

            margin-bottom: 0;
        }

        .pengumuman-empty {
            background: white;

            border-radius: 18px;

            padding: 50px 20px;

            box-shadow: 0 8px 25px rgba(0,0,0,0.06);
        }

        .pengumuman-empty i {
            color: #1769ff;
            font-size: 55px;
        }


        /* =========================
           GURU
        ========================= */

        #guru {
            background: #f8fbff;
        }

        .guru-card {
            background: white;
            border-radius: 18px;
            overflow: hidden;
            height: 100%;

            box-shadow: 0 8px 25px rgba(0,0,0,0.07);

            transition: 0.3s;
        }

        .guru-card:hover {
            transform: translateY(-5px);
        }

        .guru-photo {
            width: 100%;
            height: 260px;
            object-fit: cover;
        }

        .guru-placeholder {
            height: 260px;
            background: #eaf2ff;

            display: flex;
            align-items: center;
            justify-content: center;

            color: #1769ff;
            font-size: 65px;
        }

        .guru-content {
            padding: 20px;
        }

        .guru-content h5 {
            color: #173f78;
            font-weight: 700;
            margin-bottom: 7px;
        }

        .guru-content p {
            color: #64748b;
            margin: 0;
        }


        /* =========================
           EKSTRAKURIKULER
        ========================= */

        #ekstrakurikuler {
            background: white;
        }

        .eskul-card {
            background: white;
            border-radius: 18px;
            overflow: hidden;
            height: 100%;

            box-shadow: 0 8px 25px rgba(0,0,0,0.07);

            transition: 0.3s;
        }

        .eskul-card:hover {
            transform: translateY(-7px);

            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        }

        .eskul-photo {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }

        .eskul-placeholder {
            width: 100%;
            height: 220px;

            background: #eaf2ff;

            display: flex;
            align-items: center;
            justify-content: center;

            color: #1769ff;
            font-size: 60px;
        }

        .eskul-content {
            padding: 23px;
        }

        .eskul-icon {
            width: 50px;
            height: 50px;

            background: #eaf2ff;
            color: #1769ff;

            border-radius: 12px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 23px;

            margin-bottom: 15px;
        }

        .eskul-content h5 {
            color: #173f78;
            font-weight: 800;

            margin-bottom: 15px;
        }

        .eskul-content p {
            color: #64748b;
            line-height: 1.7;

            margin-bottom: 8px;
        }

        .eskul-label {
            color: #173f78;
            font-weight: 700;
        }


        /* =========================
           PRESTASI
        ========================= */

        #prestasi {
            background: #f8fbff;
        }

        .prestasi-card {
            background: white;
            border-radius: 18px;
            overflow: hidden;
            height: 100%;

            box-shadow: 0 8px 25px rgba(0,0,0,0.07);

            transition: 0.3s;
        }

        .prestasi-card:hover {
            transform: translateY(-7px);

            box-shadow: 0 15px 35px rgba(0,0,0,0.10);
        }

        .prestasi-photo {
            width: 100%;
            height: 240px;
            object-fit: cover;
        }

        .prestasi-placeholder {
            width: 100%;
            height: 240px;

            background: #eaf2ff;

            display: flex;
            align-items: center;
            justify-content: center;

            color: #1769ff;
            font-size: 65px;
        }

        .prestasi-content {
            padding: 25px;
        }

        .prestasi-icon {
            width: 52px;
            height: 52px;

            border-radius: 12px;

            background: #eaf2ff;
            color: #1769ff;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 25px;

            margin-bottom: 15px;
        }

        .prestasi-content h5 {
            color: #173f78;
            font-weight: 800;

            margin-bottom: 12px;
        }

        .prestasi-content p {
            color: #64748b;
            line-height: 1.7;

            margin-bottom: 10px;
        }

        .prestasi-tahun {
            display: inline-block;

            background: #eaf2ff;
            color: #1769ff;

            padding: 7px 13px;

            border-radius: 8px;

            font-size: 13px;
            font-weight: 700;
        }


        /* =========================
           BERITA
        ========================= */

        #berita {
            background: white;
        }

        .news-card {
            background: white;
            border-radius: 18px;
            overflow: hidden;
            height: 100%;

            box-shadow: 0 8px 25px rgba(0,0,0,0.07);
        }

        .news-image {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }

        .news-placeholder {
            height: 220px;

            background: #eaf2ff;

            display: flex;
            align-items: center;
            justify-content: center;

            color: #1769ff;
            font-size: 55px;
        }

        .news-content {
            padding: 22px;
        }

        .news-date {
            color: #1769ff;
            font-size: 13px;
            font-weight: 600;
        }

        .news-content h5 {
            color: #173f78;
            font-weight: 700;

            margin: 10px 0;
        }

        .news-content p {
            color: #64748b;
            line-height: 1.7;
        }


        /* =========================
           GALERI
        ========================= */

        #galeri {
            background: #f8fbff;
        }

        .gallery-card {
            overflow: hidden;
            border-radius: 15px;
            height: 230px;
            background: #eaf2ff;
        }

        .gallery-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;

            transition: 0.4s;
        }

        .gallery-card:hover img {
            transform: scale(1.08);
        }

        .gallery-placeholder {
            width: 100%;
            height: 100%;

            display: flex;
            align-items: center;
            justify-content: center;

            color: #1769ff;
            font-size: 55px;
        }


        /* =========================
           FOOTER
        ========================= */

        footer {
            background: #173f78;
            color: white;

            padding: 60px 0 25px;
        }

        footer h4,
        footer h5 {
            font-weight: 700;
        }

        footer p {
            color: #dbeafe;
            line-height: 1.7;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.15);

            margin-top: 35px;

            padding-top: 20px;

            text-align: center;

            color: #dbeafe;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 991px) {

            .hero {
                padding: 60px 0;
            }

            .hero h1 {
                font-size: 43px;
            }

            .hero-image-box {
                margin-top: 40px;
            }

            .navbar-school .nav-link {
                margin: 5px 0;
            }

            .login-button {
                display: inline-block;
                margin-top: 10px;
            }

            .navbar-school .dropdown-menu {
                box-shadow: none;
                border: 1px solid #edf2f7;
                margin-top: 0;
            }

        }

    </style>

</head>


<body>


<!-- ==================================================
     NAVBAR
================================================== -->

<nav class="navbar navbar-expand-lg navbar-school">

    <div class="container">

        <a class="navbar-brand d-flex align-items-center"
           href="{{ url('/') }}">

            <div class="logo-school me-2">

                <img src="{{ asset('uploads/logo.png') }}"
                alt="Logo SDN CITATAH"
                style="width:100%; height:100%; object-fit:fill; border-radius:50%; display:block;" >

            </div>

            <span class="brand-name">

                {{ $profil->nama_sekolah ?? 'SDN CITATAH' }}

            </span>

        </a>


        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu"
                aria-controls="navbarMenu"
                aria-expanded="false"
                aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>


        <div class="collapse navbar-collapse"
             id="navbarMenu">

            <ul class="navbar-nav ms-auto align-items-lg-center">


                <!-- BERANDA -->

                <li class="nav-item">

                    <a class="nav-link active"
                       href="{{ url('/') }}">

                        Beranda

                    </a>

                </li>


                <!-- PROFIL -->

                <li class="nav-item">

                    <a class="nav-link"
                       href="#profil">

                        Profil

                    </a>

                </li>


                <!-- TENTANG SEKOLAH -->

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle"
                       href="#"
                       id="tentangDropdown"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">
                        <i class="bi bi-building me-1"></i>

                        Tentang Sekolah

                    </a>


                    <ul class="dropdown-menu"
                        aria-labelledby="tentangDropdown">


                        <!-- VISI MISI -->

                        <li>

                            <a class="dropdown-item"
                               href="#visi-misi">

                                <i class="bi bi-eye me-2"></i>

                                Visi & Misi

                            </a>

                        </li>


                        <!-- PENGUMUMAN -->

                        <li>

                            <a class="dropdown-item"
                               href="#pengumuman">

                                <i class="bi bi-megaphone-fill me-2"></i>

                                Pengumuman

                            </a>

                        </li>

                    </ul>

                </li>


                <!-- GURU -->

                <li class="nav-item">

                    <a class="nav-link"
                       href="#guru">

                        Guru

                    </a>

                </li>


                <!-- EKSTRAKURIKULER -->

                <li class="nav-item">

                    <a class="nav-link"
                       href="#ekstrakurikuler">

                        Ekstrakurikuler

                    </a>

                </li>


                <!-- PRESTASI -->

                <li class="nav-item">

                    <a class="nav-link"
                       href="#prestasi">

                        Prestasi

                    </a>

                </li>


                <!-- BERITA -->

                <li class="nav-item">

                    <a class="nav-link"
                       href="#berita">

                        Berita

                    </a>

                </li>


                <!-- GALERI -->

                <li class="nav-item">

                    <a class="nav-link"
                       href="#galeri">

                        Galeri

                    </a>

                </li>

            </ul>

        </div>

    </div>

</nav>



<!-- ==================================================
     HERO
================================================== -->

<section class="hero">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">


                <div class="hero-small-title">

                    Selamat Datang di

                </div>


                <h1>

                    <span>

                        {{ $profil->nama_sekolah ?? 'SDN CITATAH' }}

                    </span>

                    <br>

                    Sekolah untuk

                    <br>

                    Generasi Hebat

                </h1>


                <p class="hero-description">

                    {{ $profil->deskripsi ??
                    'SDN CITATAH merupakan sekolah dasar yang berkomitmen memberikan pendidikan berkualitas dan membentuk generasi yang cerdas, berkarakter, mandiri, dan berprestasi.' }}

                </p>


                <div class="hero-buttons">


                    <a href="#profil"
                       class="btn btn-primary-custom me-2">

                        <i class="bi bi-building me-1"></i>

                        Lihat Profil

                    </a>


                    <a href="#pengumuman"
                       class="btn btn-outline-primary px-4 py-2">

                        Pengumuman Terbaru

                    </a>

                </div>

            </div>


            <div class="col-lg-6">

                <div class="hero-image-box">


                    @if(!empty($profil?->foto))


                        <img src="{{ asset('uploads/profil/' . $profil->foto) }}"
                             class="hero-image"
                             alt="Foto {{ $profil->nama_sekolah ?? 'SDN CITATAH' }}">


                    @elseif(!empty($profil?->logo))


                        <img src="{{ asset('uploads/profil/' . $profil->logo) }}"
                             class="hero-image"
                             alt="Logo Sekolah">


                    @else


                        <div class="hero-no-image">

                            <i class="bi bi-building"></i>

                            <h3>

                                {{ $profil->nama_sekolah ?? 'SDN CITATAH' }}

                            </h3>

                            <p>

                                Sistem Informasi Sekolah

                            </p>

                        </div>


                    @endif

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ==================================================
     STATISTIK
================================================== -->

<section class="stats-section">

    <div class="container">

        <div class="row g-4">

        <!-- SISWA -->

        <div class="col-lg col-md-6">

              <div class="stat-card">

           <div class="stat-icon">

            <i class="bi bi-people"></i>

           </div>

              <div class="stat-number">

            {{ isset($siswa) ? $siswa->count() : 0 }}

             </div>

           <div class="stat-title">

               Siswa

        </div>

    </div>

</div>


            <!-- GURU -->

            <div class="col-lg col-md-6">

                <div class="stat-card">

                    <div class="stat-icon">

                        <i class="bi bi-person-badge"></i>

                    </div>

                    <div class="stat-number">

                        {{ isset($guru) ? $guru->count() : 0 }}

                    </div>

                    <div class="stat-title">

                        Guru

                    </div>

                </div>

            </div>


            <!-- PENGUMUMAN -->

            <div class="col-lg col-md-6">

                <div class="stat-card">

                    <div class="stat-icon">

                        <i class="bi bi-megaphone"></i>

                    </div>

                    <div class="stat-number">

                        {{ isset($pengumuman) ? $pengumuman->count() : 0 }}

                    </div>

                    <div class="stat-title">

                        Pengumuman

                    </div>

                </div>

            </div>


            <!-- BERITA -->

            <div class="col-lg col-md-6">

                <div class="stat-card">

                    <div class="stat-icon">

                        <i class="bi bi-newspaper"></i>

                    </div>

                    <div class="stat-number">

                        {{ isset($berita) ? $berita->count() : 0 }}

                    </div>

                    <div class="stat-title">

                        Berita

                    </div>

                </div>

            </div>


            <!-- GALERI -->

            <div class="col-lg col-md-6">

                <div class="stat-card">

                    <div class="stat-icon">

                        <i class="bi bi-images"></i>

                    </div>

                    <div class="stat-number">

                        {{ isset($galeri) ? $galeri->count() : 0 }}

                    </div>

                    <div class="stat-title">

                        Galeri

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ==================================================
     PROFIL SEKOLAH
================================================== -->

<section class="section"
         id="profil">

    <div class="container">


        <div class="section-title">

            <div class="small-title">

                Tentang Sekolah

            </div>

            <h2>

                Profil Sekolah

            </h2>

        </div>


        <div class="row align-items-center g-5">


            <div class="col-lg-5">


                @if(!empty($profil?->foto))


                    <img src="{{ asset('uploads/profil/' . $profil->foto) }}"
                         class="profile-image"
                         alt="Profil Sekolah">


                @else


                    <div class="profile-placeholder">

                        <i class="bi bi-building"></i>

                    </div>


                @endif

            </div>


            <div class="col-lg-7 profile-content">


                <h3>

                    {{ $profil->nama_sekolah ?? 'SDN CITATAH' }}

                </h3>


                <p>

                    {{ $profil->deskripsi ??
                    'Selamat datang di website resmi SDN CITATAH.' }}

                </p>


                <div class="profile-info">


                    <div class="profile-info-item">

                        <strong>

                            <i class="bi bi-person me-2"></i>

                            Kepala Sekolah:

                        </strong>

                        <span>

                            {{ $profil->kepala_sekolah ?? '-' }}

                        </span>

                    </div>


                    <div class="profile-info-item">

                        <strong>

                            <i class="bi bi-calendar me-2"></i>

                            Tahun Berdiri:

                        </strong>

                        <span>

                            {{ $profil->tahun_berdiri ?? '-' }}

                        </span>

                    </div>


                    <div class="profile-info-item">

                        <strong>

                            <i class="bi bi-geo-alt me-2"></i>

                            Alamat:

                        </strong>

                        <span>

                            {{ $profil->alamat ?? '-' }}

                        </span>

                    </div>


                    <div class="profile-info-item">

                        <strong>

                            <i class="bi bi-telephone me-2"></i>

                            Kontak:

                        </strong>

                        <span>

                            {{ $profil->kontak ?? '-' }}

                        </span>

                    </div>


                    <div class="profile-info-item">

                        <strong>

                            NPSN:

                        </strong>

                        <span>

                            {{ $profil->npsn ?? '-' }}

                        </span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ==================================================
     VISI & MISI
================================================== -->

<section class="section"
         id="visi-misi">

    <div class="container">


        <div class="section-title">

            <div class="small-title">

                Arah dan Tujuan Sekolah

            </div>

            <h2>

                Visi & Misi

            </h2>

            <p>

                Landasan SDN CITATAH dalam memberikan pendidikan
                dan membentuk karakter peserta didik.

            </p>

        </div>


        <div class="row g-4">


            <div class="col-lg-5">

                <div class="visi-card">


                    <div class="visi-icon">

                        <i class="bi bi-eye"></i>

                    </div>


                    <h4>

                        Visi

                    </h4>


                    <p class="visi-text mb-0">

                        Terwujudnya peserta didik yang bertaqwa,
                        berprestasi, berkarakter Pancasila,
                        dan peduli lingkungan.

                    </p>

                </div>

            </div>


            <div class="col-lg-7">

                <div class="misi-card">


                    <div class="misi-icon">

                        <i class="bi bi-bullseye"></i>

                    </div>


                    <h4>

                        Misi

                    </h4>


                    <ol class="misi-list">


                        <li>

                            Menanamkan nilai-nilai keagamaan dan budi pekerti
                            luhur dalam kehidupan sehari-hari.

                        </li>


                        <li>

                            Melaksanakan proses pembelajaran yang aktif,
                            kreatif, dan menyenangkan untuk meningkatkan
                            prestasi akademik dan non-akademik.

                        </li>


                        <li>

                            Mengembangkan bakat, minat, dan potensi siswa
                            melalui kegiatan ekstrakurikuler.

                        </li>


                        <li>

                            Menerapkan Pembelajaran Profil Pelajar Pancasila
                            (P5) serta membiasakan hidup bersih dan sehat
                            di lingkungan sekolah.

                        </li>

                    </ol>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ==================================================
     PENGUMUMAN
================================================== -->

<section class="section"
         id="pengumuman">

    <div class="container">


        <div class="section-title">

            <div class="small-title">

                Informasi Sekolah

            </div>


            <h2>

                Pengumuman

            </h2>


            <p>

                Informasi terbaru dan pengumuman penting dari
                {{ $profil->nama_sekolah ?? 'SDN CITATAH' }}.

            </p>

        </div>


        <div class="row g-4">


            @forelse($pengumuman ?? [] as $item)


                <div class="col-lg-4 col-md-6">


                    <div class="pengumuman-card">


                        <div class="pengumuman-icon">

                            <i class="bi bi-megaphone-fill"></i>

                        </div>


                        @if(!empty($item->tanggal))


                            <div class="pengumuman-date">

                                <i class="bi bi-calendar3 me-1"></i>

                                {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}

                            </div>


                        @endif


                        <h4>

                            {{ $item->judul ?? '-' }}

                        </h4>


                        <p>

                            {{ \Illuminate\Support\Str::limit(
                                strip_tags($item->isi ?? ''),
                                180
                            ) }}

                        </p>

                    </div>

                </div>


            @empty


                <div class="col-12">


                    <div class="pengumuman-empty text-center">


                        <i class="bi bi-megaphone"></i>


                        <h5 class="mt-3">

                            Belum Ada Pengumuman

                        </h5>


                        <p class="text-muted mb-0">

                            Belum ada pengumuman terbaru dari sekolah.

                        </p>

                    </div>

                </div>


            @endforelse

        </div>

    </div>

</section>



<!-- ==================================================
     GURU
================================================== -->

<section class="section"
         id="guru">

    <div class="container">


        <div class="section-title">

            <div class="small-title">

                Tenaga Pendidik

            </div>

            <h2>

                Guru Kami

            </h2>

        </div>


        <div class="row g-4">


            @forelse($guru ?? [] as $item)


                <div class="col-lg-3 col-md-6">


                    <div class="guru-card">


                        @if(!empty($item->foto))


                            <img src="{{ asset('uploads/guru/' . $item->foto) }}"
                                 class="guru-photo"
                                 alt="{{ $item->nama_guru }}">


                        @else


                            <div class="guru-placeholder">

                                <i class="bi bi-person"></i>

                            </div>


                        @endif


                        <div class="guru-content">


                            <h5>

                                {{ $item->nama_guru }}

                            </h5>


                            <p>

                                {{ $item->mapel ?? 'Guru' }}

                            </p>


                            @if(!empty($item->nip))


                                <small class="text-muted">

                                    NIP: {{ $item->nip }}

                                </small>


                            @endif

                        </div>

                    </div>

                </div>


            @empty


                <div class="col-12 text-center">

                    <p class="text-muted">

                        Data guru belum tersedia.

                    </p>

                </div>


            @endforelse

        </div>

    </div>

</section>



<!-- ==================================================
     EKSTRAKURIKULER
================================================== -->

<section class="section"
         id="ekstrakurikuler">

    <div class="container">


        <div class="section-title">

            <div class="small-title">

                Kegiatan Siswa

            </div>


            <h2>

                Ekstrakurikuler

            </h2>


            <p>

                Berbagai kegiatan ekstrakurikuler untuk mengembangkan
                bakat, minat, kreativitas, kedisiplinan, dan karakter siswa.

            </p>

        </div>


        <div class="row g-4">


            @forelse($ekstrakurikuler ?? [] as $item)


                <div class="col-lg-3 col-md-6">


                    <div class="eskul-card">


                        @if(!empty($item->gambar))


                            <img src="{{ asset('uploads/ekstrakurikuler/' . $item->gambar) }}"
                                 class="eskul-photo"
                                 alt="{{ $item->nama_eskul ?? $item->nama_ekskul ?? 'Ekstrakurikuler' }}">


                        @else


                            <div class="eskul-placeholder">

                                <i class="bi bi-trophy"></i>

                            </div>


                        @endif


                        <div class="eskul-content">


                            <div class="eskul-icon">

                                <i class="bi bi-trophy"></i>

                            </div>


                            <h5>

                                {{ $item->nama_eskul ?? $item->nama_ekskul ?? '-' }}

                            </h5>


                            <p>

                                <span class="eskul-label">

                                    <i class="bi bi-person me-1"></i>

                                    Pembina:

                                </span>

                                {{ $item->pembina ?? '-' }}

                            </p>


                            <p>

                                <span class="eskul-label">

                                    <i class="bi bi-clock me-1"></i>

                                    Jadwal:

                                </span>

                                {{ $item->jadwal_latihan ?? '-' }}

                            </p>


                            <p>

                                {{ $item->deskripsi ?? '-' }}

                            </p>

                        </div>

                    </div>

                </div>


            @empty


                <div class="col-12 text-center">

                    <p class="text-muted">

                        Data ekstrakurikuler belum tersedia.

                    </p>

                </div>


            @endforelse

        </div>

    </div>

</section>



<!-- ==================================================
     PRESTASI
================================================== -->

<section class="section"
         id="prestasi">

    <div class="container">


        <div class="section-title">

            <div class="small-title">

                Pencapaian Sekolah

            </div>


            <h2>

                Prestasi Siswa

            </h2>


            <p>

                Berbagai prestasi dan pencapaian yang telah diraih
                oleh siswa {{ $profil->nama_sekolah ?? 'SDN CITATAH' }}.

            </p>

        </div>


        <div class="row g-4">


            @forelse($prestasi ?? [] as $item)


                <div class="col-lg-4 col-md-6">


                    <div class="prestasi-card">


                        @if(!empty($item->foto))


                            <img src="{{ asset('uploads/prestasi/' . $item->foto) }}"
                                 class="prestasi-photo"
                                 alt="Prestasi {{ $profil->nama_sekolah ?? 'SDN CITATAH' }}">


                        @else


                            <div class="prestasi-placeholder">

                                <i class="bi bi-trophy-fill"></i>

                            </div>


                        @endif


                        <div class="prestasi-content">


                            <div class="prestasi-icon">

                                <i class="bi bi-trophy-fill"></i>

                            </div>


                            <h5>

                                Prestasi

                            </h5>


                            <p>

                                {{ $item->deskripsi ?? '-' }}

                            </p>


                            <span class="prestasi-tahun">

                                <i class="bi bi-calendar3 me-1"></i>

                                Tahun Ajaran:

                                {{ $item->tahun_ajaran ?? '-' }}

                            </span>

                        </div>

                    </div>

                </div>


            @empty


                <div class="col-12 text-center">


                    <div class="py-4">


                        <i class="bi bi-trophy"
                           style="font-size: 50px; color: #1769ff;"></i>


                        <p class="text-muted mt-3 mb-0">

                            Belum ada data prestasi.

                        </p>

                    </div>

                </div>


            @endforelse

        </div>

    </div>

</section>



<!-- ==================================================
     BERITA
================================================== -->

<section class="section"
         id="berita">

    <div class="container">


        <div class="section-title">

            <div class="small-title">

                Informasi Terbaru

            </div>


            <h2>

                Berita Terbaru

            </h2>

        </div>


        <div class="row g-4">


            @forelse($berita ?? [] as $item)


                <div class="col-lg-4 col-md-6">


                    <div class="news-card">


                        @if(!empty($item->gambar))


                            <img src="{{ asset('uploads/berita/' . $item->gambar) }}"
                                 class="news-image"
                                 alt="{{ $item->judul }}">


                        @else


                            <div class="news-placeholder">

                                <i class="bi bi-newspaper"></i>

                            </div>


                        @endif


                        <div class="news-content">


                            <div class="news-date">

                                <i class="bi bi-calendar3 me-1"></i>

                                {{ !empty($item->tanggal)
                                    ? \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y')
                                    : '-' }}

                            </div>


                            <h5>

                                {{ $item->judul }}

                            </h5>


                            <p>

                                {{ \Illuminate\Support\Str::limit(
                                    strip_tags($item->isi),
                                    140
                                ) }}

                            </p>

                        </div>

                    </div>

                </div>


            @empty


                <div class="col-12 text-center">

                    <p class="text-muted">

                        Belum ada berita.

                    </p>

                </div>


            @endforelse

        </div>

    </div>

</section>



<!-- ==================================================
     GALERI
================================================== -->

<section class="section"
         id="galeri">

    <div class="container">


        <div class="section-title">

            <div class="small-title">

                Dokumentasi

            </div>


            <h2>

                Galeri Kegiatan

            </h2>


            <p>

                Dokumentasi kegiatan dan aktivitas siswa
                {{ $profil->nama_sekolah ?? 'SDN CITATAH' }}.

            </p>

        </div>


        <div class="row g-3">


            @forelse($galeri ?? [] as $item)


                <div class="col-lg-4 col-md-6">


                    <div class="gallery-card">


                        @if(!empty($item->file))


                            <img src="{{ asset('uploads/galeri/' . $item->file) }}"
                                 alt="{{ $item->judul ?? 'Galeri SDN CITATAH' }}">


                        @elseif(!empty($item->gambar))


                            <img src="{{ asset('uploads/galeri/' . $item->gambar) }}"
                                 alt="{{ $item->judul ?? 'Galeri SDN CITATAH' }}">


                        @else


                            <div class="gallery-placeholder">

                                <i class="bi bi-image"></i>

                            </div>


                        @endif

                    </div>

                </div>


            @empty


                <div class="col-12 text-center">

                    <p class="text-muted">

                        Belum ada foto galeri.

                    </p>

                </div>


            @endforelse

        </div>

    </div>

</section>



<!-- ==================================================
     FOOTER
================================================== -->

<footer>

    <div class="container">

        <div class="row g-4">


            <div class="col-lg-5">

                <h4>

                    {{ $profil->nama_sekolah ?? 'SDN CITATAH' }}

                </h4>


                <p>

                    {{ $profil->deskripsi ??
                    'Website informasi resmi SDN CITATAH.' }}

                </p>

            </div>


            <div class="col-lg-4">

                <h5>

                    Alamat Sekolah

                </h5>


                <p>

                    <i class="bi bi-geo-alt me-2"></i>

                    {{ $profil->alamat ?? '-' }}

                </p>

            </div>


            <div class="col-lg-3">

                <h5>

                    Kontak

                </h5>


                <p>

                    <i class="bi bi-telephone me-2"></i>

                    {{ $profil->kontak ?? '-' }}

                </p>

            </div>

        </div>


        <div class="footer-bottom">

            © {{ date('Y') }}

            {{ $profil->nama_sekolah ?? 'SDN CITATAH' }}.

            Semua hak dilindungi.

        </div>

    </div>

</footer>



<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
