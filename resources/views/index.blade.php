
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDN CITATAH - Website Sekolah</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
          rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8faff;
            color: #333;
        }

        .navbar {
            background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,.08);
        }

        .navbar-brand {
            color: #174d8c;
            font-weight: bold;
        }

        .navbar-brand img {
            width: 45px;
            height: 45px;
            object-fit: contain;
        }

        .nav-link {
            color: #333;
            font-size: 14px;
        }

        .nav-link:hover {
            color: #174d8c;
        }

        .slider-img {
            height: 400px;
            object-fit: cover;
            filter: brightness(65%);
        }

        .carousel-caption {
            bottom: 25%;
        }

        .carousel-caption h1 {
            font-size: 34px;
            font-weight: bold;
        }

        .carousel-caption p {
            font-size: 16px;
        }

        .judul {
            color: #174d8c;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .section {
            padding: 55px 0;
        }

        .tombol {
            background: #174d8c;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
        }

        .tombol:hover {
            background: #103967;
            color: white;
        }

        .kotak {
            background: white;
            padding: 22px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,.07);
            height: 100%;
        }

        .ikon {
            font-size: 32px;
            color: #174d8c;
            margin-bottom: 12px;
        }

        .foto-galeri {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 6px;
        }

        .foto-berita {
            width: 100%;
            height: 190px;
            object-fit: cover;
            border-radius: 6px 6px 0 0;
        }

        footer {
            background: #174d8c;
            color: white;
            padding: 22px 0;
            text-align: center;
        }

        @media (max-width: 768px) {
            .slider-img {
                height: 280px;
            }

            .carousel-caption {
                bottom: 10%;
            }

            .carousel-caption h1 {
                font-size: 23px;
            }

            .carousel-caption p {
                font-size: 13px;
            }
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">

        <a class="navbar-brand d-flex align-items-center gap-2" href="#beranda">
            <img src="{{ asset('uploads/logo.png') }}" alt="Logo SDN CITATAH">
            <span>SDN CITATAH</span>
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menuNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menuNavbar">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link" href="#beranda">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#profil">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#keunggulan">Keunggulan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#berita">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#galeri">Galeri</a>
                </li>
                <li class="nav-item ms-lg-2">
                    <a href="{{ route('login') }}" class="tombol">Login Admin</a>
                </li>
            </ul>
        </div>

    </div>
</nav>

<!-- SLIDER -->
<section id="beranda">
    <div id="sliderSekolah"
         class="carousel slide"
         data-bs-ride="carousel"
         data-bs-interval="4000">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#sliderSekolah"
                    data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#sliderSekolah"
                    data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#sliderSekolah"
                    data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="{{ asset('uploads/galeri/sekolah.jpg') }}"
                     class="d-block w-100 slider-img"
                     alt="Gedung SDN CITATAH">

                <div class="carousel-caption">
                    <h1>Selamat Datang di SDN CITATAH</h1>
                    <p>Mewujudkan generasi yang cerdas, disiplin, dan berkarakter.</p>
                    <a href="#profil" class="tombol">Kenali Sekolah Kami</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('uploads/galeri/kegiatan.jpg') }}"
                     class="d-block w-100 slider-img"
                     alt="Kegiatan sekolah">

                <div class="carousel-caption">
                    <h1>Kegiatan Sekolah</h1>
                    <p>Belajar, berkarya, dan tumbuh bersama.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('uploads/galeri/siswa.jpg') }}"
                     class="d-block w-100 slider-img"
                     alt="Aktivitas siswa">

                <div class="carousel-caption">
                    <h1>Semangat Meraih Prestasi</h1>
                    <p>Mendukung siswa untuk mengembangkan potensi terbaiknya.</p>
                </div>
            </div>

        </div>

        <button class="carousel-control-prev" type="button"
                data-bs-target="#sliderSekolah" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Sebelumnya</span>
        </button>

        <button class="carousel-control-next" type="button"
                data-bs-target="#sliderSekolah" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Berikutnya</span>
        </button>

    </div>
</section>

<!-- PROFIL SEKOLAH -->
<section id="profil" class="section">
    <div class="container">
        <div class="row align-items-center g-4">

            <div class="col-md-6">
                @if(isset($profil) && $profil && $profil->foto)
                    <img src="{{ asset('uploads/profil/' . $profil->foto) }}"
                         alt="Foto SDN CITATAH"
                         class="img-fluid rounded shadow-sm">
                @else
                    <img src="{{ asset('uploads/galeri/sekolah.jpg') }}"
                         alt="Gedung sekolah"
                         class="img-fluid rounded shadow-sm">
                @endif
            </div>

            <div class="col-md-6">
                <h2 class="judul">Profil Sekolah</h2>

                <h4>
                    {{ isset($profil) && $profil
                        ? $profil->nama_sekolah
                        : 'SDN CITATAH' }}
                </h4>

                <p>
                    {{ isset($profil) && $profil && $profil->deskripsi
                        ? $profil->deskripsi
                        : 'SDN CITATAH merupakan sekolah dasar yang mendukung kegiatan belajar dan perkembangan siswa.' }}
                </p>

                <p>
                    <i class="bi bi-geo-alt-fill text-primary"></i>
                    {{ isset($profil) && $profil
                        ? $profil->alamat
                        : 'Kp. Citatah, Desa Sukaherang, Kecamatan Singaparna, Kabupaten Tasikmalaya, Jawa Barat.' }}
                </p>

                <a href="#keunggulan" class="tombol">Selengkapnya</a>
            </div>

        </div>
    </div>
</section>

<!-- KEUNGGULAN -->
<section id="keunggulan" class="section bg-white">
    <div class="container">

        <div class="text-center mb-4">
            <h2 class="judul">Keunggulan Sekolah</h2>
            <p>Lingkungan belajar yang mendukung perkembangan siswa.</p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="kotak text-center">
                    <i class="bi bi-book ikon"></i>
                    <h5>Pembelajaran</h5>
                    <p>Mendukung siswa untuk belajar dan memahami ilmu pengetahuan.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="kotak text-center">
                    <i class="bi bi-people ikon"></i>
                    <h5>Kebersamaan</h5>
                    <p>Membangun sikap saling menghargai dan bekerja sama.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="kotak text-center">
                    <i class="bi bi-trophy ikon"></i>
                    <h5>Pengembangan Bakat</h5>
                    <p>Mendorong siswa untuk mengembangkan kemampuan dan minatnya.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- BERITA -->
<section id="berita" class="section">
    <div class="container">

        <div class="text-center mb-4">
            <h2 class="judul">Berita Sekolah</h2>
            <p>Informasi dan kegiatan terbaru dari sekolah.</p>
        </div>

        <div class="row g-4">

            @if(isset($berita) && count($berita) > 0)

                @foreach($berita as $item)
                    <div class="col-md-4">
                        <div class="kotak p-0 overflow-hidden">

                            @if($item->gambar)
                                <img src="{{ asset('uploads/berita/' . $item->gambar) }}"
                                     class="foto-berita"
                                     alt="{{ $item->judul }}">
                            @else
                                <div class="bg-light d-flex align-items-center justify-content-center"
                                     style="height:190px">
                                    <i class="bi bi-newspaper fs-1 text-secondary"></i>
                                </div>
                            @endif

                            <div class="p-3">
                                <h5>{{ $item->judul }}</h5>

                                <p>
                                    {{ \Illuminate\Support\Str::limit(strip_tags($item->isi), 100) }}
                                </p>
                            </div>

                        </div>
                    </div>
                @endforeach

            @else
                <div class="col-12 text-center">
                    <p>Belum ada berita sekolah.</p>
                </div>
            @endif

        </div>
    </div>
</section>

<!-- GALERI -->
<section id="galeri" class="section bg-white">
    <div class="container">

        <div class="text-center mb-4">
            <h2 class="judul">Galeri Sekolah</h2>
            <p>Dokumentasi kegiatan SDN CITATAH.</p>
        </div>

        <div class="row g-3">

            <div class="col-md-4 col-6">
                <img src="{{ asset('uploads/galeri/sekolah.jpg') }}"
                     class="foto-galeri"
                     alt="Gedung sekolah">
            </div>

            <div class="col-md-4 col-6">
                <img src="{{ asset('uploads/galeri/kegiatan.jpg') }}"
                     class="foto-galeri"
                     alt="Kegiatan sekolah">
            </div>

            <div class="col-md-4 col-6">
                <img src="{{ asset('uploads/galeri/siswa.jpg') }}"
                     class="foto-galeri"
                     alt="Aktivitas siswa">
            </div>

        </div>
    </div>
</section>

<!-- FOOTER -->
<footer>
    <div class="container">
        <p class="mb-1">&copy; {{ date('Y') }} SDN CITATAH</p>
        <small>Website Informasi SDN CITATAH</small>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
