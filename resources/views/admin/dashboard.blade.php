@extends('admin.layouts.main')

@section('content')
<!-- Header Halaman -->
<div class="page-header mb-4">
  <div class="page-block">
    <div class="row align-items-center">
      <div class="col-md-12">
        <div class="page-header-title">
          <h5 class="m-b-10">Dashboard Sekolah</h5>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item" aria-current="page">Dashboard</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- 4 Kotak Kartu Statistik -->
<div class="row g-3 mb-4">
  <div class="col-xl-3 col-md-6">
    <div class="card h-100 mb-0">
      <div class="card-body p-3">
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <p class="text-muted mb-1 font-weight-bold">Total Guru</p>
            <h3 class="mb-0 fw-bold">0</h3>
            <small class="text-muted">Data guru sekolah</small>
          </div>
          <div class="btn btn-primary btn-icon disabled" style="width: 48px; height: 48px; display: flex; align-items: center; justify-content: center;">
            <i class="ti ti-academic-page fs-3"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-md-6">
    <div class="card h-100 mb-0">
      <div class="card-body p-3">
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <p class="text-muted mb-1 font-weight-bold">Total Siswa</p>
            <h3 class="mb-0 fw-bold">0</h3>
            <small class="text-muted">Data siswa sekolah</small>
          </div>
          <div class="btn btn-success btn-icon disabled" style="width: 48px; height: 48px; display: flex; align-items: center; justify-content: center;">
            <i class="ti ti-users fs-3"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-md-6">
    <div class="card h-100 mb-0">
      <div class="card-body p-3">
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <p class="text-muted mb-1 font-weight-bold">Total User</p>
            <h3 class="mb-0 fw-bold">0</h3>
            <small class="text-muted">Pengguna sistem</small>
          </div>
          <div class="btn btn-warning btn-icon disabled text-white" style="width: 48px; height: 48px; display: flex; align-items: center; justify-content: center;">
            <i class="ti ti-user-check fs-3"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-md-6">
    <div class="card h-100 mb-0">
      <div class="card-body p-3">
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <p class="text-muted mb-1 font-weight-bold">Total Galeri</p>
            <h3 class="mb-0 fw-bold">0</h3>
            <small class="text-muted">Foto kegiatan</small>
          </div>
          <div class="btn btn-danger btn-icon disabled" style="width: 48px; height: 48px; display: flex; align-items: center; justify-content: center;">
            <i class="ti ti-photo fs-3"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Selamat Datang & Informasi Sekolah -->
<div class="row g-3 mb-4">
  <div class="col-lg-8">
    <div class="card h-100 mb-0">
      <div class="card-header">
        <h5 class="mb-0">Selamat Datang 👋</h5>
      </div>
      <div class="card-body">
        <h4 class="fw-bold mb-2">Dashboard Admin Sekolah</h4>
        <p class="text-muted mb-4">Selamat datang di Sistem Informasi Sekolah. Melalui halaman ini admin dapat mengelola data sekolah, guru, siswa, user, dan galeri.</p>
        <a href="{{ route('profil-sekolah') }}" class="btn btn-primary">
          <i class="ti ti-school me-1"></i> Kelola Profil Sekolah
        </a>
      </div>
    </div>
  </div>

  <div class="col-lg-4">
    <div class="card h-100 mb-0">
      <div class="card-header">
        <h5 class="mb-0">Informasi Sekolah</h5>
      </div>
      <div class="card-body d-flex flex-column gap-3">
        <div class="d-flex align-items-center gap-3">
          <div class="btn btn-light-primary btn-icon disabled" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
            <i class="ti ti-school fs-4"></i>
          </div>
          <div>
            <h6 class="mb-0 fw-bold">Profil Sekolah</h6>
            <small class="text-muted">Kelola informasi sekolah</small>
          </div>
        </div>

        <div class="d-flex align-items-center gap-3">
          <div class="btn btn-light-success btn-icon disabled" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
            <i class="ti ti-users fs-4"></i>
          </div>
          <div>
            <h6 class="mb-0 fw-bold">Data Siswa</h6>
            <small class="text-muted">Kelola data siswa</small>
          </div>
        </div>

        <div class="d-flex align-items-center gap-3">
          <div class="btn btn-light-warning btn-icon disabled" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
            <i class="ti ti-user-check fs-4"></i>
          </div>
          <div>
            <h6 class="mb-0 fw-bold">Data Guru</h6>
            <small class="text-muted">Kelola data guru</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Menu Pengelolaan Sekolah -->
<div class="card mb-0">
  <div class="card-header">
    <h5 class="mb-0">Menu Pengelolaan Sekolah</h5>
  </div>
  <div class="card-body">
    <div class="row g-3 text-center">
      <div class="col-md-3 col-6">
        <a href="{{ route('profil-sekolah') }}" class="card card-hover border text-decoration-none p-3 h-100 d-flex flex-column align-items-center justify-content-center">
          <i class="ti ti-school fs-1 text-primary mb-2"></i>
          <span class="fw-bold text-dark">Profil Sekolah</span>
        </a>
      </div>
      <div class="col-md-3 col-6">
        <div class="card border p-3 h-100 d-flex flex-column align-items-center justify-content-center">
          <i class="ti ti-users fs-1 text-success mb-2"></i>
          <span class="fw-bold text-dark">Data Siswa</span>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="card border p-3 h-100 d-flex flex-column align-items-center justify-content-center">
          <i class="ti ti-user-check fs-1 text-warning mb-2"></i>
          <span class="fw-bold text-dark">Data Guru</span>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="card border p-3 h-100 d-flex flex-column align-items-center justify-content-center">
          <i class="ti ti-photo fs-1 text-danger mb-2"></i>
          <span class="fw-bold text-dark">Galeri</span>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection