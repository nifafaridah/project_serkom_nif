@extends('admin.layouts.main')

@section('content')

<div class="page-header mb-4">

    <div class="page-block">

        <div class="row align-items-center">

            <div class="col-md-12">

                <div class="page-header-title">
                    <h5 class="m-b-10">
                        Tambah Prestasi
                    </h5>
                </div>

                <ul class="breadcrumb">

                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">
                            Home
                        </a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="{{ route('prestasi.index') }}">
                            Prestasi
                        </a>
                    </li>

                    <li class="breadcrumb-item">
                        Tambah
                    </li>

                </ul>

            </div>

        </div>

    </div>

</div>


<div class="card border-0 shadow-sm">

    <div class="card-header">

        <h5 class="mb-0">
            Form Tambah Prestasi
        </h5>

    </div>


    <div class="card-body">

        @if($errors->any())

            <div class="alert alert-danger">

                <ul class="mb-0">

                    @foreach($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        <form
            action="{{ route('prestasi.store') }}"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf


            <div class="mb-3">

                <label class="form-label">
                    Deskripsi Prestasi
                </label>

                <textarea
                    name="deskripsi"
                    class="form-control"
                    rows="6"
                    placeholder="Masukkan deskripsi prestasi"
                    required
                >{{ old('deskripsi') }}</textarea>

            </div>


            <div class="mb-3">

                <label class="form-label">
                    Foto Prestasi
                </label>

                <input
                    type="file"
                    name="foto"
                    class="form-control"
                    accept="image/*"
                >

                <small class="text-muted">
                    Format: JPG, JPEG, PNG, WEBP. Maksimal 2 MB.
                </small>

            </div>


            <div class="mb-4">

                <label class="form-label">
                    Tahun Ajaran
                </label>

                <input
                    type="text"
                    name="tahun_ajaran"
                    class="form-control"
                    value="{{ old('tahun_ajaran') }}"
                    placeholder="Contoh: 2025/2026"
                    maxlength="20"
                    required
                >

            </div>


            <div class="d-flex gap-2">

                <button
                    type="submit"
                    class="btn btn-primary"
                >

                    <i class="ti ti-device-floppy me-1"></i>

                    Simpan

                </button>


                <a
                    href="{{ route('prestasi.index') }}"
                    class="btn btn-light"
                >

                    Kembali

                </a>

            </div>

        </form>

    </div>

</div>

@endsection