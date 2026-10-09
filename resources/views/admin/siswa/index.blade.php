
@extends('admin.layouts.main')

@section('content')

<div class="page-header mb-4">

    <div class="page-block">

        <div class="row align-items-center">

            <div class="col-md-12">

                <div class="page-header-title">

                    <h5 class="m-b-10">
                        Data Siswa
                    </h5>

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

</div>


<div class="card mb-0">

    {{-- HEADER CARD --}}
    <div class="card-header d-flex justify-content-between align-items-center">

        <div>

            <h5 class="mb-1">
                Daftar Siswa
            </h5>

            <p class="mb-0 text-muted">
                Kelola data siswa sekolah
            </p>

        </div>


        {{-- TAMBAH SISWA HANYA UNTUK ADMINISTRATOR --}}
        @if(auth()->check() && strtolower(trim(auth()->user()->role)) === 'administrator')

            <a href="{{ route('siswa.create') }}"
               class="btn btn-primary btn-sm">

                <i class="ti ti-plus me-1"></i>
                Tambah Siswa

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
                            NISN
                        </th>

                        <th>
                            Nama Siswa
                        </th>

                        <th>
                            Jenis Kelamin
                        </th>

                        <th>
                            Tahun Masuk
                        </th>

                        <th>
                            Aksi
                        </th>

                    </tr>

                </thead>


                <tbody>

                    @forelse($siswa as $key => $item)

                        <tr>

                            {{-- NOMOR --}}
                            <td>
                                {{ $key + 1 }}
                            </td>


                            {{-- NISN --}}
                            <td>
                                {{ $item->nisn ?? '-' }}
                            </td>


                            {{-- NAMA --}}
                            <td>

                                <strong>
                                    {{ $item->nama_siswa }}
                                </strong>

                            </td>


                            {{-- JENIS KELAMIN --}}
                            <td>

                                {{ $item->jenis_kelamin ?? '-' }}

                            </td>


                            {{-- TAHUN MASUK --}}
                            <td>

                                {{ $item->tahun_masuk ?? '-' }}

                            </td>


                            {{-- AKSI --}}
                            <td>

                                <div class="d-flex gap-2">


                                    {{-- DETAIL --}}
                                    <a
                                        href="{{ route('siswa.show', $item->id_siswa) }}"
                                        class="btn btn-info btn-sm"
                                        title="Detail Siswa"
                                    >

                                        <i class="ti ti-eye"></i>

                                    </a>


                                    {{-- EDIT & HAPUS HANYA UNTUK ADMINISTRATOR --}}
                                    @if(auth()->check() && strtolower(trim(auth()->user()->role)) === 'administrator')

                                        {{-- EDIT --}}
                                        <a
                                            href="{{ route('siswa.edit', $item->id_siswa) }}"
                                            class="btn btn-warning btn-sm"
                                            title="Edit Siswa"
                                        >

                                            <i class="ti ti-edit"></i>

                                        </a>


                                        {{-- HAPUS --}}
                                        <form
                                            action="{{ route('siswa.destroy', $item->id_siswa) }}"
                                            method="POST"
                                            class="d-inline form-hapus"
                                        >

                                            @csrf

                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="btn btn-danger btn-sm"
                                                title="Hapus Siswa"
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
                                colspan="6"
                                class="text-center text-muted py-5"
                            >

                                <i
                                    class="ti ti-users"
                                    style="font-size: 40px;"
                                >
                                </i>

                                <p class="mt-2 mb-0">
                                    Belum ada data siswa.
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
