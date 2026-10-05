
@extends('admin.layouts.main')

@section('content')

<div class="row">

    {{-- ================= HEADER ================= --}}
    <div class="col-12">

        <div class="page-header">

            <div class="page-block">

                <div class="row align-items-center">

                    <div class="col-md-12">

                        <div class="page-header-title">

                            <h5 class="m-b-10">
                                Profil Sekolah
                            </h5>

                        </div>

                        <ul class="breadcrumb">

                            <li class="breadcrumb-item">

                                <a href="{{ url('/') }}">
                                    Home
                                </a>

                            </li>

                            <li class="breadcrumb-item">
                                Profil Sekolah
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- ================= PESAN BERHASIL ================= --}}
    <div class="col-12">

        @if(session('success'))

            <div class="alert alert-success alert-dismissible fade show">

                <strong>Berhasil!</strong>

                {{ session('success') }}

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
                </button>

            </div>

        @endif


        @if($errors->any())

            <div class="alert alert-danger">

                <strong>Data belum bisa disimpan.</strong>

                <ul class="mb-0 mt-2">

                    @foreach($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif

    </div>


    {{-- ================================================= --}}
    {{-- KALAU BELUM ADA DATA --}}
    {{-- ================================================= --}}

    @if(!$profil)

        <div class="col-12">

            <form
                action="{{ route('profil-sekolah.store') }}"
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf


                <div class="row g-4">


                    {{-- ================= FOTO + LOGO ================= --}}
                    <div class="col-xl-4 col-lg-4 col-md-5">


                        {{-- FOTO SEKOLAH --}}
                        <div class="card">

                            <div class="card-header">

                                <h5 class="mb-0">
                                    Foto Sekolah
                                </h5>

                            </div>


                            <div class="card-body">

                                <div
                                    class="bg-light rounded d-flex align-items-center justify-content-center mb-3"
                                    style="
                                        width:100%;
                                        height:220px;
                                    "
                                >

                                    <div class="text-center">

                                        <i
                                            class="ti ti-school"
                                            style="
                                                font-size:50px;
                                                color:#999;
                                            "
                                        ></i>

                                        <p class="text-muted mb-0">
                                            Belum ada foto sekolah
                                        </p>

                                    </div>

                                </div>


                                <label class="form-label">
                                    Upload Foto Sekolah
                                </label>

                                <input
                                    type="file"
                                    name="foto"
                                    class="form-control"
                                    accept="image/*"
                                >

                                <small class="text-muted">
                                    JPG, JPEG, PNG. Maksimal 2 MB.
                                </small>

                            </div>

                        </div>


                        {{-- LOGO SEKOLAH --}}
                        <div class="card">

                            <div class="card-header">

                                <h5 class="mb-0">
                                    Logo Sekolah
                                </h5>

                            </div>


                            <div class="card-body text-center">

                                <div
                                    class="bg-light rounded d-flex align-items-center justify-content-center mx-auto mb-3"
                                    style="
                                        width:150px;
                                        height:150px;
                                    "
                                >

                                    <span class="text-muted">
                                        Belum ada logo
                                    </span>

                                </div>


                                <div class="text-start">

                                    <label class="form-label">
                                        Upload Logo Sekolah
                                    </label>

                                    <input
                                        type="file"
                                        name="logo"
                                        class="form-control"
                                        accept="image/*"
                                    >

                                    <small class="text-muted">
                                        JPG, JPEG, PNG. Maksimal 2 MB.
                                    </small>

                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- ================= FORM DATA ================= --}}
                    <div class="col-xl-8 col-lg-8 col-md-7">

                        <div class="card">

                            <div class="card-header">

                                <h5 class="mb-0">
                                    Form Profil Sekolah
                                </h5>

                            </div>


                            <div class="card-body">


                                {{-- NAMA SEKOLAH --}}
                                <div class="mb-3">

                                    <label class="form-label">
                                        Nama Sekolah
                                    </label>

                                    <input
                                        type="text"
                                        name="nama_sekolah"
                                        class="form-control"
                                        value="{{ old('nama_sekolah') }}"
                                        required
                                    >

                                </div>


                                {{-- KEPALA SEKOLAH --}}
                                <div class="mb-3">

                                    <label class="form-label">
                                        Kepala Sekolah
                                    </label>

                                    <input
                                        type="text"
                                        name="kepala_sekolah"
                                        class="form-control"
                                        value="{{ old('kepala_sekolah') }}"
                                        required
                                    >

                                </div>


                                {{-- NPSN --}}
                                <div class="mb-3">

                                    <label class="form-label">
                                        NPSN
                                    </label>

                                    <input
                                        type="text"
                                        name="npsn"
                                        class="form-control"
                                        value="{{ old('npsn') }}"
                                        required
                                    >

                                </div>


                                {{-- ALAMAT --}}
                                <div class="mb-3">

                                    <label class="form-label">
                                        Alamat Sekolah
                                    </label>

                                    <textarea
                                        name="alamat"
                                        class="form-control"
                                        rows="3"
                                        required
                                    >{{ old('alamat') }}</textarea>

                                </div>


                                {{-- KONTAK --}}
                                <div class="mb-3">

                                    <label class="form-label">
                                        Kontak
                                    </label>

                                    <input
                                        type="text"
                                        name="kontak"
                                        class="form-control"
                                        value="{{ old('kontak') }}"
                                        required
                                    >

                                </div>


                                {{-- TAHUN BERDIRI --}}
                                <div class="mb-3">

                                    <label class="form-label">
                                        Tahun Berdiri
                                    </label>

                                    <input
                                        type="number"
                                        name="tahun_berdiri"
                                        class="form-control"
                                        value="{{ old('tahun_berdiri') }}"
                                        required
                                    >

                                </div>


                                {{-- VISI MISI --}}
                                <div class="mb-3">

                                    <label class="form-label">
                                        Visi & Misi
                                    </label>

                                    <textarea
                                        name="visi_misi"
                                        class="form-control"
                                        rows="6"
                                        required
                                    >{{ old('visi_misi') }}</textarea>

                                </div>


                                {{-- DESKRIPSI --}}
                                <div class="mb-3">

                                    <label class="form-label">
                                        Deskripsi Sekolah
                                    </label>

                                    <textarea
                                        name="deskripsi"
                                        class="form-control"
                                        rows="6"
                                        required
                                    >{{ old('deskripsi') }}</textarea>

                                </div>


                                {{-- BUTTON --}}
                                <div class="text-end">

                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                    >

                                        <i class="ti ti-device-floppy"></i>

                                        Simpan Profil Sekolah

                                    </button>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </form>

        </div>


    {{-- ================================================= --}}
    {{-- KALAU DATA SUDAH ADA --}}
    {{-- ================================================= --}}

    @else

        <div class="col-12">

            <div class="row g-4">


                {{-- ================= FOTO + LOGO ================= --}}
                <div class="col-xl-4 col-lg-4 col-md-5">


                    {{-- FOTO SEKOLAH --}}
                    <div class="card">

                        <div class="card-header">

                            <h5 class="mb-0">
                                Foto Sekolah
                            </h5>

                        </div>


                        <div class="card-body">

                            @if($profil->foto)

                                <img
                                    src="{{ asset('uploads/profil/' . $profil->foto) }}"
                                    alt="Foto Sekolah"
                                    class="img-fluid rounded"
                                    style="
                                        width:100%;
                                        height:220px;
                                        object-fit:cover;
                                    "
                                >

                            @else

                                <div
                                    class="bg-light rounded d-flex align-items-center justify-content-center"
                                    style="
                                        width:100%;
                                        height:220px;
                                    "
                                >

                                    <div class="text-center">

                                        <i
                                            class="ti ti-school"
                                            style="
                                                font-size:50px;
                                                color:#999;
                                            "
                                        ></i>

                                        <p class="text-muted mb-0">
                                            Belum ada foto sekolah
                                        </p>

                                    </div>

                                </div>

                            @endif

                        </div>

                    </div>


                    {{-- LOGO SEKOLAH --}}
                    <div class="card">

                        <div class="card-header">

                            <h5 class="mb-0">
                                Logo Sekolah
                            </h5>

                        </div>


                        <div class="card-body text-center">

                            @if($profil->logo)

                                <img
                                    src="{{ asset('uploads/profil/' . $profil->logo) }}"
                                    alt="Logo Sekolah"
                                    style="
                                        width:150px;
                                        height:150px;
                                        object-fit:contain;
                                    "
                                >

                            @else

                                <div
                                    class="bg-light rounded d-flex align-items-center justify-content-center mx-auto"
                                    style="
                                        width:150px;
                                        height:150px;
                                    "
                                >

                                    <span class="text-muted">
                                        Belum ada logo
                                    </span>

                                </div>

                            @endif

                        </div>

                    </div>

                </div>


                {{-- ================= DATA PROFIL ================= --}}
                <div class="col-xl-8 col-lg-8 col-md-7">

                    <div class="card">

                        <div class="card-header d-flex justify-content-between align-items-center">

                            <div>

                                <h5 class="mb-1">
                                    Profil Sekolah
                                </h5>

                                <p class="mb-0 text-muted">
                                    Data profil sekolah
                                </p>

                            </div>


                            <a
                                href="{{ route('profil-sekolah.edit') }}"
                                class="btn btn-warning btn-sm"
                            >

                                <i class="ti ti-edit me-1"></i>

                                Edit Profil

                            </a>

                        </div>


                        <div class="card-body">


                            {{-- NAMA SEKOLAH --}}
                            <div class="mb-4">

                                <label class="form-label text-muted">
                                    Nama Sekolah
                                </label>

                                <h6 class="mb-0">
                                    {{ $profil->nama_sekolah }}
                                </h6>

                            </div>


                            {{-- KEPALA SEKOLAH --}}
                            <div class="mb-4">

                                <label class="form-label text-muted">
                                    Kepala Sekolah
                                </label>

                                <h6 class="mb-0">
                                    {{ $profil->kepala_sekolah }}
                                </h6>

                            </div>


                            {{-- NPSN --}}
                            <div class="mb-4">

                                <label class="form-label text-muted">
                                    NPSN
                                </label>

                                <h6 class="mb-0">
                                    {{ $profil->npsn }}
                                </h6>

                            </div>


                            {{-- ALAMAT --}}
                            <div class="mb-4">

                                <label class="form-label text-muted">
                                    Alamat Sekolah
                                </label>

                                <p class="mb-0">
                                    {{ $profil->alamat }}
                                </p>

                            </div>


                            {{-- KONTAK --}}
                            <div class="mb-4">

                                <label class="form-label text-muted">
                                    Kontak
                                </label>

                                <h6 class="mb-0">
                                    {{ $profil->kontak }}
                                </h6>

                            </div>


                            {{-- TAHUN BERDIRI --}}
                            <div class="mb-4">

                                <label class="form-label text-muted">
                                    Tahun Berdiri
                                </label>

                                <h6 class="mb-0">
                                    {{ $profil->tahun_berdiri }}
                                </h6>

                            </div>


                            {{-- VISI MISI --}}
                            <div class="mb-4">

                                <label class="form-label text-muted">
                                    Visi & Misi
                                </label>

                                <div style="white-space: pre-line;">
                                    {{ $profil->visi_misi }}
                                </div>

                            </div>


                            {{-- DESKRIPSI --}}
                            <div class="mb-4">

                                <label class="form-label text-muted">
                                    Deskripsi Sekolah
                                </label>

                                <div style="white-space: pre-line;">
                                    {{ $profil->deskripsi }}
                                </div>

                            </div>


                        </div>

                    </div>

                </div>

            </div>

        </div>

    @endif

</div>

@endsection
