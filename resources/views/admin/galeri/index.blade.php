
@extends('admin.layouts.main')

@section('content')

<div class="container-fluid">

    {{-- Header halaman --}}
    <div class="page-header">
        <div class="row align-items-center">

            <div class="col">
                <h5 class="mb-0">Galeri</h5>
            </div>

            <div class="col-auto">
                <ul class="breadcrumb mb-0">

                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>

                    <li class="breadcrumb-item active">
                        Galeri
                    </li>

                </ul>
            </div>

        </div>
    </div>


    {{-- Card Galeri --}}
    <div class="card">

        {{-- Header Card --}}
        <div class="card-header">

            <div class="d-flex justify-content-between align-items-center">

                <div>
                    <h5 class="mb-1">
                        Daftar Galeri
                    </h5>

                    <p class="mb-0 text-muted">
                        Kelola galeri sekolah
                    </p>
                </div>


                {{-- TAMBAH GALERI --}}
                {{-- Hanya Administrator --}}
                @if(auth()->check() && strtolower(trim(auth()->user()->role)) === 'administrator')

                    <a href="{{ route('galeri.create') }}"
                       class="btn btn-primary">

                        <i class="ti ti-plus me-1"></i>
                        Tambah Galeri

                    </a>

                @endif

            </div>

        </div>


        {{-- Body --}}
        <div class="card-body">

            {{-- Pesan berhasil --}}
            @if(session('success'))

                <div class="alert alert-success alert-dismissible fade show">

                    {{ session('success') }}

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="alert">
                    </button>

                </div>

            @endif


            {{-- Pesan error --}}
            @if(session('error'))

                <div class="alert alert-danger alert-dismissible fade show">

                    {{ session('error') }}

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="alert">
                    </button>

                </div>

            @endif


            {{-- Error validasi --}}
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


            {{-- Tabel --}}
            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead>
                        <tr>

                            <th style="width: 70px;">
                                No
                            </th>

                            <th style="width: 180px;">
                                Gambar
                            </th>

                            <th>
                                Judul
                            </th>

                            <th>
                                Deskripsi
                            </th>

                            <th style="width: 280px;">
                                Aksi
                            </th>

                        </tr>
                    </thead>


                    <tbody>

                        @forelse($galeri as $item)

                            <tr>

                                {{-- Nomor --}}
                                <td>
                                    {{ $loop->iteration }}
                                </td>


                                {{-- Gambar --}}
                                <td>

                                    @if(!empty($item->gambar))

                                        <img
                                            src="{{ asset('uploads/galeri/' . $item->gambar) }}"
                                            alt="{{ $item->judul }}"
                                            width="130"
                                            height="90"
                                            class="img-thumbnail"
                                            style="object-fit: cover;"
                                            onerror="this.style.display='none'; this.nextElementSibling.style.display='inline';"
                                        >

                                        <span class="text-danger"
                                              style="display: none;">
                                            Gambar tidak ditemukan
                                        </span>

                                    @else

                                        <div
                                            style="
                                                width:130px;
                                                height:90px;
                                                display:flex;
                                                align-items:center;
                                                justify-content:center;
                                                background:#f1f1f1;
                                                border-radius:6px;
                                            "
                                        >

                                            <span class="text-muted">
                                                Tidak ada gambar
                                            </span>

                                        </div>

                                    @endif

                                </td>


                                {{-- Judul --}}
                                <td>

                                    <strong>
                                        {{ $item->judul }}
                                    </strong>

                                </td>


                                {{-- Deskripsi --}}
                                <td>

                                    @if(!empty($item->keterangan))

                                        {{ $item->keterangan }}

                                    @elseif(!empty($item->deskripsi))

                                        {{ $item->deskripsi }}

                                    @else

                                        <span class="text-muted">
                                            -
                                        </span>

                                    @endif

                                </td>


                                {{-- Aksi --}}
                                <td>

                                    <div class="d-flex gap-2 flex-nowrap">

                                        {{-- DETAIL --}}
                                        {{-- Semua role boleh melihat detail --}}
                                        <a
                                            href="{{ route('galeri.show', $item->id) }}"
                                            class="btn btn-info btn-sm"
                                            title="Detail Galeri"
                                        >

                                            <i class="ti ti-eye me-1"></i>

                                        </a>


                                        {{-- EDIT + HAPUS --}}
                                        {{-- Hanya Administrator --}}
                                        @if(auth()->check() && strtolower(trim(auth()->user()->role)) === 'administrator')

                                            {{-- EDIT --}}
                                            <a
                                                href="{{ route('galeri.edit', $item->id) }}"
                                                class="btn btn-warning btn-sm"
                                                title="Edit Galeri"
                                            >

                                                <i class="ti ti-edit me-1"></i>

                                            </a>


                                            {{-- HAPUS --}}
                                            <form
                                                action="{{ route('galeri.destroy', $item->id) }}"
                                                method="POST"
                                                class="d-inline form-hapus"
                                            >

                                                @csrf

                                                @method('DELETE')

                                                <button
                                                    type="submit"
                                                    class="btn btn-danger btn-sm"
                                                    title="Hapus Galeri"
                                                >

                                                    <i class="ti ti-trash me-1"></i>

                                                </button>

                                            </form>

                                        @endif

                                    </div>

                                </td>

                            </tr>


                        @empty

                            {{-- Kalau belum ada data --}}
                            <tr>

                                <td
                                    colspan="5"
                                    class="text-center py-5"
                                >

                                    <div class="text-muted">

                                        <i class="ti ti-photo"
                                           style="font-size:40px;">
                                        </i>

                                        <p class="mt-2 mb-0">
                                            Belum ada data galeri.
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

@endsection
