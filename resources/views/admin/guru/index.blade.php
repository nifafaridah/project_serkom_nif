
@extends('admin.layouts.main')

@section('content')

<div class="page-header mb-4">

    <div class="page-block">

        <div class="row align-items-center">

            <div class="col-md-12">

                <div class="page-header-title">

                    <h5 class="m-b-10">
                        Data Guru
                    </h5>

                </div>

                <ul class="breadcrumb">

                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">
                            Home
                        </a>
                    </li>

                    <li class="breadcrumb-item" aria-current="page">
                        Guru
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
                Daftar Guru
            </h5>
            <p class="mb-0 text-muted">
                Kelola data guru sekolah
            </p>
        </div>


        <a href="{{ route('guru.create') }}"
           class="btn btn-primary btn-sm">
            <i class="ti ti-plus me-1"></i>
            Tambah Guru
        </a>
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

            <table class="table table-hover align-middle">

                <thead>

                    <tr>

                        <th>
                            No
                        </th>

                        <th>
                            Foto
                        </th>

                        <th>
                            Nama Guru
                        </th>

                        <th>
                            NIP
                        </th>

                        <th>
                            Mapel
                        </th>

                        <th>
                            Aksi
                        </th>

                    </tr>

                </thead>


                <tbody>

                    @forelse($guru as $key => $item)

                        <tr>

                            {{-- NOMOR --}}
                            <td>
                                {{ $key + 1 }}
                            </td>


                            {{-- FOTO --}}
                            <td>

                                @if(!empty($item->foto))

                                    <img
                                        src="{{ asset('uploads/guru/' . $item->foto) }}"
                                        alt="{{ $item->nama_guru }}"
                                        width="50"
                                        height="50"
                                        class="rounded-circle"
                                        style="object-fit: cover;"
                                        onerror="this.style.display='none'; this.nextElementSibling.style.display='inline';"
                                    >

                                    <span class="text-danger"
                                          style="display:none;">
                                        Foto tidak ditemukan
                                    </span>

                                @else

                                    <span class="badge bg-light-secondary text-secondary">
                                        Tidak Ada Foto
                                    </span>

                                @endif

                            </td>


                            {{-- NAMA --}}
                            <td>

                                <strong>
                                    {{ $item->nama_guru }}
                                </strong>

                            </td>


                            {{-- NIP --}}
                            <td>
                                {{ $item->nip ?? '-' }}
                            </td>


                            {{-- MAPEL --}}
                            <td>
                                {{ $item->mapel ?? '-' }}
                            </td>


                            {{-- AKSI --}}
                            <td>

                                <div class="d-flex gap-2">

                                    {{-- EDIT --}}
                                    <a
                                        href="{{ route('guru.edit', $item->id_guru) }}"
                                        class="btn btn-warning btn-sm"
                                        title="Edit Guru"
                                    >

                                        <i class="ti ti-edit"></i> Edit 

                                    </a>


                                    {{-- HAPUS --}}
                                    <form
                                        action="{{ route('guru.destroy', $item->id_guru) }}"
                                        method="POST"
                                        class="d-inline"
                                        onsubmit="return confirm('Yakin ingin menghapus data guru ini?')"
                                    >

                                        @csrf

                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-danger btn-sm"
                                            title="Hapus Guru"
                                        >

                                            <i class="ti ti-trash"></i> Hapus 

                                        </button>

                                    </form>

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
                                    Belum ada data guru.
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

