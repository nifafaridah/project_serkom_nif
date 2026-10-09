
@extends('admin.layouts.main')

@section('content')

<div class="page-header mb-4">

    <div class="page-block">

        <div class="row align-items-center">

            <div class="col-md-12">

                <div class="page-header-title">

                    <h5 class="m-b-10">
                        Detail Prestasi
                    </h5>

                </div>

                <ul class="breadcrumb">

                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">
                            Home
                        </a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="{{ route('prestasi.index') }}">
                            Prestasi
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


<div class="card border-0 shadow-sm">

    {{-- HEADER CARD --}}
    <div class="card-header">

        <div>

            <h5 class="mb-1">
                Detail Prestasi
            </h5>

            <p class="mb-0 text-muted">
                Informasi data prestasi sekolah
            </p>

        </div>

    </div>


    {{-- BODY CARD --}}
    <div class="card-body">

        <div class="row align-items-center">


            {{-- FOTO --}}
            <div class="col-md-4 text-center">

                @if(!empty($prestasi->foto))

                    <img
                        src="{{ asset('uploads/prestasi/' . $prestasi->foto) }}"
                        alt="Foto Prestasi"
                        class="rounded shadow-sm"
                        style="width: 240px; height: 240px; object-fit: cover;"
                    >

                @else

                    <div
                        class="bg-light rounded d-flex align-items-center justify-content-center mx-auto"
                        style="width: 240px; height: 240px;"
                    >

                        <div class="text-muted">

                            <i
                                class="ti ti-trophy"
                                style="font-size: 70px;"
                            ></i>

                            <p class="mb-0 mt-2">
                                Tidak ada foto
                            </p>

                        </div>

                    </div>

                @endif


                <h5 class="mt-3 mb-1">
                    Prestasi SDN CITATAH
                </h5>

                <p class="text-muted mb-0">
                    Tahun Ajaran {{ $prestasi->tahun_ajaran }}
                </p>

            </div>


            {{-- DATA PRESTASI --}}
            <div class="col-md-8">

                <h5 class="mb-3">
                    Data Prestasi
                </h5>


                <div class="table-responsive">

                    <table class="table table-bordered align-middle mb-0">

                        <tbody>

                            <tr>

                                <th style="width: 35%;">
                                    Deskripsi
                                </th>

                                <td>
                                    {{ $prestasi->deskripsi ?? '-' }}
                                </td>

                            </tr>


                            <tr>

                                <th>
                                    Tahun Ajaran
                                </th>

                                <td>
                                    {{ $prestasi->tahun_ajaran ?? '-' }}
                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>


                {{-- TOMBOL --}}
                <div class="mt-4">

                    <a
                        href="{{ route('prestasi.edit', $prestasi->id_prestasi) }}"
                        class="btn btn-warning"
                    >

                        <i class="ti ti-edit me-1"></i>
                        Edit Data

                    </a>


                    <a
                        href="{{ route('prestasi.index') }}"
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
