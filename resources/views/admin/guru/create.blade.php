@extends('admin.layouts.main')

@section('content')

<style>
    .breadcrumb,
    .breadcrumb li {
        list-style: none !important;
    }

    .breadcrumb::before,
    .breadcrumb::after,
    .breadcrumb li::before,
    .breadcrumb li::after {
        display: none !important;
        content: none !important;
    }

    .breadcrumb {
        padding-left: 0 !important;
        margin-left: 0 !important;
    }
</style>

<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">


        <div class="col-md-12">

            <div class="page-header-title">
                <h5 class="m-b-10">Tambah Guru</h5>
            </div>

            <ul class="breadcrumb">

                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}">Home</a>
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

<div class="row">


<div class="col-md-12">

    <div class="card">

        <div class="card-header">
            <h5>Form Data Guru</h5>
        </div>

        <div class="card-body">

            <form action="{{ route('guru.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf


                <div class="mb-3">

                    <label class="form-label">
                        Nama Guru
                    </label>

                    <input type="text"
                           name="nama_guru"
                           class="form-control @error('nama_guru') is-invalid @enderror"
                           placeholder="Masukkan nama guru"
                           value="{{ old('nama_guru') }}"
                           required>

                    @error('nama_guru')

                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                <div class="mb-3">

                    <label class="form-label">
                        NIP
                    </label>

                    <input type="text"
                           name="nip"
                           class="form-control @error('nip') is-invalid @enderror"
                           placeholder="Masukkan NIP"
                           value="{{ old('nip') }}"
                           required>

                    @error('nip')

                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                <div class="mb-3">

                    <label class="form-label">
                        Mata Pelajaran
                    </label>

                    <input type="text"
                           name="mapel"
                           class="form-control @error('mapel') is-invalid @enderror"
                           placeholder="Masukkan mata pelajaran"
                           value="{{ old('mapel') }}"
                           required>

                    @error('mapel')

                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                <div class="mb-3">

                    <label class="form-label">
                        Foto Guru
                    </label>

                    <input type="file"
                           name="foto"
                           class="form-control @error('foto') is-invalid @enderror"
                           accept=".jpg,.jpeg,.png">

                    <small class="text-muted">
                        Format JPG, JPEG, PNG. Maksimal 2 MB.
                    </small>

                    @error('foto')

                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                <div class="mt-4">

                    <button type="submit"
                            class="btn btn-primary">

                        <i class="ti ti-device-floppy"></i>
                        Simpan

                    </button>


                    <a href="{{ route('guru.index') }}"
                       class="btn btn-secondary">

                        Kembali

                    </a>

                </div>


            </form>

        </div>

    </div>

</div>

</div>

@endsection
