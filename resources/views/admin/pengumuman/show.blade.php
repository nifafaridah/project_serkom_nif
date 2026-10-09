
@extends('admin.layouts.main')

@section('content')

<div class="container-fluid">

    {{-- Header halaman --}}
    <div class="page-header mb-4">

        <div class="row align-items-center">

            <div class="col">

                <h5 class="mb-0">
                    Detail Pengumuman
                </h5>

            </div>

            <div class="col-auto">

                <ul class="breadcrumb mb-0">

                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">
                            Home
                        </a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="{{ route('pengumuman.index') }}">
                            Pengumuman
                        </a>
                    </li>

                    <li class="breadcrumb-item active">
                        Detail
                    </li>

                </ul>

            </div>

        </div>

    </div>


    {{-- Card Detail Pengumuman --}}
    <div class="card border-0 shadow-sm">

        {{-- Header Card --}}
        <div class="card-header">

            <div>

                <h5 class="mb-1">
                    Detail Pengumuman
                </h5>

                <p class="mb-0 text-muted">
                    Informasi pengumuman sekolah
                </p>

            </div>

        </div>


        {{-- Body --}}
        <div class="card-body">

            <div class="row">


                {{-- GAMBAR --}}
                <div class="col-md-5 text-center">

                    @if(!empty($pengumuman->gambar))

                        <img
                            src="{{ asset('uploads/pengumuman/' . $pengumuman->gambar) }}"
                            alt="{{ $pengumuman->judul }}"
                            class="rounded shadow-sm"
                            style="
                                width: 100%;
                                max-width: 400px;
                                height: 280px;
                                object-fit: cover;
                            "
                        >

                    @else

                        <div
                            class="bg-light rounded d-flex align-items-center justify-content-center mx-auto"
                            style="
                                width: 100%;
                                max-width: 400px;
                                height: 280px;
                            "
                        >

                            <div class="text-muted">

                                <i
                                    class="ti ti-speakerphone"
                                    style="font-size: 70px;"
                                ></i>

                                <p class="mb-0 mt-2">
                                    Tidak ada gambar
                                </p>

                            </div>

                        </div>

                    @endif

                </div>


                {{-- DATA PENGUMUMAN --}}
                <div class="col-md-7">

                    <h5 class="mb-3">
                        Data Pengumuman
                    </h5>


                    <div class="table-responsive">

                        <table class="table table-bordered align-middle mb-0">

                            <tbody>

                                {{-- JUDUL --}}
                                <tr>

                                    <th style="width: 30%;">
                                        Judul
                                    </th>

                                    <td>
                                        {{ $pengumuman->judul ?? '-' }}
                                    </td>

                                </tr>


                                {{-- TANGGAL --}}
                                <tr>

                                    <th>
                                        Tanggal
                                    </th>

                                    <td>
                                        {{ $pengumuman->tanggal ?? '-' }}
                                    </td>

                                </tr>


                                {{-- ISI --}}
                                <tr>

                                    <th>
                                        Isi Pengumuman
                                    </th>

                                    <td>
                                        {{ $pengumuman->isi ?? '-' }}
                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </div>


                    {{-- TOMBOL --}}
                    <div class="mt-4">

                        <a
                            href="{{ route('pengumuman.edit', $pengumuman->id) }}"
                            class="btn btn-warning"
                        >

                            <i class="ti ti-edit me-1"></i>
                            Edit Data

                        </a>


                        <a
                            href="{{ route('pengumuman.index') }}"
                            class="btn btn-secondary"
                        >

                            Kembali

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
