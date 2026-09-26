@extends('admin.layouts.main')

@section('content')

<style>

    /* =====================================
       POSISI UTAMA HALAMAN
    ====================================== */

    .ekstrakurikuler-page {
        margin-top: -150px !important;
        margin-left: -50px !important;
        margin-right: 20px !important;
        width: calc(100% + 30px) !important;
    }


    /* =====================================
       CARD
    ====================================== */

    .ekstrakurikuler-page .card {
        width: 100%;
    }


    /* =====================================
       TABLE
    ====================================== */

    .table-ekstrakurikuler {
        width: 100%;
    }

    .table-ekstrakurikuler th,
    .table-ekstrakurikuler td {
        vertical-align: middle;
    }


    /* =====================================
       GAMBAR
    ====================================== */

    .gambar-ekstrakurikuler {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border-radius: 6px;
    }


    /* =====================================
       DESKRIPSI
    ====================================== */

    .deskripsi-ekstrakurikuler {
        max-width: 250px;
        white-space: normal;
    }

</style>


<div class="pc-container">

    <div class="pc-content">

        <div class="ekstrakurikuler-page">


            <!-- =================================
                 HEADER
            ================================== -->

            <div class="page-header">

                <div class="page-block">

                    <div class="page-header-title">

                        <h5 class="mb-0">
                            Data Ekstrakurikuler
                        </h5>

                    </div>


                    <!-- BREADCRUMB -->

                    <ul class="breadcrumb">

                        <li class="breadcrumb-item">

                            <a href="{{ url('/') }}">
                                Home
                            </a>

                        </li>


                        <li class="breadcrumb-item">

                            Ekstrakurikuler

                        </li>

                    </ul>

                </div>

            </div>


            <!-- =================================
                 ROW
            ================================== -->

            <div class="row">

                <div class="col-sm-12">


                    <!-- =================================
                         CARD
                    ================================== -->

                    <div class="card">


                        <!-- =================================
                             CARD HEADER
                        ================================== -->

                        <div class="card-header">

                            <div class="d-flex justify-content-between align-items-center">


                                <!-- JUDUL -->

                                <div>

                                    <h5 class="mb-1">
                                        Daftar Ekstrakurikuler
                                    </h5>

                                    <p class="text-muted mb-0">
                                        Kelola data ekstrakurikuler sekolah
                                    </p>

                                </div>


                                <!-- TOMBOL TAMBAH -->

                                <a
                                    href="{{ route('ekstrakurikuler.create') }}"
                                    class="btn btn-primary"
                                >

                                    <i class="ti ti-plus"></i>

                                    Tambah Data

                                </a>


                            </div>

                        </div>


                        <!-- =================================
                             CARD BODY
                        ================================== -->

                        <div class="card-body">


                            <!-- =================================
                                 PESAN SUCCESS
                            ================================== -->

                            @if(session('success'))

                                <div class="alert alert-success">

                                    {{ session('success') }}

                                </div>

                            @endif


                            <!-- =================================
                                 PESAN ERROR
                            ================================== -->

                            @if($errors->any())

                                <div class="alert alert-danger">

                                    <ul class="mb-0">

                                        @foreach($errors->all() as $error)

                                            <li>
                                                {{ $error }}
                                            </li>

                                        @endforeach

                                    </ul>

                                </div>

                            @endif


                            <!-- =================================
                                 TABLE RESPONSIVE
                            ================================== -->

                            <div class="table-responsive">


                                <table class="table table-hover table-ekstrakurikuler">


                                    <!-- =================================
                                         TABLE HEADER
                                    ================================== -->

                                    <thead>

                                        <tr>

                                            <th>
                                                No
                                            </th>

                                            <th>
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

                                            <th>
                                                Deskripsi
                                            </th>

                                            <th>
                                                Aksi
                                            </th>

                                        </tr>

                                    </thead>


                                    <!-- =================================
                                         TABLE BODY
                                    ================================== -->

                                    <tbody>


                                        @forelse($ekstrakurikuler as $item)


                                            <tr>


                                                <!-- NO -->

                                                <td>

                                                    {{ $loop->iteration }}

                                                </td>


                                                <!-- GAMBAR -->

                                                <td>

                                                    @if($item->gambar)

                                                        <img
                                                            src="{{ asset('uploads/ekstrakurikuler/' . $item->gambar) }}"
                                                            alt="Gambar Ekstrakurikuler"
                                                            class="gambar-ekstrakurikuler"
                                                        >

                                                    @else

                                                        <span class="text-muted">

                                                            Tidak ada gambar

                                                        </span>

                                                    @endif

                                                </td>


                                                <!-- NAMA -->

                                                <td>

                                                    {{ $item->nama_ekskul }}

                                                </td>


                                                <!-- PEMBINA -->

                                                <td>

                                                    {{ $item->pembina }}

                                                </td>


                                                <!-- JADWAL -->

                                                <td>

                                                    {{ $item->jadwal_latihan }}

                                                </td>


                                                <!-- DESKRIPSI -->

                                                <td class="deskripsi-ekstrakurikuler">

                                                    {{ $item->deskripsi }}

                                                </td>


                                                <!-- AKSI -->

                                                <td>


                                                    <!-- EDIT -->

                                                    <a
                                                        href="{{ route('ekstrakurikuler.edit', ['id' => $item->id]) }}"
                                                        class="btn btn-warning btn-sm"
                                                    >

                                                        <i class="ti ti-edit"></i>

                                                        Edit

                                                    </a>


                                                    <!-- HAPUS -->

                                                    <form
                                                        action="{{ route('ekstrakurikuler.destroy', ['id' => $item->id]) }}"
                                                        method="POST"
                                                        style="display:inline;"
                                                    >

                                                        @csrf

                                                        @method('DELETE')


                                                        <button
                                                            type="submit"
                                                            class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Yakin ingin menghapus data ini?')"
                                                        >

                                                            <i class="ti ti-trash"></i>

                                                            Hapus

                                                        </button>


                                                    </form>


                                                </td>


                                            </tr>


                                        @empty


                                            <!-- =================================
                                                 DATA KOSONG
                                            ================================== -->

                                            <tr>

                                                <td
                                                    colspan="7"
                                                    class="text-center"
                                                >

                                                    Belum ada data ekstrakurikuler

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

</div>


@endsection
