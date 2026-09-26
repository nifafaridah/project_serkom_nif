@extends('admin.layouts.main')
@section('content')
<div class="page-header mb-4">
  <div class="page-block">
    <div class="row align-items-center">
      <div class="col-md-12">
        <div class="page-header-title">
          <h5 class="m-b-10">Data Guru</h5>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item" aria-current="page">Guru</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="card mb-0">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h5 class="mb-0">Daftar Guru</h5>
    <a href="{{ route('guru.create') }}" class="btn btn-primary btn-sm">
      <i class="ti ti-plus me-1"></i> Tambah Guru
    </a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-hover align-middle">
        <thead>
          <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama Guru</th>
            <th>NIP</th>
            <th>Mapel</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @forelse($guru as $key => $item)
          <tr>
            <td>{{ $key + 1 }}</td>
            <td>
              @if($item->foto)
                <img src="{{ asset('uploads/guru/' . $item->foto) }}" alt="{{ $item->nama_guru }}" class="rounded-circle" width="40" height="40">
              @else
                <span class="badge bg-light-secondary text-secondary">Tidak Ada Foto</span>
              @endif
            </td>
            <td><strong>{{ $item->nama_guru }}</strong></td>
            <td>{{ $item->nip }}</td>
            <td>{{ $item->mapel }}</td>
            <td>
              <a href="#" class="btn btn-warning btn-sm"><i class="ti ti-edit"></i></a>
              <a href="#" class="btn btn-danger btn-sm"><i class="ti ti-trash"></i></a>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="6" class="text-center text-muted py-4">Belum ada data guru.</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection