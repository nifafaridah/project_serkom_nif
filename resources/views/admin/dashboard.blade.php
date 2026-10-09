
@extends('admin.layouts.main')

@section('content')

{{-- HEADER DASHBOARD --}}
<div class="page-header mb-4">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Dashboard Sekolah</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        Dashboard
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

{{-- KARTU STATISTIK --}}
<div class="row g-3 mb-4">

    {{-- GURU --}}
    <div class="col-xl-3 col-md-6">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="text-muted">Total Guru</span>
                        <h2 class="fw-bold mb-1 mt-2">{{ $totalGuru }}</h2>
                        <small class="text-muted">Data guru sekolah</small>
                    </div>
                    <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width:55px;height:55px;">
                        <i class="ti ti-user-check fs-2 text-primary"></i>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="{{ route('guru.index') }}" class="text-primary text-decoration-none">Kelola Guru <i class="ti ti-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    {{-- SISWA --}}
    <div class="col-xl-3 col-md-6">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="text-muted">Total Siswa</span>
                        <h2 class="fw-bold mb-1 mt-2">{{ $totalSiswa }}</h2>
                        <small class="text-muted">Data siswa sekolah</small>
                    </div>
                    <div class="bg-success bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width:55px;height:55px;">
                        <i class="ti ti-users fs-2 text-success"></i>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="{{ route('siswa.index') }}" class="text-success text-decoration-none">Kelola Siswa <i class="ti ti-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    {{-- USER --}}
    <div class="col-xl-3 col-md-6">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="text-muted">Total User</span>
                        <h2 class="fw-bold mb-1 mt-2">{{ $totalUser }}</h2>
                        <small class="text-muted">Pengguna sistem</small>
                    </div>
                    <div class="bg-warning bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width:55px;height:55px;">
                        <i class="ti ti-users-group fs-2 text-warning"></i>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="{{ route('user.index') }}" class="text-warning text-decoration-none">Kelola User <i class="ti ti-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    {{-- GALERI --}}
    <div class="col-xl-3 col-md-6">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="text-muted">Total Galeri</span>
                        <h2 class="fw-bold mb-1 mt-2">{{ $totalGaleri }}</h2>
                        <small class="text-muted">Foto kegiatan</small>
                    </div>
                    <div class="bg-danger bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width:55px;height:55px;">
                        <i class="ti ti-photo fs-2 text-danger"></i>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="{{ route('galeri.index') }}" class="text-danger text-decoration-none">Kelola Galeri <i class="ti ti-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    {{-- PENGUMUMAN --}}
    <div class="col-xl-3 col-md-6">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="text-muted">Total Pengumuman</span>
                        <h2 class="fw-bold mb-1 mt-2">{{ $totalPengumuman }}</h2>
                        <small class="text-muted">Informasi sekolah</small>
                    </div>
                    <div class="bg-danger bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width:55px;height:55px;">
                        <i class="ti ti-speakerphone fs-2 text-danger"></i>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="{{ route('pengumuman.index') }}" class="text-danger text-decoration-none">Kelola Pengumuman <i class="ti ti-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    {{-- EKSTRAKURIKULER --}}
    <div class="col-xl-3 col-md-6">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="text-muted">Ekstrakurikuler</span>
                        <h2 class="fw-bold mb-1 mt-2">{{ $totalEkstrakurikuler }}</h2>
                        <small class="text-muted">Kegiatan sekolah</small>
                    </div>
                    <div class="bg-info bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width:55px;height:55px;">
                        <i class="ti ti-trophy fs-2 text-info"></i>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="{{ route('ekstrakurikuler.index') }}" class="text-info text-decoration-none">Kelola Ekstrakurikuler <i class="ti ti-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    {{-- BERITA --}}
    <div class="col-xl-3 col-md-6">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="text-muted">Berita</span>
                        <h2 class="fw-bold mb-1 mt-2">{{ $totalBerita }}</h2>
                        <small class="text-muted">Informasi sekolah</small>
                    </div>
                    <div class="bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width:55px;height:55px;">
                        <i class="ti ti-news fs-2 text-secondary"></i>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="{{ route('berita.index') }}" class="text-secondary text-decoration-none">Kelola Berita <i class="ti ti-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    {{-- PRESTASI --}}
    <div class="col-xl-3 col-md-6">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="text-muted">Prestasi</span>
                        <h2 class="fw-bold mb-1 mt-2">{{ $totalPrestasi }}</h2>
                        <small class="text-muted">Prestasi sekolah</small>
                    </div>
                    <div class="bg-warning bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width:55px;height:55px;">
                        <i class="ti ti-medal fs-2 text-warning"></i>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="{{ route('prestasi.index') }}" class="text-warning text-decoration-none">Kelola Prestasi <i class="ti ti-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

</div>

{{-- SELAMAT DATANG DAN INFORMASI SEKOLAH --}}
<div class="row g-3 mb-4 align-items-stretch">

    {{-- SELAMAT DATANG --}}
    <div class="col-12 col-xl-7 col-lg-7">
        <div class="card border-0 shadow-sm h-100 mb-0">
            <div class="card-body p-4">

                <div class="d-flex align-items-center mb-3">
                    <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width:55px;height:55px;">
                        <i class="ti ti-school fs-2 text-primary"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold mb-1">Selamat Datang 👋</h4>
                        <span class="text-muted">Dashboard Admin Sekolah</span>
                    </div>
                </div>

                <p class="text-muted mb-4">
                    Selamat datang di Sistem Informasi Sekolah.
                    Melalui dashboard ini admin dapat mengelola data sekolah,
                    guru, siswa, ekstrakurikuler, prestasi, berita, galeri,
                    pengumuman, dan pengguna sistem.
                </p>

                {{-- TOMBOL AKSES CEPAT --}}
                <div class="d-flex flex-wrap gap-2">
                    <a href="{{ route('profil-sekolah.index') }}" class="btn btn-primary">
                        <i class="ti ti-school me-1"></i> Profil Sekolah
                    </a>
                    <a href="{{ route('guru.index') }}" class="btn btn-light-primary">
                        <i class="ti ti-user-check me-1"></i> Data Guru
                    </a>
                    <a href="{{ route('siswa.index') }}" class="btn btn-light-success">
                        <i class="ti ti-users me-1"></i> Data Siswa
                    </a>
                    <a href="{{ route('prestasi.index') }}" class="btn btn-light-warning">
                        <i class="ti ti-trophy me-1"></i> Prestasi
                    </a>
                </div>

                <hr class="my-4">

                {{-- MENU TAMBAHAN DI BAWAH SELAMAT DATANG --}}
                <h6 class="fw-bold mb-3">Menu Sekolah Lainnya</h6>

                <div class="row g-3">

                    <div class="col-md-6">
                        <a href="{{ route('ekstrakurikuler.index') }}" class="text-decoration-none">
                            <div class="p-3 rounded bg-light h-100">
                                <div class="d-flex align-items-center">
                                    <i class="ti ti-trophy fs-3 text-info me-3"></i>
                                    <div>
                                        <h6 class="fw-bold text-dark mb-1">Ekstrakurikuler</h6>
                                        <small class="text-muted">Kelola kegiatan ekstrakurikuler sekolah</small>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6">
                        <a href="{{ route('berita.index') }}" class="text-decoration-none">
                            <div class="p-3 rounded bg-light h-100">
                                <div class="d-flex align-items-center">
                                    <i class="ti ti-news fs-3 text-primary me-3"></i>
                                    <div>
                                        <h6 class="fw-bold text-dark mb-1">Berita Sekolah</h6>
                                        <small class="text-muted">Kelola informasi dan berita sekolah</small>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6">
                        <a href="{{ route('pengumuman.index') }}" class="text-decoration-none">
                            <div class="p-3 rounded bg-light h-100">
                                <div class="d-flex align-items-center">
                                    <i class="ti ti-speakerphone fs-3 text-danger me-3"></i>
                                    <div>
                                        <h6 class="fw-bold text-dark mb-1">Pengumuman</h6>
                                        <small class="text-muted">Kelola pengumuman sekolah</small>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6">
                        <a href="{{ route('galeri.index') }}" class="text-decoration-none">
                            <div class="p-3 rounded bg-light h-100">
                                <div class="d-flex align-items-center">
                                    <i class="ti ti-photo fs-3 text-success me-3"></i>
                                    <div>
                                        <h6 class="fw-bold text-dark mb-1">Galeri Sekolah</h6>
                                        <small class="text-muted">Kelola foto kegiatan sekolah</small>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </div>

    {{-- INFORMASI SEKOLAH --}}
    <div class="col-12 col-xl-5 col-lg-5">
        <div class="card border-0 shadow-sm h-100 mb-0">

            <div class="card-header">
                <h5 class="mb-0">Informasi Sekolah</h5>
            </div>

            <div class="card-body">

                <div class="d-flex align-items-center mb-4">
                    <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width:45px;height:45px;">
                        <i class="ti ti-school text-primary fs-4"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Profil Sekolah</h6>
                        <small class="text-muted">Kelola informasi sekolah</small>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-4">
                    <div class="bg-success bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width:45px;height:45px;">
                        <i class="ti ti-users text-success fs-4"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Data Siswa</h6>
                        <small class="text-muted">Kelola data siswa</small>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-4">
                    <div class="bg-warning bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width:45px;height:45px;">
                        <i class="ti ti-user-check text-warning fs-4"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Data Guru</h6>
                        <small class="text-muted">Kelola data guru</small>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-4">
                    <div class="bg-warning bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width:45px;height:45px;">
                        <i class="ti ti-medal text-warning fs-4"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Prestasi</h6>
                        <small class="text-muted">Kelola prestasi sekolah</small>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <div class="bg-danger bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width:45px;height:45px;">
                        <i class="ti ti-photo text-danger fs-4"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Galeri Sekolah</h6>
                        <small class="text-muted">Kelola foto kegiatan</small>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

{{-- MENU PENGELOLAAN SEKOLAH --}}
<div class="card border-0 shadow-sm mb-0">
    <div class="card-header">
        <h5 class="mb-0">Menu Pengelolaan Sekolah</h5>
    </div>

    <div class="card-body">
        <div class="row g-3">

            {{-- PROFIL --}}
            <div class="col-xl-3 col-md-4 col-sm-6">
                <a href="{{ route('profil-sekolah.index') }}" class="text-decoration-none">
                    <div class="card border h-100 mb-0">
                        <div class="card-body text-center p-4">
                            <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width:65px;height:65px;">
                                <i class="ti ti-school fs-1 text-primary"></i>
                            </div>
                            <h6 class="fw-bold text-dark">Profil Sekolah</h6>
                            <small class="text-muted">Kelola profil sekolah</small>
                        </div>
                    </div>
                </a>
            </div>

            {{-- GURU --}}
            <div class="col-xl-3 col-md-4 col-sm-6">
                <a href="{{ route('guru.index') }}" class="text-decoration-none">
                    <div class="card border h-100 mb-0">
                        <div class="card-body text-center p-4">
                            <div class="bg-warning bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width:65px;height:65px;">
                                <i class="ti ti-user-check fs-1 text-warning"></i>
                            </div>
                            <h6 class="fw-bold text-dark">Data Guru</h6>
                            <small class="text-muted">Kelola data guru</small>
                        </div>
                    </div>
                </a>
            </div>

            {{-- SISWA --}}
            <div class="col-xl-3 col-md-4 col-sm-6">
                <a href="{{ route('siswa.index') }}" class="text-decoration-none">
                    <div class="card border h-100 mb-0">
                        <div class="card-body text-center p-4">
                            <div class="bg-success bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width:65px;height:65px;">
                                <i class="ti ti-users fs-1 text-success"></i>
                            </div>
                            <h6 class="fw-bold text-dark">Data Siswa</h6>
                            <small class="text-muted">Kelola data siswa</small>
                        </div>
                    </div>
                </a>
            </div>

            {{-- EKSTRAKURIKULER --}}
            <div class="col-xl-3 col-md-4 col-sm-6">
                <a href="{{ route('ekstrakurikuler.index') }}" class="text-decoration-none">
                    <div class="card border h-100 mb-0">
                        <div class="card-body text-center p-4">
                            <div class="bg-info bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width:65px;height:65px;">
                                <i class="ti ti-trophy fs-1 text-info"></i>
                            </div>
                            <h6 class="fw-bold text-dark">Ekstrakurikuler</h6>
                            <small class="text-muted">Kelola kegiatan sekolah</small>
                        </div>
                    </div>
                </a>
            </div>

            {{-- PRESTASI --}}
            <div class="col-xl-3 col-md-4 col-sm-6">
                <a href="{{ route('prestasi.index') }}" class="text-decoration-none">
                    <div class="card border h-100 mb-0">
                        <div class="card-body text-center p-4">
                            <div class="bg-warning bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width:65px;height:65px;">
                                <i class="ti ti-medal fs-1 text-warning"></i>
                            </div>
                            <h6 class="fw-bold text-dark">Prestasi</h6>
                            <small class="text-muted">Kelola prestasi sekolah</small>
                        </div>
                    </div>
                </a>
            </div>

            {{-- BERITA --}}
            <div class="col-xl-3 col-md-4 col-sm-6">
                <a href="{{ route('berita.index') }}" class="text-decoration-none">
                    <div class="card border h-100 mb-0">
                        <div class="card-body text-center p-4">
                            <div class="bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width:65px;height:65px;">
                                <i class="ti ti-news fs-1 text-secondary"></i>
                            </div>
                            <h6 class="fw-bold text-dark">Berita</h6>
                            <small class="text-muted">Kelola berita sekolah</small>
                        </div>
                    </div>
                </a>
            </div>

            {{-- PENGUMUMAN --}}
            <div class="col-xl-3 col-md-4 col-sm-6">
                <a href="{{ route('pengumuman.index') }}" class="text-decoration-none">
                    <div class="card border h-100 mb-0">
                        <div class="card-body text-center p-4">
                            <div class="bg-danger bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width:65px;height:65px;">
                                <i class="ti ti-speakerphone fs-1 text-danger"></i>
                            </div>
                            <h6 class="fw-bold text-dark">Pengumuman</h6>
                            <small class="text-muted">Kelola pengumuman</small>
                        </div>
                    </div>
                </a>
            </div>

            {{-- GALERI --}}
            <div class="col-xl-3 col-md-4 col-sm-6">
                <a href="{{ route('galeri.index') }}" class="text-decoration-none">
                    <div class="card border h-100 mb-0">
                        <div class="card-body text-center p-4">
                            <div class="bg-danger bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width:65px;height:65px;">
                                <i class="ti ti-photo fs-1 text-danger"></i>
                            </div>
                            <h6 class="fw-bold text-dark">Galeri</h6>
                            <small class="text-muted">Kelola foto kegiatan</small>
                        </div>
                    </div>
                </a>
            </div>

            {{-- USER --}}
            <div class="col-xl-3 col-md-4 col-sm-6">
                <a href="{{ route('user.index') }}" class="text-decoration-none">
                    <div class="card border h-100 mb-0">
                        <div class="card-body text-center p-4">
                            <div class="bg-dark bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width:65px;height:65px;">
                                <i class="ti ti-user fs-1 text-dark"></i>
                            </div>
                            <h6 class="fw-bold text-dark">Kelola User</h6>
                            <small class="text-muted">Kelola pengguna sistem</small>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</div>

@endsection
