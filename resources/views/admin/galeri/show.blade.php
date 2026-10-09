
@extends('admin.layouts.main')

@section('content')

<div class="container-fluid">

    <div class="page-header mb-4">
        <div class="row align-items-center">

            <div class="col">
                <h5 class="mb-0">Detail Galeri</h5>
            </div>

            <div class="col-auto">
                <ul class="breadcrumb mb-0">

                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="{{ route('galeri.index') }}">
                            Galeri
                        </a>
                    </li>

                    <li class="breadcrumb-item active">
                        Detail
                    </li>

                </ul>
            </div>

        </div>
    </div>


    <div class="card border-0 shadow-sm">

        <div class="card-header">

            <div>
                <h5 class="mb-1">Detail Galeri</h5>

                <p class="mb-0 text-muted">
                    Informasi foto galeri sekolah
                </p>
            </div>

        </div>


        <div class="card-body">

            <div class="row">

                {{-- FOTO GALERI --}}
                <div class="col-md-5 text-center">

                    @if(!empty($galeri->gambar))

                        <img
                            src="{{ asset('uploads/galeri/' . $galeri->gambar) }}"
                            alt="{{ $galeri->judul }}"
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

                                <i class="ti ti-photo"
                                   style="font-size: 70px;">
                                </i>

                                <p class="mb-0 mt-2">
                                    Tidak ada gambar
                                </p>

                            </div>

                        </div>

                    @endif

                </div>


                {{-- DATA GALERI --}}
                <div class="col-md-7">

                    <h5 class="mb-3">
                        Data Galeri
                    </h5>

                    <div class="table-responsive">

                        <table class="table table-bordered align-middle mb-0">

                            <tbody>

                                <tr>

                                    <th style="width: 30%;">
                                        Judul
                                    </th>

                                    <td>
                                        {{ $galeri->judul ?? '-' }}
                                    </td>

                                </tr>

                                <tr>

                                    <th>
                                        Deskripsi
                                    </th>

                                    <td>
                                        {{ $galeri->deskripsi ?? '-' }}
                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </div>


                    {{-- TOMBOL --}}
                    <div class="mt-4">

                        <a href="{{ route('galeri.edit', $galeri->id) }}"
                           class="btn btn-warning">

                            <i class="ti ti-edit me-1"></i>
                            Edit Data

                        </a>

                        <a href="{{ route('galeri.index') }}"
                           class="btn btn-secondary">

                            <i class="ti ti-arrow-left me-1"></i>
                            Kembali

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
