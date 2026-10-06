
@extends('admin.layouts.main')

@section('content')

<div class="container-fluid">

    {{-- Header halaman --}}
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h5 class="mb-0">Data Ekstrakurikuler</h5>
            </div>

            <div class="col-auto">
                <ul class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        Ekstrakurikuler
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Card --}}
    <div class="card">

        {{-- Header Card --}}
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">

                <div>
                    <h5 class="mb-1">Daftar Ekstrakurikuler</h5>

                    <p class="mb-0 text-muted">
                        Kelola data ekstrakurikuler sekolah
                    </p>
                </div>

                <a href="{{ route('ekstrakurikuler.create') }}"
                   class="btn btn-primary">
                    <i class="ti ti-plus"></i>
                    Tambah Ekstrakurikuler
                </a>

            </div>
        </div>

        {{-- Body Card --}}
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

                <table class="table">

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Nama Ekstrakurikuler</th>
                            <th>Pembina</th>
                            <th>Jadwal Latihan</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($ekstrakurikuler as $ekskul)

                        <tr>

                            <td>
                                {{ $loop->iteration }}
                            </td>

                            <td>
                                @if ($ekskul->gambar)
                                    <img src="{{ asset('uploads/ekstrakurikuler/' . $ekskul->gambar) }}"
                                         width="50"
                                         height="50"
                                         style="object-fit: cover; border-radius: 5px;">
                                @else
                                    -
                                @endif
                            </td>

                            <td>
                                {{ $ekskul->nama_ekskul }}
                            </td>

                            <td>
                                {{ $ekskul->pembina }}
                            </td>

                            <td>
                                {{ $ekskul->jadwal_latihan }}
                            </td>

                            <td>
                                {{ $ekskul->deskripsi }}
                            </td>

                            <td>
                                <a href="{{ route('ekstrakurikuler.edit', $ekskul->id) }}"
                                   class="btn btn-warning btn-sm">


                                    <i class="ti ti-edit"></i> Edit

                                </a>

                                <form action="{{ route('ekstrakurikuler.destroy', $ekskul->id) }}"
                                      method="POST"
                                      class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin ingin menghapus data ini?')">

                                        <i class="ti ti-trash"></i> Hapus

                                    </button>

                                </form>
                            </td>

                        </tr>

                        @empty

                        {{-- TAMPILAN KETIKA DATA KOSONG --}}
                        <tr>
                            <td colspan="7">

                                <div class="text-center py-5">

                                    <i class="ti ti-mood-empty"
                                       style="font-size: 48px; color: #6c757d;">
                                    </i>

                                    <div class="mt-2 text-muted">
                                        Belum ada data ekstrakurikuler
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

