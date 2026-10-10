<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Guru - SDN CITATAH</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>
        body {
            background: #f3f7ff;
            font-family: Arial, sans-serif;
            color: #263238;
        }

        .navbar {
            background: white;
        }

        .judul {
            color: #1769ff;
            font-weight: bold;
        }

        .detail-card {
            border: none;
            border-radius: 20px;
            overflow: hidden;
        }

        .foto-guru {
            width: 180px;
            height: 180px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid #e3edff;
        }

        .foto-placeholder {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            background: #e3edff;
            color: #1769ff;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
        }

        .info-item {
            background: #f3f7ff;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 12px;
            overflow-wrap: anywhere;
        }

        .btn-primary {
            background: #1769ff;
            border-color: #1769ff;
        }

        .btn-primary:hover {
            background: #0d52d6;
            border-color: #0d52d6;
        }

        footer {
            margin-top: 30px;
        }
    </style>
</head>

<body>

{{-- NAVBAR --}}
<nav class="navbar shadow-sm py-3">
    <div class="container">
        <a href="{{ url('/') }}"
           class="navbar-brand fw-bold text-primary">
            SDN CITATAH
        </a>

        <a href="{{ url('/#guru') }}"
           class="btn btn-outline-primary">
            Kembali
        </a>
    </div>
</nav>

{{-- DETAIL GURU --}}
<section class="container py-5">

    <div class="card detail-card shadow-sm mx-auto"
         style="max-width: 750px;">

        <div class="card-body p-4 p-md-5">

            {{-- FOTO DAN NAMA GURU --}}
            <div class="text-center mb-4">

                @if (!empty($guru->foto))
                    <img
                        src="{{ asset('uploads/guru/' . $guru->foto) }}"
                        alt="Foto {{ $guru->nama_guru }}"
                        class="foto-guru mb-3"
                    >
                @else
                    <div class="foto-placeholder mb-3">
                        <span>Foto belum tersedia</span>
                    </div>
                @endif

                <h2 class="judul">
                    {{ $guru->nama_guru }}
                </h2>

                <p class="text-secondary mb-0">
                    Guru SDN CITATAH
                </p>

            </div>

            <hr class="my-4">

            {{-- INFORMASI GURU --}}
            <h4 class="fw-bold mb-4">
                Informasi Guru
            </h4>

            <div class="info-item">
                <div class="text-secondary small mb-1">
                    Nama Lengkap
                </div>

                <div class="fw-semibold">
                    {{ $guru->nama_guru ?: 'Belum tersedia' }}
                </div>
            </div>

            <div class="info-item">
                <div class="text-secondary small mb-1">
                    NIP
                </div>

                <div class="fw-semibold">
                    {{ $guru->nip ?: 'Belum tersedia' }}
                </div>
            </div>

            <div class="info-item">
                <div class="text-secondary small mb-1">
                    Mata Pelajaran
                </div>

                <div class="fw-semibold">
                    {{ $guru->mapel ?: 'Belum tersedia' }}
                </div>
            </div>

            {{-- TOMBOL KEMBALI --}}
            <div class="text-center mt-4">
                <a href="{{ url('/#guru') }}"
                   class="btn btn-primary px-4 py-2">
                    Kembali ke Daftar Guru
                </a>
            </div>

        </div>
    </div>

</section>

{{-- FOOTER --}}
<footer class="bg-white text-center text-secondary py-4">
    &copy; {{ date('Y') }} SDN CITATAH.
    Semua Hak Dilindungi.
</footer>

</body>
</html>
