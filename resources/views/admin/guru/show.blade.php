
@extends('admin.layouts.main')

@section('content')

<div class="page-header mb-4">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">

                <div class="page-header-title">
                    <h5 class="m-b-10">
                        Detail Guru
                    </h5>
                </div>

                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">
                            Home
                        </a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="{{ route('guru.index') }}">
                            Guru
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

    {{-- HEADER --}}
    <div class="card-header">

        <div>
            <h5 class="mb-1">
                Detail Guru
            </h5>

            <p class="mb-0 text-muted">
                Informasi data guru
            </p>
        </div>

    </div>


    {{-- BODY --}}
    <div class="card-body">

        {{-- FOTO + DATA GURU SEJAJAR --}}
        <div class="row align-items-center">

            {{-- FOTO --}}
            <div class="col-md-4 text-center">

                @if(!empty($guru->foto))

                    <img
                        src="{{ asset('uploads/guru/' . $guru->foto) }}"
                        alt="{{ $guru->nama_guru }}"
                        class="rounded shadow-sm"
                        style="
                            width: 200px;
                            height: 250px;
                            object-fit: cover;
                        "
                    >

                @else

                    <div
                        class="bg-light rounded d-flex align-items-center justify-content-center mx-auto"
                        style="
                            width: 200px;
                            height: 250px;
                        "
                    >

                        <div class="text-muted">

                            <i class="ti ti-user"
                               style="font-size: 60px;">
                            </i>

                            <p class="mb-0 mt-2">
                                Tidak ada foto
                            </p>

                        </div>

                    </div>

                @endif


                {{-- NAMA DI BAWAH FOTO --}}
                <h5 class="mt-3 mb-1">
                    {{ $guru->nama_guru }}
                </h5>

                <p class="text-muted mb-0">
                    {{ $guru->mapel }}
                </p>

            </div>


            {{-- DATA GURU --}}
            <div class="col-md-8">

                <h5 class="mb-3">
                    Data Guru
                </h5>


                <div class="table-responsive">

                    <table class="table table-bordered align-middle mb-0">

                        <tbody>

                            <tr>
                                <th style="width: 35%;">
                                    Nama Guru
                                </th>

                                <td>
                                    {{ $guru->nama_guru }}
                                </td>
                            </tr>


                            <tr>
                                <th>
                                    NIP
                                </th>

                                <td>
                                    {{ $guru->nip ?? '-' }}
                                </td>
                            </tr>


                            <tr>
                                <th>
                                    Mata Pelajaran
                                </th>

                                <td>
                                    {{ $guru->mapel ?? '-' }}
                                </td>
                            </tr>

                        </tbody>

                    </table>

                </div>


                {{-- TOMBOL --}}
                <div class="mt-4">

                    <a
                        href="{{ route('guru.edit', $guru->id_guru) }}"
                        class="btn btn-warning"
                    >

                        <i class="ti ti-edit me-1"></i>
                        Edit Data

                    </a>


                    <a
                        href="{{ route('guru.index') }}"
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
