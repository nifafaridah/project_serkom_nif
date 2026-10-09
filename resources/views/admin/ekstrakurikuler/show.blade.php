
@extends('admin.layouts.main')

@section('content')

<div class="page-header mb-4">

    <div class="page-block">

        <div class="row align-items-center">

            <div class="col-md-12">

                <div class="page-header-title">

                    <h5 class="m-b-10">
                        Detail Ekstrakurikuler
                    </h5>

                </div>

                <ul class="breadcrumb">

                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">
                            Home
                        </a>
                    </li>

                    <li class="breadcrumb-item">

                        <a href="{{ route('ekstrakurikuler.index') }}">
                            Ekstrakurikuler
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


{{-- CARD DETAIL --}}
<div class="card border-0 shadow-sm">

    {{-- HEADER CARD --}}
    <div class="card-header">

        <div>

            <h5 class="mb-1">
                Detail Ekstrakurikuler
            </h5>

            <p class="mb-0 text-muted">
                Informasi data ekstrakurikuler sekolah
            </p>

        </div>

    </div>


    {{-- BODY CARD --}}
    <div class="card-body">

        <div class="row align-items-center">

            {{-- ================================= --}}
            {{-- BAGIAN KIRI : GAMBAR --}}
            {{-- ================================= --}}

            <div class="col-md-4 text-center">

                @if(!empty($ekskul->gambar))

                    <img
                        src="{{ asset('uploads/ekstrakurikuler/' . $ekskul->gambar) }}"
                        alt="{{ $ekskul->nama_ekskul }}"
                        class="rounded shadow-sm"
                        style="
                            width: 240px;
                            height: 240px;
                            object-fit: cover;
                        "
                    >

                @else

                    <div
                        class="bg-light rounded d-flex align-items-center justify-content-center mx-auto"
                        style="
                            width: 240px;
                            height: 240px;
                        "
                    >

                        <div class="text-muted">

                            <i
                                class="ti ti-school"
                                style="font-size: 70px;"
                            ></i>

                            <p class="mb-0 mt-2">
                                Tidak ada gambar
                            </p>

                        </div>

                    </div>

                @endif


                {{-- NAMA EKSKUL --}}
                <h5 class="mt-3 mb-1">

                    {{ $ekskul->nama_ekskul }}

                </h5>

            </div>


            {{-- ================================= --}}
            {{-- BAGIAN KANAN : DATA --}}
            {{-- ================================= --}}

            <div class="col-md-8">

                <h5 class="mb-3">
                    Data Ekstrakurikuler
                </h5>


                <div class="table-responsive">

                    <table class="table table-bordered align-middle mb-0">

                        <tbody>

                            {{-- NAMA --}}
                            <tr>

                                <th style="width: 35%;">
                                    Nama Ekstrakurikuler
                                </th>

                                <td>
                                    {{ $ekskul->nama_ekskul ?? '-' }}
                                </td>

                            </tr>


                            {{-- PEMBINA --}}
                            <tr>

                                <th>
                                    Pembina
                                </th>

                                <td>
                                    {{ $ekskul->pembina ?? '-' }}
                                </td>

                            </tr>


                            {{-- JADWAL --}}
                            <tr>

                                <th>
                                    Jadwal Latihan
                                </th>

                                <td>
                                    {{ $ekskul->jadwal_latihan ?? '-' }}
                                </td>

                            </tr>


                            {{-- DESKRIPSI --}}
                            <tr>

                                <th>
                                    Deskripsi
                                </th>

                                <td>
                                    {{ $ekskul->deskripsi ?? '-' }}
                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>


                {{-- ================================= --}}
                {{-- TOMBOL --}}
                {{-- ================================= --}}

                <div class="mt-4">

                    <a
                        href="{{ route('ekstrakurikuler.edit', $ekskul->id) }}"
                        class="btn btn-warning"
                    >

                        <i class="ti ti-edit me-1"></i>
                        Edit Data

                    </a>


                    <a
                        href="{{ route('ekstrakurikuler.index') }}"
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
