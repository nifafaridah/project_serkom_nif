@extends('admin.layouts.main')

@section('content')

<div class="container-fluid">

    {{-- Header halaman --}}
    <div class="page-header">
        <div class="row align-items-center">

            <div class="col">
                <h5 class="mb-0">Berita</h5>
            </div>

            <div class="col-auto">
                <ul class="breadcrumb mb-0">

                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>

                    <li class="breadcrumb-item active">
                        Berita
                    </li>

                </ul>
            </div>

        </div>
    </div>


    {{-- Card Berita --}}
    <div class="card">

        {{-- Header Card --}}
        <div class="card-header">

            <div class="d-flex justify-content-between align-items-center">

                <div>

                    <h5 class="mb-1">
                        Daftar Berita
                    </h5>

                    <p class="mb-0 text-muted">
                        Kelola berita sekolah
                    </p>

                </div>


                {{-- TAMBAH BERITA --}}
                {{-- Hanya Administrator --}}
                @if(auth()->check() && strtolower(trim(auth()->user()->role)) === 'administrator')

                    <a href="{{ route('berita.create') }}"
                       class="btn btn-primary">

                        <i class="ti ti-plus"></i>
                        Tambah Berita

                    </a>

                @endif

            </div>

        </div>


        {{-- Body --}}
        <div class="card-body">

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

                        @forelse ($berita as $berita)

                        <tr>

                            <td>
                                {{ $loop->iteration }}
                            </td>


                            <td>

                                @if ($berita->gambar)

                                    <img src="{{ asset('uploads/berita/' . $berita->gambar) }}"
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
                                {{ $berita->judul }}
                            </td>


                            <td>
                                {{ $berita->tanggal }}
                            </td>


                            <td>
                                {{ $berita->isi }}
                            </td>


                            {{-- AKSI --}}
                            <td>

                                <div class="d-flex gap-2 flex-nowrap">

                                    {{-- DETAIL --}}
                                    {{-- Semua role boleh melihat detail --}}
                                    <a href="{{ route('berita.show', $berita->id) }}"
                                       class="btn btn-info btn-sm"
                                       title="Detail Berita">

                                        <i class="ti ti-eye"></i>
                                        Detail

                                    </a>


                                    {{-- EDIT --}}
                                    {{-- Hanya Administrator --}}
                                    @if(auth()->check() && strtolower(trim(auth()->user()->role)) === 'administrator')

                                        <a href="{{ route('berita.edit', $berita->id) }}"
                                           class="btn btn-warning btn-sm"
                                           title="Edit Berita">

                                            <i class="ti ti-edit"></i>
                                            Edit

                                        </a>


                                        {{-- HAPUS --}}
                                        <form action="{{ route('berita.destroy', $berita->id) }}"
                                              method="POST"
                                              class="d-inline">

                                            @csrf

                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn btn-danger btn-sm"
                                                    title="Hapus Berita"
                                                    onclick="return confirm('Yakin ingin menghapus berita ini?')">

                                                <i class="ti ti-trash"></i>
                                                Hapus

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

                                    <i class="ti ti-news"
                                       style="font-size: 48px; color: #6c757d;">
                                    </i>

                                    <div class="mt-2 text-muted">

                                        Belum ada berita.

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