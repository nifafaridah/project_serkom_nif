@extends('admin.layouts.main')

@section('content')

<div class="row">

    {{-- BAGIAN ATAS --}}
    <div class="col-12">
        <div class="page-header mb-4">
            <div class="page-block">

                <div class="page-header-title">
                    <h5 class="mb-0">Data Siswa</h5>
                </div>

                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">
                            Home
                        </a>
                    </li>

                    <li class="breadcrumb-item" aria-current="page">
                        Siswa
                    </li>
                </ul>

            </div>
        </div>
    </div>


    {{-- DATA SISWA --}}
    <div class="col-12">

        <div class="card">

            <div class="card-header d-flex justify-content-between align-items-center">

                <div>
                    <h5 class="mb-1">Daftar Siswa</h5>
                    <p class="text-muted mb-0">
                        Kelola data siswa sekolah
                    </p>
                </div>

                <a href="{{ route('siswa.create') }}"
                   class="btn btn-primary">

                    <i class="ti ti-plus me-1"></i>
                    Tambah Siswa

                </a>

            </div>

            <div class="card-body">

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="table-responsive">

                    <table class="table table-hover align-middle">

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NISN</th>
                                <th>Nama Siswa</th>
                                <th>Jenis Kelamin</th>
                                <th>Tahun Masuk</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse($siswa as $data)

                                <tr>

                                    <td>
                                        {{ $loop->iteration }}
                                    </td>

                                    <td>
                                        {{ $data->nisn }}
                                    </td>

                                    <td>
                                        {{ $data->nama_siswa }}
                                    </td>

                                    <td>
                                        {{ $data->jenis_kelamin }}
                                    </td>

                                    <td>
                                        {{ $data->tahun_masuk }}
                                    </td>

                                    <td>

                                        <a href="{{ route('siswa.edit', $data->id_siswa) }}"
                                           class="btn btn-warning btn-sm">

                                            <i class="ti ti-edit"></i>

                                        </a>

                                        <form action="{{ route('siswa.destroy', $data->id_siswa) }}"
                                              method="POST"
                                              class="d-inline">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Yakin ingin menghapus data siswa ini?')">

                                                <i class="ti ti-trash"></i>

                                            </button>

                                        </form>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="6"
                                        class="text-center py-5">

                                        <i class="ti ti-users fs-1 text-muted"></i>

                                        <p class="text-muted mb-0 mt-2">
                                            Belum ada data siswa
                                        </p>

                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection