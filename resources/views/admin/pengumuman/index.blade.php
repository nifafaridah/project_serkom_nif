@extends('admin.layouts.main')

@section('content')

<div class="container-fluid">

    {{-- Header halaman --}}
    <div class="page-header">
        <div class="row align-items-center">

            <div class="col">
                <h5 class="mb-0">Pengumuman</h5>
            </div>

            <div class="col-auto">
                <ul class="breadcrumb mb-0">

                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>

                    <li class="breadcrumb-item active">
                        Pengumuman
                    </li>

                </ul>
            </div>

        </div>
    </div>


    {{-- Card Pengumuman --}}
    <div class="card">

        {{-- Header Card --}}
        <div class="card-header">

            <div class="d-flex justify-content-between align-items-center">

                <div>
                    <h5 class="mb-1">
                        Daftar Pengumuman
                    </h5>

                    <p class="mb-0 text-muted">
                        Kelola data pengumuman sekolah
                    </p>
                </div>


                {{-- TAMBAH PENGUMUMAN --}}
                {{-- Hanya Administrator --}}
                @if(auth()->check() && strtolower(trim(auth()->user()->role)) === 'administrator')

                    <a href="{{ route('pengumuman.create') }}"
                       class="btn btn-primary">

                        <i class="ti ti-plus"></i>
                        Tambah Pengumuman

                    </a>

                @endif

            </div>

        </div>


        {{-- Body --}}
        <div class="card-body">


            @if(session('success'))

                <div class="alert alert-success alert-dismissible fade show" role="alert">

                    <strong>Berhasil!</strong> {{ session('success') }}

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="alert"
                            aria-label="Close">
                    </button>

                </div>

            @endif


            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead>

                        <tr>

                            <th>No</th>

                            <th>Gambar</th>

                            <th>Judul</th>

                            <th>Tanggal</th>

                            <th>Isi</th>

                            <th>Aksi</th>

                        </tr>

                    </thead>


                    <tbody>

                        @forelse ($pengumuman as $pengumuman)

                        <tr>

                            <td>
                                {{ $loop->iteration }}
                            </td>


                            <td>

                                @if ($pengumuman->gambar)

                                    <img src="{{ asset('uploads/pengumuman/' . $pengumuman->gambar) }}"
                                         width="60"
                                         height="60"
                                         style="object-fit: cover; border-radius: 5px;">

                                @else

                                    <span class="text-muted">
                                        -
                                    </span>

                                @endif

                            </td>


                            <td>
                                {{ $pengumuman->judul }}
                            </td>


                            <td>
                                {{ $pengumuman->tanggal }}
                            </td>


                            <td>
                                {{ $pengumuman->isi }}
                            </td>


                            <td>

                                <div class="d-flex gap-2 flex-nowrap">

                                    {{-- DETAIL --}}
                                    {{-- Semua role boleh melihat detail --}}
                                    <a href="{{ route('pengumuman.show', $pengumuman->id) }}"
                                       class="btn btn-info btn-sm"
                                       title="Detail Pengumuman">

                                        <i class="ti ti-eye"></i>

                                    </a>


                                    {{-- EDIT --}}
                                    {{-- Hanya Administrator --}}
                                    @if(auth()->check() && strtolower(trim(auth()->user()->role)) === 'administrator')

                                        <a href="{{ route('pengumuman.edit', $pengumuman->id) }}"
                                           class="btn btn-warning btn-sm"
                                           title="Edit Pengumuman">

                                            <i class="ti ti-edit"></i>

                                        </a>


                                        {{-- HAPUS --}}
                                        <form action="{{ route('pengumuman.destroy', $pengumuman->id) }}"
                                              method="POST"
                                              class="d-inline">

                                            @csrf

                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn btn-danger btn-sm"
                                                    title="Hapus Pengumuman"
                                                    onclick="return confirm('Yakin ingin menghapus pengumuman ini?')">

                                                <i class="ti ti-trash"></i>

                                            </button>

                                        </form>

                                    @endif

                                </div>

                            </td>

                        </tr>


                        @empty

                        {{-- Kalau belum ada data --}}
                        <tr>

                            <td colspan="6">

                                <div class="text-center py-5">

                                    <i class="ti ti-speakerphone"
                                       style="font-size: 48px; color: #6c757d;">
                                    </i>

                                    <div class="mt-2 text-muted">

                                        Belum ada pengumuman.

                                    </div>

                                </div>

                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection