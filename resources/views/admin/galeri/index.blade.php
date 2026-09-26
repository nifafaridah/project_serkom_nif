@extends('admin.layouts.main')

@section('content')

<div class="pc-container">
    <div class="pc-content">

        <div class="page-header">
            <div class="page-block">
                <div class="page-header-title">
                    <h5 class="m-b-10">Galeri</h5>
                </div>

                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>

                    <li class="breadcrumb-item">
                        Galeri
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">

                <div class="card">

                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">

                            <h5>Daftar Galeri</h5>

                            <a href="{{ route('galeri.create') }}"
                               class="btn btn-primary">
                                <i class="ti ti-plus"></i>
                                Tambah Galeri
                            </a>

                        </div>
                    </div>

                    <div class="card-body">

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="table-responsive">

                            <table class="table table-hover table-bordered">

                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @forelse($galeri as $item)

                                    <tr>

                                        <td>
                                            {{ $loop->iteration }}
                                        </td>

                                        <td>
                                            @if($item->gambar)

                                                <img src="{{ asset('uploads/galeri/' . $item->gambar) }}"
                                                     width="100"
                                                     height="70"
                                                     style="object-fit: cover;"
                                                     class="rounded">

                                            @else

                                                <span class="text-muted">
                                                    Tidak ada gambar
                                                </span>

                                            @endif
                                        </td>

                                        <td>
                                            <strong>
                                                {{ $item->judul }}
                                            </strong>
                                        </td>

                                        <td>
                                            {{ Str::limit($item->deskripsi, 100) }}
                                        </td>

                                        <td>

                                            <a href="{{ route('galeri.edit', $item->id) }}"
                                               class="btn btn-warning btn-sm">
                                                Edit
                                            </a>

                                            <form action="{{ route('galeri.destroy', $item->id) }}"
                                                  method="POST"
                                                  style="display:inline">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                        class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Yakin ingin menghapus galeri ini?')">
                                                    Hapus
                                                </button>

                                            </form>

                                        </td>

                                    </tr>

                                    @empty

                                    <tr>
                                        <td colspan="5" class="text-center">
                                            Belum ada data galeri.
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
