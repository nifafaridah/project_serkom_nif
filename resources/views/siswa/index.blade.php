@extends('admin.layouts.main')

@section('content')
<div class="page-header mb-4">
  <div class="page-block">
    <div class="row align-items-center">
      <div class="col-md-12">
        <div class="page-header-title">
          <h5 class="m-b-10">Data Siswa</h5>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item" aria-current="page">Siswa</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="card mb-0">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h5 class="mb-0">Daftar Siswa</h5>
    <a href="{{ route('siswa.create') }}" class="btn btn-primary btn-sm">
      <i class="ti ti-plus me-1"></i> Tambah Siswa
    </a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-hover align-middle">
        <thead>
          <tr>
            <th>No</th>
            <th>Foto</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>L/P</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @forelse($siswa as $key => $item)
          <tr>
            <td>{{ $key + 1 }}</td>
            <td>
              @if(!empty($item->foto))
                <img src="{{ asset('uploads/siswa/' . $item->foto) }}" alt="{{ $item->nama_siswa }}" class="rounded-circle" width="40" height="40">
              @else
                <span class="badge bg-light-secondary text-secondary">Tidak Ada Foto</span>
              @endif
            </td>
            <td>{{ $item->nis }}</td>
            <td><strong>{{ $item->nama_siswa }}</strong></td>
            <td>{{ $item->kelas }}</td>
            <td>{{ $item->jenis_kelamin == 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
            <td>
              <a href="#" class="btn btn-warning btn-sm"><i class="ti ti-edit"></i></a>
              <a href="#" class="btn btn-danger btn-sm"><i class="ti ti-trash"></i></a>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="7" class="text-center text-muted py-4">Belum ada data siswa.</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection