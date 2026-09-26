@extends('admin.layouts.main')

@section('content')

<div class="pc-container">
    <div class="pc-content">

        <div class="page-header">
            <div class="page-block">

                <div class="page-header-title">
                    <h5 class="m-b-10">Tambah Galeri</h5>
                </div>

                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="{{ route('galeri.index') }}">
                            Galeri
                        </a>
                    </li>

                    <li class="breadcrumb-item">
                        Tambah
                    </li>
                </ul>

            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">

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
                                       class="form-control"
                                       placeholder="Masukkan judul galeri"
                                       value="{{ old('judul') }}"
                                       required>

                                @error('judul')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror

                            </div>

                            <div class="mb-3">

                                <label class="form-label">
                                    Gambar
                                </label>

                                <input type="file"
                                       name="gambar"
                                       class="form-control"
                                       accept=".jpg,.jpeg,.png"
                                       required>

                                <small class="text-muted">
                                    Format JPG, JPEG, PNG. Maksimal 2 MB.
                                </small>

                                @error('gambar')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror

                            </div>

                            <div class="mb-3">

                                <label class="form-label">
                                    Deskripsi
                                </label>

                                <textarea name="deskripsi"
                                          class="form-control"
                                          rows="5"
                                          placeholder="Masukkan deskripsi">{{ old('deskripsi') }}</textarea>

                            </div>

                            <button type="submit"
                                    class="btn btn-primary">
                                Simpan
                            </button>

                            <a href="{{ route('galeri.index') }}"
                               class="btn btn-secondary">
                                Kembali
                            </a>

                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection
