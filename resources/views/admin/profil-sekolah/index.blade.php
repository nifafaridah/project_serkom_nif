@extends('admin.layouts.main')

@section('content')

<div class="page-header">
    <div class="page-block">
        <div class="page-header-title">
            <h5 class="mb-0">Profil Sekolah</h5>
        </div>

        <ul class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('/') }}">Home</a>
            </li>

            <li class="breadcrumb-item active">
                Profil Sekolah
            </li>
        </ul>
    </div>
</div>


<div class="row">
    <div class="col-12">

        {{-- NOTIFIKASI BERHASIL --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        {{-- ERROR --}}
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <div class="card">

            <div class="card-header">
                <h5>Form Profil Sekolah</h5>
            </div>


            <div class="card-body">

                <form action="{{ route('profil-sekolah.store') }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf


                    {{-- NAMA SEKOLAH --}}
                    <div class="mb-3">
                        <label for="nama_sekolah" class="form-label">
                            Nama Sekolah
                        </label>

                        <input
                            type="text"
                            id="nama_sekolah"
                            name="nama_sekolah"
                            class="form-control"
                            value="{{ old('nama_sekolah', $profil->nama_sekolah ?? '') }}"
                            placeholder="Masukkan nama sekolah"
                            required>
                    </div>


                    {{-- KEPALA SEKOLAH --}}
                    <div class="mb-3">
                        <label for="kepala_sekolah" class="form-label">
                            Kepala Sekolah
                        </label>

                        <input
                            type="text"
                            id="kepala_sekolah"
                            name="kepala_sekolah"
                            class="form-control"
                            value="{{ old('kepala_sekolah', $profil->kepala_sekolah ?? '') }}"
                            placeholder="Masukkan nama kepala sekolah"
                            required>
                    </div>


                    {{-- NPSN --}}
                    <div class="mb-3">
                        <label for="npsn" class="form-label">
                            NPSN
                        </label>

                        <input
                            type="text"
                            id="npsn"
                            name="npsn"
                            class="form-control"
                            value="{{ old('npsn', $profil->npsn ?? '') }}"
                            placeholder="Masukkan NPSN"
                            required>
                    </div>


                    {{-- ALAMAT --}}
                    <div class="mb-3">
                        <label for="alamat" class="form-label">
                            Alamat Sekolah
                        </label>

                        <textarea
                            id="alamat"
                            name="alamat"
                            class="form-control"
                            rows="4"
                            placeholder="Masukkan alamat sekolah"
                            required>{{ old('alamat', $profil->alamat ?? '') }}</textarea>
                    </div>


                    {{-- KONTAK --}}
                    <div class="mb-3">
                        <label for="kontak" class="form-label">
                            Kontak
                        </label>

                        <input
                            type="text"
                            id="kontak"
                            name="kontak"
                            class="form-control"
                            value="{{ old('kontak', $profil->kontak ?? '') }}"
                            placeholder="Masukkan nomor kontak"
                            required>
                    </div>


                    {{-- TAHUN BERDIRI --}}
                    <div class="mb-3">
                        <label for="tahun_berdiri" class="form-label">
                            Tahun Berdiri
                        </label>

                        <input
                            type="number"
                            id="tahun_berdiri"
                            name="tahun_berdiri"
                            class="form-control"
                            value="{{ old('tahun_berdiri', $profil->tahun_berdiri ?? '') }}"
                            placeholder="Contoh: 2000"
                            required>
                    </div>


                    {{-- VISI MISI --}}
                    <div class="mb-3">
                        <label for="visi_misi" class="form-label">
                            Visi & Misi
                        </label>

                        <textarea
                            id="visi_misi"
                            name="visi_misi"
                            class="form-control"
                            rows="5"
                            placeholder="Masukkan visi dan misi sekolah"
                            required>{{ old('visi_misi', $profil->visi_misi ?? '') }}</textarea>
                    </div>


                    {{-- DESKRIPSI --}}
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">
                            Deskripsi Sekolah
                        </label>

                        <textarea
                            id="deskripsi"
                            name="deskripsi"
                            class="form-control"
                            rows="5"
                            placeholder="Masukkan deskripsi sekolah"
                            required>{{ old('deskripsi', $profil->deskripsi ?? '') }}</textarea>
                    </div>


                    {{-- FOTO --}}
                    <div class="mb-3">
                        <label for="foto" class="form-label">
                            Foto Sekolah
                        </label>

                        <input
                            type="file"
                            id="foto"
                            name="foto"
                            class="form-control"
                            accept=".jpg,.jpeg,.png">

                        <small class="text-muted">
                            JPG, JPEG, PNG maksimal 2 MB
                        </small>

                        @if(isset($profil) && $profil->foto)
                            <div class="mt-3">
                                <p>Foto saat ini:</p>

                                <img
                                    src="{{ asset('uploads/profil/' . $profil->foto) }}"
                                    style="width: 150px; height: auto;"
                                    class="img-thumbnail">
                            </div>
                        @endif
                    </div>


                    {{-- LOGO --}}
                    <div class="mb-3">
                        <label for="logo" class="form-label">
                            Logo Sekolah
                        </label>

                        <input
                            type="file"
                            id="logo"
                            name="logo"
                            class="form-control"
                            accept=".jpg,.jpeg,.png">

                        <small class="text-muted">
                            JPG, JPEG, PNG maksimal 2 MB
                        </small>

                        @if(isset($profil) && $profil->logo)
                            <div class="mt-3">
                                <p>Logo saat ini:</p>

                                <img
                                    src="{{ asset('uploads/profil/' . $profil->logo) }}"
                                    style="width: 120px; height: auto;"
                                    class="img-thumbnail">
                            </div>
                        @endif
                    </div>


                    {{-- TOMBOL SIMPAN --}}
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">
                            Simpan Data
                        </button>
                    </div>

                </form>

            </div>

        </div>

    </div>
</div>

@endsection
