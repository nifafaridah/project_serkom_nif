@extends('admin.layouts.main')

@section('content')

<div class="pc-container">
    <div class="pc-content">

        {{-- Breadcrumb --}}
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">

                        <div class="page-header-title">
                            <h5 class="m-b-10">Tambah Pengumuman</h5>
                        </div>

                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/') }}">Home</a>
                            </li>

                            <li class="breadcrumb-item">
                                <a href="{{ route('pengumuman.index') }}">
                                    Pengumuman
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

        {{-- Form --}}
        <div class="row">
            <div class="col-sm-12">

                <div class="card">

                    <div class="card-header">
                        <h5>Form Tambah Pengumuman</h5>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('pengumuman.store') }}"
                              method="POST"
                              enctype="multipart/form-data">

                            @csrf

                            {{-- Judul --}}
                            <div class="mb-3">
                                <label class="form-label">
                                    Judul Pengumuman
                                </label>

                                <input type="text"
                                       name="judul"
                                       class="form-control"
                                       placeholder="Masukkan judul pengumuman"
                                       value="{{ old('judul') }}"
                                       required>

                                @error('judul')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            {{-- Tanggal --}}
                            <div class="mb-3">
                                <label class="form-label">
                                    Tanggal
                                </label>

                                <input type="date"
                                       name="tanggal"
                                       class="form-control"
                                       value="{{ old('tanggal') }}"
                                       required>

                                @error('tanggal')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            {{-- Isi --}}
                            <div class="mb-3">
                                <label class="form-label">
                                    Isi Pengumuman
                                </label>

                                <textarea name="isi"
                                          class="form-control"
                                          rows="6"
                                          placeholder="Masukkan isi pengumuman"
                                          required>{{ old('isi') }}</textarea>

                                @error('isi')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            {{-- Gambar --}}
                            <div class="mb-3">
                                <label class="form-label">
                                    Gambar
                                </label>

                                <input type="file"
                                       name="gambar"
                                       class="form-control"
                                       accept=".jpg,.jpeg,.png">

                                <small class="text-muted">
                                    Format: JPG, JPEG, PNG. Maksimal 2 MB.
                                </small>

                                @error('gambar')
                                    <br>
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            {{-- Tombol --}}
                            <div class="mt-4">

                                <button type="submit"
                                        class="btn btn-primary">
                                    <i class="ti ti-device-floppy"></i>
                                    Simpan
                                </button>

                                <a href="{{ route('pengumuman.index') }}"
                                   class="btn btn-secondary">
                                    Kembali
                                </a>

                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection
