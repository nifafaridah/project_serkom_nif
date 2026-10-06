@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">

    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Edit Data Guru</h5>
            <p class="text-muted mb-0">Edit data guru sekolah</p>
        </div>

        <div class="card-body">
            
            <form action="{{ route('guru.update', $guru->id_guru) }}" 
                  method="POST" 
                  enctype="multipart/form-data">
                
                @csrf
                @method('PUT')

                <!-- Nama Guru -->
                <div class="mb-3">
                    <label for="nama_guru" class="form-label">
                        Nama Guru
                    </label>
                    <input type="text"
                           class="form-control @error('nama_guru') is-invalid @enderror"
                           id="nama_guru"
                           name="nama_guru"
                           value="{{ old('nama_guru', $guru->nama_guru) }}"
                           required>
                    @error('nama_guru')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- NIP -->
                <div class="mb-3">
                    <label for="nip" class="form-label">
                        NIP
                    </label>
                    <input type="text"
                           class="form-control @error('nip') is-invalid @enderror"
                           id="nip"
                           name="nip"
                           value="{{ old('nip', $guru->nip) }}">
                    @error('nip')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Mata Pelajaran -->
                <div class="mb-3">
                    <label for="mapel" class="form-label">
                        Mata Pelajaran
                    </label>
                    <input type="text"
                           class="form-control @error('mapel') is-invalid @enderror"
                           id="mapel"
                           name="mapel"
                           value="{{ old('mapel', $guru->mapel) }}"
                           required>
                    @error('mapel')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Foto Guru -->
                <div class="mb-3">
                    <label for="foto" class="form-label">
                        Foto Guru
                    </label>

                    @if($guru->foto)
                        <div class="mb-2">
                            <img src="{{ asset('uploads/guru/' . $guru->foto) }}"
                                 alt="Foto Guru"
                                 width="120"
                                 height="120"
                                 style="object-fit: cover; border-radius: 8px;">
                        </div>
                    @endif

                    <input type="file"
                           class="form-control @error('foto') is-invalid @enderror"
                           id="foto"
                           name="foto"
                           accept="image/*">

                    <small class="text-muted d-block mt-1">
                        Kosongkan jika tidak ingin mengganti foto.
                    </small>
                    @error('foto')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Tombol Aksi -->
                <div class="d-flex gap-2 mt-4">
                    <button type="submit" class="btn btn-primary">
                        Simpan Perubahan
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
@endsection