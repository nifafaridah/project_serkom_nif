<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        {{ $profil->nama_sekolah ?? 'SDN CITATAH' }}
    </title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #ffffff;
            color: #1e293b;
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        img {
            max-width: 100%;
            display: block;
        }

        /* =========================
           HEADER
        ========================== */

        header {
            width: 100%;
            height: 72px;
            background: #ffffff;
            border-bottom: 1px solid #e5e7eb;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar {
            max-width: 1200px;
            height: 72px;
            margin: auto;
            padding: 0 25px;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .brand-logo {
            width: 42px;
            height: 42px;
            background: #1677ff;
            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            color: white;
            font-size: 20px;
        }

        .brand-name {
            font-size: 21px;
            font-weight: 700;
            color: #1677ff;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .nav-menu a {
            color: #475569;
            font-size: 15px;
            transition: 0.3s;
        }

        .nav-menu a:hover {
            color: #1677ff;
        }

        .login-button {
            background: #1677ff;
            color: white !important;
            padding: 11px 22px;
            border-radius: 8px;
            font-weight: 600;
            transition: 0.3s;
        }

        .login-button:hover {
            background: #0d63d7;
            transform: translateY(-1px);
        }

        /* =========================
           HERO
        ========================== */

        .hero {
            min-height: 575px;
            background:
                linear-gradient(
                    120deg,
                    #f8fbff 0%,
                    #eef6ff 55%,
                    #dcecff 100%
                );

            display: flex;
            align-items: center;
        }

        .hero-container {
            width: 100%;
            max-width: 1200px;
            margin: auto;
            padding: 75px 25px;

            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 70px;
            align-items: center;
        }

        .hero-small-title {
            color: #1677ff;
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 12px;
        }

        .hero-title {
            font-size: 52px;
            line-height: 1.08;
            color: #153b68;
            margin-bottom: 22px;
            font-weight: 800;
        }

        .hero-title span {
            color: #1677ff;
        }

        .hero-description {
            color: #64748b;
            font-size: 17px;
            max-width: 580px;
            margin-bottom: 30px;
        }

        .hero-buttons {
            display: flex;
            gap: 13px;
            flex-wrap: wrap;
        }

        .btn-primary {
            background: #1677ff;
            color: white;
            padding: 13px 27px;
            border-radius: 8px;
            font-weight: 600;
            display: inline-block;
            transition: 0.3s;
        }

        .btn-primary:hover {
            background: #0d63d7;
            transform: translateY(-2px);
        }

        .btn-outline {
            border: 1px solid #1677ff;
            color: #1677ff;
            padding: 12px 27px;
            border-radius: 8px;
            font-weight: 600;
            display: inline-block;
            transition: 0.3s;
        }

        .btn-outline:hover {
            background: #1677ff;
            color: white;
        }

        /* HERO CARD */

        .hero-card {
            min-height: 335px;
            background: #1677ff;
            border-radius: 24px;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            color: white;
            box-shadow: 0 25px 50px rgba(22, 119, 255, 0.20);

            padding: 35px;
        }

        .hero-card-logo {
            width: 105px;
            height: 105px;
            border-radius: 20px;
            background: white;
            padding: 12px;
            margin-bottom: 25px;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-card-logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .hero-card-icon {
            font-size: 70px;
            margin-bottom: 20px;
        }

        .hero-card h2 {
            font-size: 25px;
            text-align: center;
        }

        .hero-card p {
            margin-top: 8px;
            opacity: 0.9;
            text-align: center;
        }

        /* =========================
           SECTION
        ========================== */

        .section {
            padding: 75px 25px;
        }

        .section-light {
            background: #f8fbff;
        }

        .section-container {
            max-width: 1200px;
            margin: auto;
        }

        .section-title {
            text-align: center;
            margin-bottom: 45px;
        }

        .section-title h2 {
            font-size: 34px;
            color: #153b68;
            margin-bottom: 10px;
        }

        .section-title p {
            color: #64748b;
            max-width: 700px;
            margin: auto;
        }

        /* =========================
           PROFIL
        ========================== */

        .profile-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 35px;
            align-items: stretch;
        }

        .profile-box {
            background: white;
            border-radius: 14px;
            padding: 35px;
            border: 1px solid #e5edf7;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.05);
        }

        .profile-box h3 {
            color: #1677ff;
            font-size: 22px;
            margin-bottom: 17px;
        }

        .profile-box p {
            color: #64748b;
            margin-bottom: 12px;
        }

        .profile-image {
            height: 330px;
            border-radius: 14px;
            overflow: hidden;
            background: #eaf3ff;
        }

        .profile-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-info {
            margin-top: 20px;
        }

        .info-item {
            padding: 12px 0;
            border-bottom: 1px solid #edf2f7;
        }

        .info-item strong {
            display: block;
            color: #153b68;
            margin-bottom: 3px;
        }

        .info-item span {
            color: #64748b;
        }

        /* =========================
           STATISTIK
        ========================== */

        .stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-top: 45px;
        }

        .stat-box {
            background: white;
            border-radius: 12px;
            padding: 25px;
            text-align: center;
            border: 1px solid #e5edf7;
            box-shadow: 0 8px 25px rgba(15, 23, 42, 0.05);
        }

        .stat-number {
            font-size: 34px;
            font-weight: 800;
            color: #1677ff;
        }

        .stat-title {
            color: #64748b;
            margin-top: 5px;
        }

        /* =========================
           BERITA
        ========================== */

        .news-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .news-card {
            background: white;
            border-radius: 14px;
            overflow: hidden;
            border: 1px solid #e5edf7;
            box-shadow: 0 8px 25px rgba(15, 23, 42, 0.06);
            transition: 0.3s;
        }

        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(15, 23, 42, 0.10);
        }

        .news-image {
            height: 205px;
            background: #eaf3ff;
            overflow: hidden;
        }

        .news-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .news-content {
            padding: 23px;
        }

        .news-date {
            font-size: 13px;
            color: #1677ff;
            margin-bottom: 8px;
        }

        .news-content h3 {
            font-size: 19px;
            color: #153b68;
            margin-bottom: 10px;
        }

        .news-content p {
            color: #64748b;
            font-size: 14px;
        }

        /* =========================
           EKSTRAKURIKULER
        ========================== */

        .eskul-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .eskul-card {
            background: white;
            padding: 28px;
            border-radius: 14px;
            border: 1px solid #e5edf7;
            box-shadow: 0 8px 25px rgba(15, 23, 42, 0.05);
        }

        .eskul-icon {
            width: 55px;
            height: 55px;
            border-radius: 12px;
            background: #e7f1ff;
            color: #1677ff;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 25px;
            margin-bottom: 18px;
        }

        .eskul-card h3 {
            color: #153b68;
            margin-bottom: 8px;
        }

        .eskul-card p {
            color: #64748b;
            font-size: 14px;
        }

        .eskul-pembina {
            margin-top: 10px;
            font-size: 13px;
            color: #1677ff;
            font-weight: 600;
        }

        /* =========================
           GALERI
        ========================== */

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
        }

        .gallery-item {
            height: 230px;
            border-radius: 12px;
            overflow: hidden;
            background: #eaf3ff;
            position: relative;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.4s;
        }

        .gallery-item:hover img {
            transform: scale(1.05);
        }

        .gallery-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;

            padding: 14px;
            color: white;

            background: linear-gradient(
                transparent,
                rgba(0,0,0,0.75)
            );
        }

        /* =========================
           VISI MISI
        ========================== */

        .vision-box {
            background: #1677ff;
            color: white;
            border-radius: 18px;
            padding: 45px;
            text-align: center;
        }

        .vision-box h2 {
            margin-bottom: 18px;
        }

        .vision-box p {
            max-width: 850px;
            margin: auto;
            opacity: 0.95;
        }

        /* =========================
           FOOTER
        ========================== */

        footer {
            background: #123b68;
            color: white;
            padding: 55px 25px 20px;
        }

        .footer-container {
            max-width: 1200px;
            margin: auto;

            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr;
            gap: 50px;
        }

        .footer-brand h2 {
            margin-bottom: 12px;
        }

        .footer-brand p {
            color: #cbd5e1;
            max-width: 400px;
        }

        .footer-column h3 {
            margin-bottom: 15px;
            font-size: 17px;
        }

        .footer-column p,
        .footer-column a {
            color: #cbd5e1;
            font-size: 14px;
            margin-bottom: 8px;
            display: block;
        }

        .footer-column a:hover {
            color: white;
        }

        .copyright {
            max-width: 1200px;
            margin: 40px auto 0;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.15);

            text-align: center;
            color: #cbd5e1;
            font-size: 13px;
        }

        /* =========================
           RESPONSIVE
        ========================== */

        @media (max-width: 900px) {

            .nav-menu {
                gap: 15px;
            }

            .hero-container {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .hero-title {
                font-size: 42px;
            }

            .profile-grid {
                grid-template-columns: 1fr;
            }

            .stats {
                grid-template-columns: repeat(2, 1fr);
            }

            .news-grid,
            .eskul-grid {
                grid-template-columns: 1fr 1fr;
            }

            .gallery-grid {
                grid-template-columns: 1fr 1fr;
            }

            .footer-container {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 650px) {

            header {
                height: auto;
            }

            .navbar {
                height: auto;
                padding: 15px 20px;
                flex-direction: column;
                gap: 15px;
            }

            .nav-menu {
                flex-wrap: wrap;
                justify-content: center;
            }

            .hero {
                min-height: auto;
            }

            .hero-container {
                padding: 55px 20px;
            }

            .hero-title {
                font-size: 35px;
            }

            .hero-card {
                min-height: 280px;
            }

            .stats,
            .news-grid,
            .eskul-grid,
            .gallery-grid,
            .footer-container {
                grid-template-columns: 1fr;
            }

            .section {
                padding: 55px 20px;
            }

            .section-title h2 {
                font-size: 28px;
            }
        }
    </style>
</head>

<body>

{{-- =========================================================
     HEADER
========================================================= --}}

<header>
    <div class="navbar">

        <a href="{{ route('landing.index') }}" class="brand">

            <div class="brand-logo">
                🎓
            </div>

            <div class="brand-name">
                {{ $profil->nama_sekolah ?? 'SDN CITATAH' }}
            </div>

        </a>

        <nav class="nav-menu">

            <a href="{{ route('landing.index') }}">
                Beranda
            </a>

            <a href="#profil">
                Profil
            </a>

            <a href="#keunggulan">
                Keunggulan
            </a>

            <a href="#berita">
                Berita
            </a>

            <a href="#galeri">
                Galeri
            </a>

            <a href="{{ route('login') }}" class="login-button">
                ⇥ &nbsp; Login
            </a>

        </nav>

    </div>
</header>


{{-- =========================================================
     HERO
========================================================= --}}

<section class="hero">

    <div class="hero-container">

        <div>

            <div class="hero-small-title">
                Selamat Datang di
            </div>

            <h1 class="hero-title">

                <span>
                    {{ $profil->nama_sekolah ?? 'SDN CITATAH' }}
                </span>

                <br>

                Sekolah untuk
                <br>
                Generasi Hebat

            </h1>

            <p class="hero-description">

                {{ $profil->deskripsi
                    ?? 'Mewujudkan generasi yang beriman, cerdas, terampil, mandiri, berkarakter, serta memiliki wawasan luas untuk menghadapi masa depan.'
                }}

            </p>

            <div class="hero-buttons">

                <a href="{{ route('login') }}" class="btn-primary">
                    ⇥ &nbsp; Login Admin
                </a>

                <a href="#profil" class="btn-outline">
                    Lihat Profil
                </a>

            </div>

        </div>


        <div class="hero-card">

            @if(!empty($profil?->logo))

                @php
                    $logoPath = $profil->logo;

                    if (!str_starts_with($logoPath, 'uploads/')) {
                        $logoPath = 'uploads/' . $logoPath;
                    }
                @endphp

                <div class="hero-card-logo">

                    <img
                        src="{{ asset($logoPath) }}"
                        alt="{{ $profil->nama_sekolah ?? 'Logo Sekolah' }}"
                    >

                </div>

            @else

                <div class="hero-card-icon">
                    🏫
                </div>

            @endif

            <h2>
                {{ $profil->nama_sekolah ?? 'SDN CITATAH' }}
            </h2>

            <p>
                Sistem Informasi Sekolah
            </p>

        </div>

    </div>

</section>


{{-- =========================================================
     PROFIL SEKOLAH
========================================================= --}}

<section class="section" id="profil">

    <div class="section-container">

        <div class="section-title">

            <h2>
                Profil Sekolah
            </h2>

            <p>
                Mengenal lebih dekat
                {{ $profil->nama_sekolah ?? 'SDN CITATAH' }}
                sebagai tempat tumbuh dan berkembangnya generasi penerus bangsa.
            </p>

        </div>


        <div class="profile-grid">

            <div class="profile-box">

                <h3>
                    {{ $profil->nama_sekolah ?? 'SDN CITATAH' }}
                </h3>

                <p>
                    {{ $profil->deskripsi ?? 'Selamat datang di website resmi SDN CITATAH.' }}
                </p>


                <div class="profile-info">

                    <div class="info-item">

                        <strong>
                            Kepala Sekolah
                        </strong>

                        <span>
                            {{ $profil->kepala_sekolah ?? '-' }}
                        </span>

                    </div>


                    <div class="info-item">

                        <strong>
                            NPSN
                        </strong>

                        <span>
                            {{ $profil->npsn ?? '-' }}
                        </span>

                    </div>


                    <div class="info-item">

                        <strong>
                            Tahun Berdiri
                        </strong>

                        <span>
                            {{ $profil->tahun_berdiri ?? '-' }}
                        </span>

                    </div>


                    <div class="info-item">

                        <strong>
                            Alamat
                        </strong>

                        <span>
                            {{ $profil->alamat ?? '-' }}
                        </span>

                    </div>


                    <div class="info-item">

                        <strong>
                            Kontak
                        </strong>

                        <span>
                            {{ $profil->kontak ?? '-' }}
                        </span>

                    </div>

                </div>

            </div>


            <div>

                @if(!empty($profil?->foto))

                    @php
                        $fotoPath = $profil->foto;

                        if (!str_starts_with($fotoPath, 'uploads/')) {
                            $fotoPath = 'uploads/' . $fotoPath;
                        }
                    @endphp

                    <div class="profile-image">

                        <img
                            src="{{ asset($fotoPath) }}"
                            alt="Foto {{ $profil->nama_sekolah ?? 'Sekolah' }}"
                        >

                    </div>

                @else

                    <div
                        class="profile-image"
                        style="
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            font-size:70px;
                        "
                    >
                        🏫
                    </div>

                @endif

            </div>

        </div>


        {{-- STATISTIK --}}

        <div class="stats">

            <div class="stat-box">

                <div class="stat-number">
                    {{ $guru ?? 0 }}
                </div>

                <div class="stat-title">
                    Guru
                </div>

            </div>


            <div class="stat-box">

                <div class="stat-number">
                    {{ $siswa ?? 0 }}
                </div>

                <div class="stat-title">
                    Siswa
                </div>

            </div>


            <div class="stat-box">

                <div class="stat-number">
                    {{ isset($ekstrakurikuler) ? $ekstrakurikuler->count() : 0 }}
                </div>

                <div class="stat-title">
                    Ekstrakurikuler
                </div>

            </div>


            <div class="stat-box">

                <div class="stat-number">
                    {{ isset($galeri) ? $galeri->count() : 0 }}
                </div>

                <div class="stat-title">
                    Galeri
                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     VISI MISI
========================================================= --}}

<section class="section section-light" id="keunggulan">

    <div class="section-container">

        <div class="vision-box">

            <h2>
                Visi & Misi Sekolah
            </h2>

            <p>
                {{ $profil->visi_misi ?? 'Beriman, cerdas, terampil, mandiri, berkarakter, dan memiliki wawasan luas untuk menghadapi masa depan.' }}
            </p>

        </div>

    </div>

</section>


{{-- =========================================================
     BERITA
========================================================= --}}

<section class="section" id="berita">

    <div class="section-container">

        <div class="section-title">

            <h2>
                Berita Terbaru
            </h2>

            <p>
                Informasi dan berita terbaru seputar kegiatan
                {{ $profil->nama_sekolah ?? 'SDN CITATAH' }}.
            </p>

        </div>


        <div class="news-grid">

            @forelse($berita ?? [] as $item)

                <div class="news-card">

                    <div class="news-image">

                        @if(!empty($item->gambar))

                            @php
                                $beritaPath = $item->gambar;

                                if (!str_starts_with($beritaPath, 'uploads/')) {
                                    $beritaPath = 'uploads/' . $beritaPath;
                                }
                            @endphp

                            <img
                                src="{{ asset($beritaPath) }}"
                                alt="{{ $item->judul }}"
                            >

                        @else

                            <div
                                style="
                                    height:100%;
                                    display:flex;
                                    align-items:center;
                                    justify-content:center;
                                    font-size:60px;
                                "
                            >
                                📰
                            </div>

                        @endif

                    </div>


                    <div class="news-content">

                        <div class="news-date">
                            {{ $item->tanggal ?? '-' }}
                        </div>

                        <h3>
                            {{ $item->judul }}
                        </h3>

                        <p>
                            {{ \Illuminate\Support\Str::limit($item->isi, 130) }}
                        </p>

                    </div>

                </div>

            @empty

                <div
                    style="
                        grid-column:1/-1;
                        text-align:center;
                        color:#64748b;
                        padding:30px;
                    "
                >
                    Belum ada berita sekolah.
                </div>

            @endforelse

        </div>

    </div>

</section>


{{-- =========================================================
     EKSTRAKURIKULER
========================================================= --}}

<section class="section section-light">

    <div class="section-container">

        <div class="section-title">

            <h2>
                Ekstrakurikuler
            </h2>

            <p>
                Berbagai kegiatan yang dapat membantu siswa
                mengembangkan bakat dan kemampuan.
            </p>

        </div>


        <div class="eskul-grid">

            @forelse($ekstrakurikuler ?? [] as $eskul)

                <div class="eskul-card">

                    <div class="eskul-icon">
                        ★
                    </div>

                    <h3>
                        {{ $eskul->nama_ekskul ?? '-' }}
                    </h3>

                    <p>
                        {{ $eskul->deskripsi ?? '-' }}
                    </p>

                    <div class="eskul-pembina">

                        Pembina:
                        {{ $eskul->pembina ?? '-' }}

                    </div>

                    @if(!empty($eskul->jadwal_latihan))

                        <div
                            style="
                                margin-top:8px;
                                font-size:13px;
                                color:#64748b;
                            "
                        >
                            Jadwal:
                            {{ $eskul->jadwal_latihan }}
                        </div>

                    @endif

                </div>

            @empty

                <div
                    style="
                        grid-column:1/-1;
                        text-align:center;
                        color:#64748b;
                        padding:30px;
                    "
                >
                    Belum ada data ekstrakurikuler.
                </div>

            @endforelse

        </div>

    </div>

</section>


{{-- =========================================================
     GALERI
========================================================= --}}

<section class="section" id="galeri">

    <div class="section-container">

        <div class="section-title">

            <h2>
                Galeri Kegiatan
            </h2>

            <p>
                Dokumentasi kegiatan dan aktivitas
                {{ $profil->nama_sekolah ?? 'SDN CITATAH' }}.
            </p>

        </div>


        <div class="gallery-grid">

            @forelse($galeri ?? [] as $item)

                <div class="gallery-item">

                    @if(!empty($item->file))

                        @php
                            $galeriPath = $item->file;

                            if (!str_starts_with($galeriPath, 'uploads/')) {
                                $galeriPath = 'uploads/' . $galeriPath;
                            }
                        @endphp

                        <img
                            src="{{ asset($galeriPath) }}"
                            alt="{{ $item->judul }}"
                        >

                    @else

                        <div
                            style="
                                width:100%;
                                height:100%;
                                display:flex;
                                align-items:center;
                                justify-content:center;
                                font-size:60px;
                            "
                        >
                            🖼️
                        </div>

                    @endif


                    <div class="gallery-caption">

                        {{ $item->judul ?? 'Kegiatan Sekolah' }}

                    </div>

                </div>

            @empty

                <div
                    style="
                        grid-column:1/-1;
                        text-align:center;
                        color:#64748b;
                        padding:30px;
                    "
                >
                    Belum ada foto kegiatan.
                </div>

            @endforelse

        </div>

    </div>

</section>


{{-- =========================================================
     FOOTER
========================================================= --}}

<footer>

    <div class="footer-container">

        <div class="footer-brand">

            <h2>
                {{ $profil->nama_sekolah ?? 'SDN CITATAH' }}
            </h2>

            <p>
                Sistem Informasi Sekolah
                {{ $profil->nama_sekolah ?? 'SDN CITATAH' }}
                untuk memberikan informasi sekolah secara mudah,
                cepat, dan terstruktur.
            </p>

        </div>


        <div class="footer-column">

            <h3>
                Navigasi
            </h3>

            <a href="{{ route('landing.index') }}">
                Beranda
            </a>

            <a href="#profil">
                Profil Sekolah
            </a>

            <a href="#berita">
                Berita
            </a>

            <a href="#galeri">
                Galeri
            </a>

        </div>


        <div class="footer-column">

            <h3>
                Informasi Sekolah
            </h3>

            <p>
                {{ $profil->alamat ?? '-' }}
            </p>

            <p>
                {{ $profil->kontak ?? '-' }}
            </p>

            <p>
                NPSN:
                {{ $profil->npsn ?? '-' }}
            </p>

        </div>

    </div>


    <div class="copyright">

        © {{ date('Y') }}
        {{ $profil->nama_sekolah ?? 'SDN CITATAH' }}.
        Semua hak dilindungi.

    </div>

</footer>

</body>
</html>