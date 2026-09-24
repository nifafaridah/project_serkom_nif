@extends('admin.layouts.main')

@section('content')
<div class="page-header mb-4">
  <div class="page-block">
    <div class="row align-items-center">
      <div class="col-md-12">
        <div class="page-header-title">
          <h5 class="m-b-10">Tambah Data Siswa</h5>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('siswa.index') }}">Siswa</a></li>
          <li class="breadcrumb-item" aria-current="page">Tambah Data</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="card mb-0">
  <div class="card-header">
    <h5 class="mb-0">Form Input Data Siswa</h5>
  </div>
  <div class="card-body">
    <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="mb-3">
        <label class="form-label">NIS</label>
        <input type="text" name="nis" class="form-control" placeholder="Masukkan NIS" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Nama Siswa</label>
        <input type="text" name="nama_siswa" class="form-control" placeholder="Masukkan nama lengkap siswa" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Kelas</label>
        <input type="text" name="kelas" class="form-control" placeholder="Contoh: X IPA 1" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-select" required>
          <option value="">-- Pilih Jenis Kelamin --</option>
          <option value="L">Laki-Laki</option>
          <option value="P">Perempuan</option>
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">Alamat</label>
        <textarea name="alamat" class="form-control" rows="3" placeholder="Masukkan alamat siswa"></textarea>
      </div>

      <div class="mb-3">
        <label class="form-label">Foto Siswa (Opsional)</label>
        <input type="file" name="foto" class="form-control" accept="image/*">
      </div>

      <div class="d-flex justify-content-end gap-2">
        <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Batal</a>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
      </div>
    </form>
  </div>
</div>
@endsection