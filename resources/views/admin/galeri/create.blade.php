@extends('admin.layouts.main')

@section('content')

<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">


            <div class="page-header-title">
                <h5 class="m-b-10">Tambah Galeri</h5>
            </div>

            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}">Home</a>
                </li>

                <li class="breadcrumb-item">
                    <a href="{{ route('galeri.index') }}">Galeri</a>
                </li>

                <li class="breadcrumb-item">
                    Tambah
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
            <h5>Form Tambah Galeri</h5>
        </div>

        <div class="card-body">

            <form action="{{ route('galeri.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <div class="mb-3">
                    <label class="form-label">
                        Judul
                    </label>

                    <input type="text"
                           name="judul"
                           class="form-control @error('judul') is-invalid @enderror"
                           placeholder="Masukkan judul galeri"
                           value="{{ old('judul') }}"
                           required>

                    @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label class="form-label">
                        Gambar
                    </label>

                    <input type="file"
                           name="gambar"
                           class="form-control @error('gambar') is-invalid @enderror"
                           accept=".jpg,.jpeg,.png"
                           required>

                    <small class="text-muted">
                        Format JPG, JPEG, PNG. Maksimal 2 MB.
                    </small>

                    @error('gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label class="form-label">
                        Deskripsi
                    </label>

                    <textarea name="deskripsi"
                              class="form-control @error('deskripsi') is-invalid @enderror"
                              rows="5"
                              placeholder="Masukkan deskripsi"
                              required>{{ old('deskripsi') }}</textarea>

                    @error('deskripsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="mt-4">

                    <button type="submit" class="btn btn-primary">
                        <i class="ti ti-device-floppy"></i>
                        Simpan
                    </button>

                    <a href="{{ route('galeri.index') }}"
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
