@extends('admin.layouts.main')

@section('content')

<div class="mb-4">
    <h3 class="fw-bold">Edit Berita</h3>
    <p class="text-muted">Perbarui data berita</p>
</div>

<div class="card shadow-sm border-0">


{{-- Header Form --}}
<div class="card-header py-3">
    <h5 class="mb-0">Form Edit Berita</h5>
</div>

{{-- Isi Form --}}
<div class="card-body">

    <form action="{{ route('berita.update', $berita->id) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')


        {{-- Judul Berita --}}
        <div class="mb-3">

            <label for="judul" class="form-label">
                Judul Berita
            </label>

            <input type="text"
                   id="judul"
                   name="judul"
                   class="form-control @error('judul') is-invalid @enderror"
                   value="{{ old('judul', $berita->judul) }}"
                   placeholder="Masukkan judul berita"
                   required>

            @error('judul')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>


        {{-- Isi Berita --}}
        <div class="mb-3">

            <label for="isi" class="form-label">
                Isi Berita
            </label>

            <textarea id="isi"
                      name="isi"
                      rows="7"
                      class="form-control @error('isi') is-invalid @enderror"
                      placeholder="Masukkan isi berita"
                      required>{{ old('isi', $berita->isi) }}</textarea>

            @error('isi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>


        {{-- Tanggal --}}
        <div class="mb-3">

            <label for="tanggal" class="form-label">
                Tanggal
            </label>

            <input type="date"
                   id="tanggal"
                   name="tanggal"
                   class="form-control @error('tanggal') is-invalid @enderror"
                   value="{{ old('tanggal', $berita->tanggal) }}"
                   required>

            @error('tanggal')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>


        {{-- Gambar Saat Ini --}}
        @if($berita->gambar)

            <div class="mb-3">

                <label class="form-label">
                    Gambar Saat Ini
                </label>

                <div class="mt-2">

                    <img src="{{ asset('uploads/berita/' . $berita->gambar) }}"
                         alt="Gambar Berita"
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
                   accept="image/*">

            <small class="text-muted">
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

            <a href="{{ route('berita.index') }}"
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
