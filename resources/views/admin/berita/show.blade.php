@extends('admin.layouts.main')

@section('content')

<div class="page-header mb-4">

    <div class="page-block">

        <div class="row align-items-center">

            <div class="col-md-12">

                <div class="page-header-title">

                    <h5 class="m-b-10">
                        Detail Berita
                    </h5>

                </div>

                <ul class="breadcrumb">

                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">
                            Home
                        </a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="{{ route('berita.index') }}">
                            Berita
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
    <div class="card-header d-flex justify-content-between align-items-center">

        <div>

            <h5 class="mb-1">
                Detail Berita
            </h5>

            <p class="mb-0 text-muted">
                Informasi berita sekolah
            </p>

        </div>


        <a href="{{ route('berita.index') }}"
           class="btn btn-secondary btn-sm">

            <i class="ti ti-arrow-left me-1"></i>
            Kembali

        </a>

    </div>


    {{-- BODY CARD --}}
    <div class="card-body">

        <div class="row">


            {{-- GAMBAR --}}
            <div class="col-md-5 text-center">

                @if(!empty($berita->gambar))

                    <img
                        src="{{ asset('uploads/berita/' . $berita->gambar) }}"
                        alt="{{ $berita->judul }}"
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
                                class="ti ti-news"
                                style="font-size: 70px;"
                            ></i>

                            <p class="mb-0 mt-2">
                                Tidak ada gambar
                            </p>

                        </div>

                    </div>

                @endif

            </div>


            {{-- DATA BERITA --}}
            <div class="col-md-7">

                <h5 class="mb-3">
                    Data Berita
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
                                    {{ $berita->judul ?? '-' }}
                                </td>

                            </tr>


                            {{-- TANGGAL --}}
                            <tr>

                                <th>
                                    Tanggal
                                </th>

                                <td>
                                    {{ $berita->tanggal ?? '-' }}
                                </td>

                            </tr>


                            {{-- ISI --}}
                            <tr>

                                <th>
                                    Isi Berita
                                </th>

                                <td>
                                    {{ $berita->isi ?? '-' }}
                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>


                {{-- TOMBOL --}}
                <div class="mt-4">

                    <a
                        href="{{ route('berita.edit', $berita->id) }}"
                        class="btn btn-warning"
                    >

                        <i class="ti ti-edit me-1"></i>
                        Edit Data

                    </a>


                    <a
                        href="{{ route('berita.index') }}"
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