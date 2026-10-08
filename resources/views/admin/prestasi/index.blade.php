@extends('admin.layouts.main')

@section('content')

<div class="page-header mb-4">

    <div class="page-block">

        <div class="row align-items-center">

            <div class="col-md-12">

                <div class="page-header-title">

                    <h5 class="m-b-10">
                        Data Prestasi
                    </h5>

                </div>

                <ul class="breadcrumb">

                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">
                            Home
                        </a>
                    </li>

                    <li class="breadcrumb-item" aria-current="page">
                        Prestasi
                    </li>

                </ul>

            </div>

        </div>

    </div>

</div>


<div class="card mb-0">

    {{-- HEADER CARD --}}
    <div class="card-header d-flex justify-content-between align-items-center">

        <div>

            <h5 class="mb-1">
                Daftar Prestasi
            </h5>

            <p class="mb-0 text-muted">
                Kelola data prestasi sekolah
            </p>

        </div>


        {{-- TAMBAH PRESTASI --}}
        {{-- Hanya Administrator --}}
        @if(auth()->check() && strtolower(trim(auth()->user()->role)) === 'administrator')

            <a href="{{ route('prestasi.create') }}"
               class="btn btn-primary btn-sm">

                <i class="ti ti-plus me-1"></i>
                Tambah Prestasi

            </a>

        @endif

    </div>


    {{-- BODY CARD --}}
    <div class="card-body">


        {{-- PESAN BERHASIL --}}
        @if(session('success'))

            <div class="alert alert-success alert-dismissible fade show"
                 role="alert">

                <strong>
                    Berhasil!
                </strong>

                {{ session('success') }}

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close">
                </button>

            </div>

        @endif


        {{-- PESAN ERROR --}}
        @if(session('error'))

            <div class="alert alert-danger alert-dismissible fade show"
                 role="alert">

                <strong>
                    Gagal!
                </strong>

                {{ session('error') }}

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close">
                </button>

            </div>

        @endif


        {{-- ERROR VALIDASI --}}
        @if($errors->any())

            <div class="alert alert-danger">

                <strong>
                    Terjadi kesalahan:
                </strong>

                <ul class="mb-0 mt-2">

                    @foreach($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        {{-- TABLE --}}
        <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle">

                <thead>

                    <tr>

                        <th>
                            No
                        </th>

                        <th>
                            Foto
                        </th>

                        <th>
                            Deskripsi
                        </th>

                        <th>
                            Tahun Ajaran
                        </th>

                        <th>
                            Aksi
                        </th>

                    </tr>

                </thead>


                <tbody>

                    @forelse($prestasi as $key => $item)

                        <tr>

                            {{-- NOMOR --}}
                            <td>
                                {{ $key + 1 }}
                            </td>


                            {{-- FOTO --}}
                            <td>

                                @if(!empty($item->foto))

                                    <img
                                        src="{{ asset('uploads/prestasi/' . $item->foto) }}"
                                        alt="Foto Prestasi"
                                        style="
                                            width: 80px;
                                            height: 60px;
                                            object-fit: cover;
                                            border-radius: 6px;
                                        "
                                    >

                                @else

                                    <div
                                        class="bg-light rounded d-flex align-items-center justify-content-center"
                                        style="
                                            width: 80px;
                                            height: 60px;
                                        "
                                    >

                                        <i
                                            class="ti ti-trophy text-muted"
                                            style="font-size: 28px;"
                                        ></i>

                                    </div>

                                @endif

                            </td>


                            {{-- DESKRIPSI --}}
                            <td>

                                {{ $item->deskripsi ?? '-' }}

                            </td>


                            {{-- TAHUN AJARAN --}}
                            <td>

                                {{ $item->tahun_ajaran ?? '-' }}

                            </td>


                            {{-- AKSI --}}
                            <td>

                                <div class="d-flex gap-2">


                                    {{-- DETAIL --}}
                                    {{-- Semua role boleh melihat detail --}}
                                    <a
                                        href="{{ route('prestasi.show', $item->id_prestasi) }}"
                                        class="btn btn-info btn-sm"
                                        title="Detail Prestasi"
                                    >

                                        <i class="ti ti-eye"></i>

                                    </a>


                                    {{-- EDIT + HAPUS --}}
                                    {{-- Hanya Administrator --}}
                                    @if(auth()->check() && strtolower(trim(auth()->user()->role)) === 'administrator')

                                        {{-- EDIT --}}
                                        <a
                                            href="{{ route('prestasi.edit', $item->id_prestasi) }}"
                                            class="btn btn-warning btn-sm"
                                            title="Edit Prestasi"
                                        >

                                            <i class="ti ti-edit"></i>

                                        </a>


                                        {{-- HAPUS --}}
                                        <form
                                            action="{{ route('prestasi.destroy', $item->id_prestasi) }}"
                                            method="POST"
                                            class="d-inline"
                                            onsubmit="return confirm('Yakin ingin menghapus data prestasi ini?')"
                                        >

                                            @csrf

                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="btn btn-danger btn-sm"
                                                title="Hapus Prestasi"
                                            >

                                                <i class="ti ti-trash"></i>

                                            </button>

                                        </form>

                                    @endif

                                </div>

                            </td>

                        </tr>


                    @empty

                        {{-- BELUM ADA DATA --}}
                        <tr>

                            <td
                                colspan="5"
                                class="text-center text-muted py-5"
                            >

                                <i
                                    class="ti ti-trophy"
                                    style="font-size: 40px;"
                                ></i>

                                <p class="mt-2 mb-0">
                                    Belum ada data prestasi.
                                </p>

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection