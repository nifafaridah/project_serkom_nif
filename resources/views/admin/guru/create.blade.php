@extends('admin.layouts.main')

@section('content')
<div class="page-header mb-4">
  <div class="page-block">
    <div class="row align-items-center">
      <div class="col-md-12">
        <div class="page-header-title">
          <h5 class="m-b-10">Tambah Data Guru</h5>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('guru.index') }}">Guru</a></li>
          <li class="breadcrumb-item" aria-current="page">Tambah Data</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="card mb-0">
  <div class="card-header">
    <h5 class="mb-0">Form Input Data Guru</h5>
  </div>
  <div class="card-body">
    <form action="{{ route('guru.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="mb-3">
        <label class="form-label">Nama Guru</label>
        <input type="text" name="nama_guru" class="form-control" placeholder="Masukkan nama lengkap guru" required>
      </div>

      <div class="mb-3">
        <label class="form-label">NIP</label>
        <input type="text" name="nip" class="form-control" placeholder="Masukkan NIP guru" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Mata Pelajaran (Mapel)</label>
        <input type="text" name="mapel" class="form-control" placeholder="Contoh: Matematika, Bahasa Indonesia" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Foto Guru (Opsional)</label>
        <input type="file" name="foto" class="form-control" accept="image/*">
      </div>

      <div class="d-flex justify-content-end gap-2">
        <a href="{{ route('guru.index') }}" class="btn btn-secondary">Batal</a>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
      </div>
    </form>
  </div>
</div>
@endsection