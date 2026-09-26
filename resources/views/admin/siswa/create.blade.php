@extends('admin.layouts.main')

@section('content')

<div class="row">

    {{-- Judul Halaman --}}
    <div class="col-12">
        <div class="page-header mb-4">
            <div class="page-block">
                <div class="page-header-title">
                    <h3 class="mb-1">Tambah Siswa</h3>
                    <p class="text-muted mb-0">
                        Tambahkan data siswa baru
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- Form Tambah Siswa --}}
    <div class="col-12">

        <div class="card">

            <div class="card-header">
                <h5 class="mb-0">Form Data Siswa</h5>
            </div>

            <div class="card-body">

                <form action="{{ route('siswa.store') }}" method="POST">

                    @csrf

                    {{-- NISN --}}
                    <div class="mb-3">
                        <label class="form-label">
                            NISN
                        </label>

                        <input type="text"
                               name="nisn"
                               class="form-control"
                               value="{{ old('nisn') }}"
                               placeholder="Masukkan NISN">

                        @error('nisn')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    {{-- Nama --}}
                    <div class="mb-3">
                        <label class="form-label">
                            Nama Siswa
                        </label>

                        <input type="text"
                               name="nama_siswa"
                               class="form-control"
                               value="{{ old('nama_siswa') }}"
                               placeholder="Masukkan nama siswa">

                        @error('nama_siswa')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    {{-- Jenis Kelamin --}}
                    <div class="mb-3">
                        <label class="form-label">
                            Jenis Kelamin
                        </label>

                        <select name="jenis_kelamin"
                                class="form-select">

                            <option value="">
                                -- Pilih Jenis Kelamin --
                            </option>

                            <option value="Laki-Laki"
                                {{ old('jenis_kelamin') == 'Laki-Laki' ? 'selected' : '' }}>
                                Laki-Laki
                            </option>

                            <option value="Perempuan"
                                {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>
                                Perempuan
                            </option>

                        </select>

                        @error('jenis_kelamin')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    {{-- Tahun Masuk --}}
                    <div class="mb-3">
                        <label class="form-label">
                            Tahun Masuk
                        </label>

                        <input type="number"
                               name="tahun_masuk"
                               class="form-control"
                               value="{{ old('tahun_masuk') }}"
                               placeholder="Contoh: 2024">

                        @error('tahun_masuk')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                    {{-- Tombol --}}
                    <div class="d-flex gap-2">
                        <a href="{{ route('siswa.index') }}"
                           class="btn btn-secondary">
                            Kembali
                        </a>
                        <button type="submit"
                                class="btn btn-primary">
                            <i class="ti ti-device-floppy me-1"></i>
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection