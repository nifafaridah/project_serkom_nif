@extends('admin.layouts.main')
@section('content')

<div class="page-header mb-4">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">

                <div class="page-header-title">
                    <h5 class="m-b-10">Data Ekstrakurikuler</h5>
                </div>

                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>

                    <li class="breadcrumb-item" aria-current="page">
                        Ekstrakurikuler
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>


{{-- PESAN BERHASIL --}}
@if(session('success'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">

        {{ session('success') }}

        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert">
        </button>

    </div>

@endif


<div class="card border-0 shadow-sm">

    <div class="card-header d-flex justify-content-between align-items-center">

        <div>

            <h5 class="mb-1">
                Daftar Ekstrakurikuler
            </h5>

            <p class="mb-0 text-muted">
                Kelola data ekstrakurikuler sekolah
            </p>

        </div>


        {{-- TAMBAH --}}
        {{-- Hanya Administrator --}}
        @if(auth()->check() && strtolower(trim(auth()->user()->role)) === 'administrator')

            <a
                href="{{ route('ekstrakurikuler.create') }}"
                class="btn btn-primary"
            >
                <i class="ti ti-plus me-1"></i>
                Tambah Ekstrakurikuler
            </a>

        @endif

    </div>


    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle">

                <thead>
                    <tr>

                        <th style="width: 60px;">
                            No
                        </th>

                        <th style="width: 120px;">
                            Gambar
                        </th>

                        <th>
                            Nama Ekstrakurikuler
                        </th>

                        <th>
                            Pembina
                        </th>

                        <th>
                            Jadwal Latihan
                        </th>

                        <th style="width: 250px;">
                            Aksi
                        </th>

                    </tr>
                </thead>


                <tbody>

                    @forelse($ekstrakurikuler as $item)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>


                        {{-- GAMBAR --}}
                        <td class="text-center">

                            @if($item->gambar)

                                <img
                                    src="{{ asset('uploads/ekstrakurikuler/' . $item->gambar) }}"
                                    alt="{{ $item->nama_ekskul }}"
                                    style="
                                        width: 80px;
                                        height: 60px;
                                        object-fit: cover;
                                        border-radius: 8px;
                                    "
                                >

                            @else

                                <span class="text-muted">
                                    Tidak ada gambar
                                </span>

                            @endif

                        </td>


                        {{-- NAMA --}}
                        <td>
                            {{ $item->nama_ekskul }}
                        </td>


                        {{-- PEMBINA --}}
                        <td>
                            {{ $item->pembina }}
                        </td>


                        {{-- JADWAL --}}
                        <td>
                            {{ $item->jadwal_latihan }}
                        </td>


                        {{-- AKSI --}}
                        <td>


                            {{-- DETAIL --}}
                            {{-- Semua role boleh melihat detail --}}
                            <a
                                href="{{ route('ekstrakurikuler.show', $item->id) }}"
                                class="btn btn-info btn-sm"
                                title="Detail Ekstrakurikuler"
                            >

                                <i class="ti ti-eye"></i>

                            </a>


                            {{-- EDIT + HAPUS --}}
                            {{-- Hanya Administrator --}}
                            @if(auth()->check() && strtolower(trim(auth()->user()->role)) === 'administrator')


                                {{-- EDIT --}}
                                <a
                                    href="{{ route('ekstrakurikuler.edit', $item->id) }}"
                                    class="btn btn-warning btn-sm"
                                    title="Edit Ekstrakurikuler"
                                >

                                    <i class="ti ti-edit"></i>

                                </a>


                                {{-- HAPUS --}}
                                <form
                                    action="{{ route('ekstrakurikuler.destroy', $item->id) }}"
                                    method="POST"
                                    class="d-inline form-hapus"
                                >

                                    @csrf

                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-danger btn-sm"
                                        title="Hapus Ekstrakurikuler"
                                    >

                                        <i class="ti ti-trash"></i>

                                    </button>

                                </form>

                            @endif


                        </td>

                    </tr>


                    @empty

                    <tr>

                        <td
                            colspan="6"
                            class="text-center text-muted py-4"
                        >

                            <i
                                class="ti ti-folder-off"
                                style="font-size: 40px;"
                            ></i>

                            <div class="mt-2">
                                Belum ada data ekstrakurikuler.
                            </div>

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection
