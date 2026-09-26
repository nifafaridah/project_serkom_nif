@extends('admin.layouts.main')

@section('content')

<div class="pc-container">
    <div class="pc-content">

        <div class="mb-4">
            <h3 class="fw-bold">Edit Siswa</h3>
            <p class="text-muted">Perbarui data siswa</p>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body">

                <form action="{{ route('siswa.update', $siswa->id_siswa) }}"
                      method="POST">

                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">NISN</label>

                        <input type="text"
                               name="nisn"
                               class="form-control"
                               value="{{ old('nisn', $siswa->nisn) }}">

                        @error('nisn')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama Siswa</label>

                        <input type="text"
                               name="nama_siswa"
                               class="form-control"
                               value="{{ old('nama_siswa', $siswa->nama_siswa) }}">

                        @error('nama_siswa')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>

                        <select name="jenis_kelamin" class="form-select">

                            <option value="Laki-Laki"
                                {{ $siswa->jenis_kelamin == 'Laki-Laki' ? 'selected' : '' }}>
                                Laki-Laki
                            </option>

                            <option value="Perempuan"
                                {{ $siswa->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>
                                Perempuan
                            </option>

                        </select>

                        @error('jenis_kelamin')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tahun Masuk</label>

                        <input type="number"
                               name="tahun_masuk"
                               class="form-control"
                               value="{{ old('tahun_masuk', $siswa->tahun_masuk) }}">

                        @error('tahun_masuk')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="d-flex gap-2">

                        <a href="{{ route('siswa.index') }}"
                           class="btn btn-secondary">
                            Kembali
                        </a>

                        <button type="submit" class="btn btn-primary">
                            <i class="ti ti-device-floppy me-1"></i>
                            Update
                        </button>

                    </div>

                </form>

            </div>
        </div>

    </div>
</div>

@endsection