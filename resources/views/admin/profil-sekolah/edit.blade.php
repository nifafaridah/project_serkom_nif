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
                            Edit Profil Sekolah
                        </h5>
                    </div>

                    <ul class="breadcrumb">

                        <li class="breadcrumb-item">
                            <a href="{{ url('/') }}">
                                Home
                            </a>
                        </li>

                        <li class="breadcrumb-item">
                            <a href="{{ route('profil-sekolah.index') }}">
                                Profil Sekolah
                            </a>
                        </li>

                        <li class="breadcrumb-item">
                            Edit
                        </li>

                    </ul>

                </div>

            </div>

        </div>
    </div>

</div>


{{-- ================= PESAN ================= --}}
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

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

</div>


{{-- ================= FORM ================= --}}
<div class="col-12">

    <form
        action="{{ route('profil-sekolah.update') }}"
        method="POST"
        enctype="multipart/form-data">

        @csrf
        @method('PUT')


        <div class="row g-4">


            {{-- ================================= --}}
            {{-- FOTO + LOGO --}}
            {{-- ================================= --}}
            <div class="col-xl-4 col-lg-4 col-md-5">


                {{-- FOTO SEKOLAH --}}
                <div class="card">

                    <div class="card-header">

                        <h5 class="mb-0">
                            Foto Sekolah
                        </h5>

                    </div>


                    <div class="card-body">

                        <div class="text-center">

                            @if($profil && $profil->foto)

                                <img
                                    src="{{ asset('uploads/profil/' . $profil->foto) }}"
                                    alt="Foto Sekolah"
                                    class="img-fluid rounded mb-3"
                                    style="
                                        width:100%;
                                        height:220px;
                                        object-fit:cover;
                                    "
                                >

                            @else

                                <div
                                    class="bg-light rounded d-flex align-items-center justify-content-center mb-3"
                                    style="
                                        width:100%;
                                        height:220px;
                                    "
                                >

                                    <div>

                                        <i
                                            class="ti ti-school"
                                            style="
                                                font-size:50px;
                                                color:#999;
                                            ">
                                        </i>

                                        <p class="text-muted mb-0">
                                            Belum ada foto sekolah
                                        </p>

                                    </div>

                                </div>

                            @endif

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

                        @if($profil && $profil->logo)

                            <img
                                src="{{ asset('uploads/profil/' . $profil->logo) }}"
                                alt="Logo Sekolah"
                                class="mb-3"
                                style="
                                    width:150px;
                                    height:150px;
                                    object-fit:contain;
                                "
                            >

                        @else

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

                        @endif


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



            {{-- ================================= --}}
            {{-- FORM DATA --}}
            {{-- ================================= --}}
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
                                value="{{ old('nama_sekolah', $profil->nama_sekolah ?? '') }}"
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
                                value="{{ old('kepala_sekolah', $profil->kepala_sekolah ?? '') }}"
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
                                value="{{ old('npsn', $profil->npsn ?? '') }}"
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
                            >{{ old('alamat', $profil->alamat ?? '') }}</textarea>

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
                                value="{{ old('kontak', $profil->kontak ?? '') }}"
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
                                value="{{ old('tahun_berdiri', $profil->tahun_berdiri ?? '') }}"
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
                            >{{ old('visi_misi', $profil->visi_misi ?? '') }}</textarea>

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
                            >{{ old('deskripsi', $profil->deskripsi ?? '') }}</textarea>

                        </div>


                        {{-- BUTTON --}}
                        <div class="text-end">

                            <a
                                href="{{ route('profil-sekolah.index') }}"
                                class="btn btn-secondary">

                                Kembali

                            </a>

                            <button
                                type="submit"
                                class="btn btn-primary">

                                <i class="ti ti-device-floppy"></i>

                                Update Profil Sekolah

                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </form>

</div>


</div>

@endsection
