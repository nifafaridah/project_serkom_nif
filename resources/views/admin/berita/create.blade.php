@extends('admin.layouts.main')

@section('content')

<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">


            <div class="page-header-title">
                <h5 class="m-b-10">Tambah Berita</h5>
            </div>

            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}">Home</a>
                </li>

                <li class="breadcrumb-item">
                    <a href="{{ route('berita.index') }}">
                        Berita
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

<div class="row">
    <div class="col-md-12">


    <div class="card">

        <div class="card-header">
            <h5>Form Data Berita</h5>
        </div>

        <div class="card-body">

            <form action="{{ route('berita.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <div class="mb-3">
                    <label class="form-label">
                        Judul Berita
                    </label>

                    <input type="text"
                           name="judul"
                           class="form-control @error('judul') is-invalid @enderror"
                           placeholder="Masukkan judul berita"
                           value="{{ old('judul') }}">

                    @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Isi Berita
                    </label>

                    <textarea name="isi"
                              rows="5"
                              class="form-control @error('isi') is-invalid @enderror"
                              placeholder="Masukkan isi berita">{{ old('isi') }}</textarea>

                    @error('isi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Tanggal
                    </label>

                    <input type="date"
                           name="tanggal"
                           class="form-control @error('tanggal') is-invalid @enderror"
                           value="{{ old('tanggal') }}">

                    @error('tanggal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Gambar Berita
                    </label>

                    <input type="file"
                           name="gambar"
                           class="form-control @error('gambar') is-invalid @enderror"
                           accept=".jpg,.jpeg,.png">

                    <small class="text-muted">
                        Format JPG, JPEG, PNG. Maksimal 2 MB.
                    </small>

                    @error('gambar')
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

                    <a href="{{ route('berita.index') }}"
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
