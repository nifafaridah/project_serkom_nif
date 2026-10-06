@extends('admin.layouts.main')

@section('content')

<div class="mb-4">
    <h3 class="fw-bold">Edit Siswa</h3>
    <p class="text-muted">Perbarui data siswa</p>
</div>

<div class="card shadow-sm border-0">


{{-- Header Form --}}
<div class="card-header py-3">
    <h5 class="mb-0">Form Edit Siswa</h5>
</div>

{{-- Isi Form --}}
<div class="card-body">

    <form action="{{ route('siswa.update', $siswa->id_siswa) }}"
          method="POST">

        @csrf
        @method('PUT')

        {{-- NISN --}}
        <div class="mb-3">
            <label for="nisn" class="form-label">
                NISN
            </label>

            <input type="text"
                   id="nisn"
                   name="nisn"
                   class="form-control @error('nisn') is-invalid @enderror"
                   value="{{ old('nisn', $siswa->nisn) }}"
                   placeholder="Masukkan NISN">

            @error('nisn')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        {{-- Nama Siswa --}}
        <div class="mb-3">
            <label for="nama_siswa" class="form-label">
                Nama Siswa
            </label>

            <input type="text"
                   id="nama_siswa"
                   name="nama_siswa"
                   class="form-control @error('nama_siswa') is-invalid @enderror"
                   value="{{ old('nama_siswa', $siswa->nama_siswa) }}"
                   placeholder="Masukkan nama siswa">

            @error('nama_siswa')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        {{-- Jenis Kelamin --}}
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">
                Jenis Kelamin
            </label>

            <select id="jenis_kelamin"
                    name="jenis_kelamin"
                    class="form-select @error('jenis_kelamin') is-invalid @enderror">

                <option value="">-- Pilih Jenis Kelamin --</option>

                <option value="Laki-Laki"
                    {{ old('jenis_kelamin', $siswa->jenis_kelamin) == 'Laki-Laki' ? 'selected' : '' }}>
                    Laki-Laki
                </option>

                <option value="Perempuan"
                    {{ old('jenis_kelamin', $siswa->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>
                    Perempuan
                </option>

            </select>

            @error('jenis_kelamin')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        {{-- Tahun Masuk --}}
        <div class="mb-3">
            <label for="tahun_masuk" class="form-label">
                Tahun Masuk
            </label>

            <input type="number"
                   id="tahun_masuk"
                   name="tahun_masuk"
                   class="form-control @error('tahun_masuk') is-invalid @enderror"
                   value="{{ old('tahun_masuk', $siswa->tahun_masuk) }}"
                   placeholder="Contoh: 2024">

            @error('tahun_masuk')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        {{-- Tombol --}}
        <div class="d-flex gap-2 mt-4">

            <a href="{{ route('siswa.index') }}"
               class="btn btn-secondary">

                <i class="ti ti-arrow-left me-1"></i>
                Kembali

            </a>

            <button type="submit"
                    class="btn btn-primary">

                <i class="ti ti-device-floppy me-1"></i>
                Update

            </button>

        </div>

    </form>

</div>

</div>

@endsection
