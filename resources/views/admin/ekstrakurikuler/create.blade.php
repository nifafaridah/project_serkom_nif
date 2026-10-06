@extends('admin.layouts.main')

@section('content')

<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Tambah Ekstrakurikuler</h5>
                </div>

                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="{{ route('ekstrakurikuler.index') }}">
                            Ekstrakurikuler
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
                <h5>Form Data Ekstrakurikuler</h5>
            </div>

            <div class="card-body">

                <form action="{{ route('ekstrakurikuler.store') }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf

                    {{-- Nama Ekstrakurikuler --}}
                    <div class="mb-3">
                        <label class="form-label">
                            Nama Ekstrakurikuler
                        </label>

                        <input type="text"
                               name="nama_ekskul"
                               class="form-control @error('nama_ekskul') is-invalid @enderror"
                               placeholder="Masukkan nama ekstrakurikuler"
                               value="{{ old('nama_ekskul') }}">

                        @error('nama_ekskul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    {{-- Pembina --}}
                    <div class="mb-3">
                        <label class="form-label">
                            Pembina
                        </label>

                        <input type="text"
                               name="pembina"
                               class="form-control @error('pembina') is-invalid @enderror"
                               placeholder="Masukkan nama pembina"
                               value="{{ old('pembina') }}">

                        @error('pembina')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    {{-- Jadwal Latihan --}}
                    <div class="mb-3">
                        <label class="form-label">
                            Jadwal Latihan
                        </label>

                        <input type="text"
                               name="jadwal_latihan"
                               class="form-control @error('jadwal_latihan') is-invalid @enderror"
                               placeholder="Contoh: Senin, 14.00 - 16.00"
                               value="{{ old('jadwal_latihan') }}">

                        @error('jadwal_latihan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    {{-- Deskripsi --}}
                    <div class="mb-3">
                        <label class="form-label">
                            Deskripsi
                        </label>

                        <textarea name="deskripsi"
                                  rows="5"
                                  class="form-control @error('deskripsi') is-invalid @enderror"
                                  placeholder="Masukkan deskripsi">{{ old('deskripsi') }}</textarea>

                        @error('deskripsi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    {{-- Gambar --}}
                    <div class="mb-3">
                        <label class="form-label">
                            Gambar
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


                    {{-- Tombol --}}
                    <div class="mt-4">

                        <button type="submit"
                                class="btn btn-primary">
                            <i class="ti ti-device-floppy"></i>
                            Simpan
                        </button>

                        <a href="{{ route('ekstrakurikuler.index') }}"
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
