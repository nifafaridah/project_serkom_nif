@extends('admin.layouts.main')

@section('content')

<div class="pc-container">
    <div class="pc-content">

        {{-- HEADER --}}
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">

                    <div class="col-md-12">

                        <div class="page-header-title">
                            <h5 class="m-b-10">Tambah Data Guru</h5>
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

                            <li class="breadcrumb-item">
                                Tambah Guru
                            </li>

                        </ul>

                    </div>

                </div>
            </div>
        </div>


        {{-- FORM GURU --}}
        <div class="row">

            <div class="col-sm-12">

                <div class="card">

                    <div class="card-header">
                        <h5>Form Data Guru</h5>
                    </div>

                    <div class="card-body">

                        {{-- ERROR VALIDASI --}}
                        @if ($errors->any())

                            <div class="alert alert-danger">

                                <strong>Data belum berhasil disimpan!</strong>

                                <ul class="mb-0 mt-2">

                                    @foreach ($errors->all() as $error)

                                        <li>{{ $error }}</li>

                                    @endforeach

                                </ul>

                            </div>

                        @endif


                        {{-- FORM --}}
                        <form action="{{ route('guru.store') }}"
                              method="POST"
                              enctype="multipart/form-data">

                            @csrf


                            {{-- NAMA GURU --}}
                            <div class="mb-3">

                                <label for="nama_guru"
                                       class="form-label">

                                    Nama Guru

                                </label>

                                <input type="text"
                                       name="nama_guru"
                                       id="nama_guru"
                                       class="form-control"
                                       value="{{ old('nama_guru') }}"
                                       placeholder="Masukkan nama guru"
                                       required>

                            </div>


                            {{-- NIP --}}
                            <div class="mb-3">

                                <label for="nip"
                                       class="form-label">

                                    NIP

                                </label>

                                <input type="text"
                                       name="nip"
                                       id="nip"
                                       class="form-control"
                                       value="{{ old('nip') }}"
                                       placeholder="Masukkan NIP"
                                       required>

                            </div>


                            {{-- MATA PELAJARAN --}}
                            <div class="mb-3">

                                <label for="mapel"
                                       class="form-label">

                                    Mata Pelajaran

                                </label>

                                <input type="text"
                                       name="mapel"
                                       id="mapel"
                                       class="form-control"
                                       value="{{ old('mapel') }}"
                                       placeholder="Masukkan mata pelajaran"
                                       required>

                            </div>


                            {{-- FOTO --}}
                            <div class="mb-3">

                                <label for="foto"
                                       class="form-label">

                                    Foto Guru

                                </label>

                                <input type="file"
                                       name="foto"
                                       id="foto"
                                       class="form-control"
                                       accept=".jpg,.jpeg,.png">

                                <small class="text-muted">
                                    Format JPG, JPEG, PNG. Maksimal 2 MB.
                                </small>

                            </div>


                            {{-- TOMBOL --}}
                            <div class="mt-4">

                                <a href="{{ route('guru.index') }}"
                                   class="btn btn-secondary">

                                    Kembali

                                </a>

                                <button type="submit"
                                        class="btn btn-primary">

                                    <i class="ti ti-device-floppy me-1"></i>

                                    Simpan Data

                                </button>

                            </div>


                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>

@endsection
