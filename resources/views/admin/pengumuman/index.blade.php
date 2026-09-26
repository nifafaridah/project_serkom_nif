@extends('admin.layouts.main')

@section('content')

<div class="pc-container">
    <div class="pc-content">

        {{-- Breadcrumb --}}
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Pengumuman</h5>
                        </div>

                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/') }}">Home</a>
                            </li>

                            <li class="breadcrumb-item">
                                Pengumuman
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- Isi --}}
        <div class="row">
            <div class="col-sm-12">

                <div class="card">

                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5>Daftar Pengumuman</h5>

                            <a href="{{ route('pengumuman.create') }}"
                               class="btn btn-primary">
                                <i class="ti ti-plus"></i>
                                Tambah Pengumuman
                            </a>
                        </div>
                    </div>

                    <div class="card-body">

                        {{-- Pesan berhasil --}}
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="table-responsive">

                            <table class="table table-hover table-bordered">

                                <thead>
                                    <tr>
                                        <th width="60">No</th>
                                        <th width="120">Gambar</th>
                                        <th>Judul</th>
                                        <th width="150">Tanggal</th>
                                        <th>Isi</th>
                                        <th width="180">Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @forelse($pengumuman as $item)

                                        <tr>

                                            {{-- No --}}
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>

                                            {{-- Gambar --}}
                                            <td>
                                                @if($item->gambar)

                                                    <img src="{{ asset('uploads/pengumuman/' . $item->gambar) }}"
                                                         alt="Gambar Pengumuman"
                                                         width="80"
                                                         height="60"
                                                         style="object-fit: cover;">

                                                @else

                                                    <span class="text-muted">
                                                        Tidak ada gambar
                                                    </span>

                                                @endif
                                            </td>

                                            {{-- Judul --}}
                                            <td>
                                                <strong>
                                                    {{ $item->judul }}
                                                </strong>
                                            </td>

                                            {{-- Tanggal --}}
                                            <td>
                                                {{ $item->tanggal }}
                                            </td>

                                            {{-- Isi --}}
                                            <td>
                                                {{ Str::limit($item->isi, 100) }}
                                            </td>

                                            {{-- Aksi --}}
                                            <td>

                                                <a href="{{ route('pengumuman.edit', $item->id) }}"
                                                   class="btn btn-warning btn-sm">
                                                    <i class="ti ti-edit"></i>
                                                    Edit
                                                </a>

                                                <form action="{{ route('pengumuman.destroy', $item->id) }}"
                                                      method="POST"
                                                      style="display: inline;">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit"
                                                            class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Yakin ingin menghapus pengumuman ini?')">

                                                        <i class="ti ti-trash"></i>
                                                        Hapus

                                                    </button>

                                                </form>

                                            </td>

                                        </tr>

                                    @empty

                                        <tr>
                                            <td colspan="6"
                                                class="text-center">

                                                <div class="py-4">

                                                    <i class="ti ti-speakerphone"
                                                       style="font-size: 40px;">
                                                    </i>

                                                    <p class="mt-2 mb-0">
                                                        Belum ada pengumuman.
                                                    </p>

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
        </div>

    </div>
</div>

@endsection
