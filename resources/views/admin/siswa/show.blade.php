
@extends('admin.layouts.main')

@section('content')

<div class="page-header mb-4">

    <div class="page-block">

        <div class="row align-items-center">

            <div class="col-md-12">

                <div class="page-header-title">
                    <h5 class="m-b-10">
                        Detail Siswa
                    </h5>
                </div>

                <ul class="breadcrumb">

                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">
                            Home
                        </a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="{{ route('siswa.index') }}">
                            Siswa
                        </a>
                    </li>

                    <li class="breadcrumb-item" aria-current="page">
                        Detail
                    </li>

                </ul>

            </div>

        </div>

    </div>

</div>


{{-- CARD DETAIL SISWA --}}
<div class="card border-0 shadow-sm">

    {{-- HEADER CARD --}}
    <div class="card-header">

        <div>

            <h5 class="mb-1">
                Detail Siswa
            </h5>

            <p class="mb-0 text-muted">
                Informasi data siswa
            </p>

        </div>

    </div>


    {{-- BODY CARD --}}
    <div class="card-body">

        <div class="row align-items-center">

            {{-- BAGIAN KIRI --}}
            <div class="col-md-4 text-center">

                {{-- ICON SISWA --}}
                <div
                    class="bg-light rounded-circle d-flex align-items-center justify-content-center mx-auto"
                    style="
                        width: 180px;
                        height: 180px;
                    "
                >

                    <i
                        class="ti ti-user"
                        style="
                            font-size: 90px;
                            color: #6c757d;
                        "
                    ></i>

                </div>


                {{-- NAMA SISWA --}}
                <h5 class="mt-3 mb-1">

                    {{ $siswa->nama_siswa }}

                </h5>


                {{-- NISN --}}
                <p class="text-muted mb-0">

                    NISN: {{ $siswa->nisn }}

                </p>

            </div>


            {{-- BAGIAN KANAN --}}
            <div class="col-md-8">

                <h5 class="mb-3">
                    Data Siswa
                </h5>


                <div class="table-responsive">

                    <table class="table table-bordered align-middle mb-0">

                        <tbody>

                            {{-- NISN --}}
                            <tr>

                                <th style="width: 35%;">
                                    NISN
                                </th>

                                <td>
                                    {{ $siswa->nisn ?? '-' }}
                                </td>

                            </tr>


                            {{-- NAMA SISWA --}}
                            <tr>

                                <th>
                                    Nama Siswa
                                </th>

                                <td>
                                    {{ $siswa->nama_siswa ?? '-' }}
                                </td>

                            </tr>


                            {{-- JENIS KELAMIN --}}
                            <tr>

                                <th>
                                    Jenis Kelamin
                                </th>

                                <td>
                                    {{ $siswa->jenis_kelamin ?? '-' }}
                                </td>

                            </tr>


                            {{-- TAHUN MASUK --}}
                            <tr>

                                <th>
                                    Tahun Masuk
                                </th>

                                <td>
                                    {{ $siswa->tahun_masuk ?? '-' }}
                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>


                {{-- TOMBOL --}}
                <div class="mt-4">

                    <a
                        href="{{ route('siswa.edit', $siswa->id_siswa) }}"
                        class="btn btn-warning"
                    >

                        <i class="ti ti-edit me-1"></i>
                        Edit Data

                    </a>


                    <a
                        href="{{ route('siswa.index') }}"
                        class="btn btn-secondary"
                    >

                        Kembali

                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
