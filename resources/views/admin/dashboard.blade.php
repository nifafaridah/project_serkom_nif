@extends('admin.layouts.main')

@section('content')

<div class="pc-container">
    <div class="pc-content">

        {{-- HEADER --}}
        <div class="page-header">
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

                            <li class="breadcrumb-item">
                                Dashboard
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>


        {{-- KARTU STATISTIK --}}
        <div class="row">

            {{-- TOTAL GURU --}}
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">

                        <div class="d-flex align-items-center justify-content-between">

                            <div>
                                <p class="text-muted mb-1">
                                    Total Guru
                                </p>

                                <h3 class="mb-0">
                                    0
                                </h3>

                                <small class="text-muted">
                                    Data guru sekolah
                                </small>
                            </div>

                            <div class="bg-primary text-white rounded p-3">
                                <i class="ti ti-school fs-3"></i>
                            </div>

                        </div>

                    </div>
                </div>
            </div>


            {{-- TOTAL SISWA --}}
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">

                        <div class="d-flex align-items-center justify-content-between">

                            <div>
                                <p class="text-muted mb-1">
                                    Total Siswa
                                </p>

                                <h3 class="mb-0">
                                    0
                                </h3>

                                <small class="text-muted">
                                    Data siswa sekolah
                                </small>
                            </div>

                            <div class="bg-success text-white rounded p-3">
                                <i class="ti ti-users fs-3"></i>
                            </div>

                        </div>

                    </div>
                </div>
            </div>


            {{-- TOTAL USER --}}
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">

                        <div class="d-flex align-items-center justify-content-between">

                            <div>
                                <p class="text-muted mb-1">
                                    Total User
                                </p>

                                <h3 class="mb-0">
                                    0
                                </h3>

                                <small class="text-muted">
                                    Pengguna sistem
                                </small>
                            </div>

                            <div class="bg-warning text-white rounded p-3">
                                <i class="ti ti-user fs-3"></i>
                            </div>

                        </div>

                    </div>
                </div>
            </div>


            {{-- TOTAL GALERI --}}
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">

                        <div class="d-flex align-items-center justify-content-between">

                            <div>
                                <p class="text-muted mb-1">
                                    Total Galeri
                                </p>

                                <h3 class="mb-0">
                                    0
                                </h3>

                                <small class="text-muted">
                                    Foto kegiatan
                                </small>
                            </div>

                            <div class="bg-danger text-white rounded p-3">
                                <i class="ti ti-photo fs-3"></i>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>


        {{-- BAGIAN INFORMASI --}}
        <div class="row">

            {{-- SELAMAT DATANG --}}
            <div class="col-md-8">

                <div class="card">

                    <div class="card-header">
                        <h5>Selamat Datang 👋</h5>
                    </div>

                    <div class="card-body">

                        <h4>Dashboard Admin Sekolah</h4>

                        <p class="text-muted">
                            Selamat datang di Sistem Informasi Sekolah.
                            Melalui halaman ini admin dapat mengelola
                            data sekolah, guru, siswa, user, dan galeri.
                        </p>

                        <a href="{{ route('profil-sekolah') }}"
                           class="btn btn-primary">

                            <i class="ti ti-school me-1"></i>

                            Kelola Profil Sekolah

                        </a>

                    </div>

                </div>

            </div>


            {{-- INFORMASI SEKOLAH --}}
            <div class="col-md-4">

                <div class="card">

                    <div class="card-header">
                        <h5>Informasi Sekolah</h5>
                    </div>

                    <div class="card-body">

                        <div class="d-flex align-items-center mb-3">

                            <div class="bg-primary text-white rounded p-2 me-3">
                                <i class="ti ti-school"></i>
                            </div>

                            <div>
                                <h6 class="mb-0">
                                    Profil Sekolah
                                </h6>

                                <small class="text-muted">
                                    Kelola informasi sekolah
                                </small>
                            </div>

                        </div>


                        <div class="d-flex align-items-center mb-3">

                            <div class="bg-success text-white rounded p-2 me-3">
                                <i class="ti ti-users"></i>
                            </div>

                            <div>
                                <h6 class="mb-0">
                                    Data Siswa
                                </h6>

                                <small class="text-muted">
                                    Kelola data siswa
                                </small>
                            </div>

                        </div>


                        <div class="d-flex align-items-center">

                            <div class="bg-warning text-white rounded p-2 me-3">
                                <i class="ti ti-user"></i>
                            </div>

                            <div>
                                <h6 class="mb-0">
                                    Data Guru
                                </h6>

                                <small class="text-muted">
                                    Kelola data guru
                                </small>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- AKTIVITAS --}}
        <div class="row">

            <div class="col-md-12">

                <div class="card">

                    <div class="card-header">
                        <h5>Menu Pengelolaan Sekolah</h5>
                    </div>

                    <div class="card-body">

                        <div class="row">

                            <div class="col-md-3">
                                <a href="{{ route('profil-sekolah') }}"
                                   class="text-decoration-none">

                                    <div class="border rounded p-3 text-center">

                                        <i class="ti ti-school fs-2 text-primary"></i>

                                        <h6 class="mt-2 mb-0">
                                            Profil Sekolah
                                        </h6>

                                    </div>

                                </a>
                            </div>


                            <div class="col-md-3">
                                <div class="border rounded p-3 text-center">

                                    <i class="ti ti-users fs-2 text-success"></i>

                                    <h6 class="mt-2 mb-0">
                                        Data Siswa
                                    </h6>

                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="border rounded p-3 text-center">

                                    <i class="ti ti-user fs-2 text-warning"></i>

                                    <h6 class="mt-2 mb-0">
                                        Data Guru
                                    </h6>

                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="border rounded p-3 text-center">

                                    <i class="ti ti-photo fs-2 text-danger"></i>

                                    <h6 class="mt-2 mb-0">
                                        Galeri
                                    </h6>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>

@endsection