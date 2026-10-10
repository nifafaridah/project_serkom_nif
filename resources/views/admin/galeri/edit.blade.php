```blade
@extends('admin.layouts.main')

@section('content')

<div class="mb-4">
    <h3 class="fw-bold">Edit Galeri</h3>
    <p class="text-muted">Perbarui data galeri</p>
</div>

<div class="card shadow-sm border-0">

    {{-- Header Form --}}
    <div class="card-header py-3">
        <h5 class="mb-0">Form Edit Galeri</h5>
    </div>

    {{-- Isi Form --}}
    <div class="card-body">

        <form action="{{ route('galeri.update', $galeri->id) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            {{-- Judul --}}
            <div class="mb-3">

                <label for="judul" class="form-label">
                    Judul Galeri
                </label>

                <input type="text"
                       id="judul"
                       name="judul"
                       class="form-control @error('judul') is-invalid @enderror"
                       value="{{ old('judul', $galeri->judul) }}"
                       placeholder="Masukkan judul galeri"
                       required>

                @error('judul')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            {{-- Deskripsi --}}
            <div class="mb-3">

                <label for="deskripsi" class="form-label">
                    Deskripsi
                </label>

                <textarea id="deskripsi"
                          name="deskripsi"
                          rows="5"
                          class="form-control @error('deskripsi') is-invalid @enderror"
                          placeholder="Masukkan deskripsi galeri">{{ old('deskripsi', $galeri->deskripsi) }}</textarea>

                @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            {{-- Gambar Saat Ini --}}
            @if($galeri->gambar)

                <div class="mb-3">

                    <label class="form-label">
                        Gambar Saat Ini
                    </label>

                    <div class="mt-2">

                        <img src="{{ asset('uploads/galeri/' . $galeri->gambar) }}"
                             alt="Gambar Galeri"
                             width="180"
                             height="120"
                             class="img-thumbnail"
                             style="object-fit: cover;">

                    </div>

                </div>

            @endif

            {{-- Ganti Gambar --}}
            <div class="mb-3">

                <label for="gambar" class="form-label">
                    Ganti Gambar
                </label>

                <input type="file"
                       id="gambar"
                       name="gambar"
                       class="form-control @error('gambar') is-invalid @enderror"
                       accept="image/jpeg,image/png">

                <small class="text-muted">
                    Format JPG, JPEG, atau PNG. Maksimal 5 MB.
                    Kosongkan jika tidak ingin mengganti gambar.
                </small>

                @error('gambar')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            {{-- Tombol --}}
            <div class="d-flex gap-2 mt-4">

                <a href="{{ route('galeri.index') }}"
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
