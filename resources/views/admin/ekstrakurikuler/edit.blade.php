@extends('admin.layouts.main')

@section('content')

<div class="mb-4">
    <h3 class="fw-bold">Edit Ekstrakurikuler</h3>
    <p class="text-muted">Perbarui data ekstrakurikuler</p>
</div>

<div class="card shadow-sm border-0">

<div class="card-header py-3">
    <h5 class="mb-0">Form Edit Ekstrakurikuler</h5>
</div>

<div class="card-body">

    <form action="{{ route('ekstrakurikuler.update', $ekskul->id) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        {{-- Nama Ekstrakurikuler --}}
        <div class="mb-3">

            <label for="nama_ekskul" class="form-label">
                Nama Ekstrakurikuler
            </label>

            <input type="text"
                   id="nama_ekskul"
                   name="nama_ekskul"
                   class="form-control @error('nama_ekskul') is-invalid @enderror"
                   value="{{ old('nama_ekskul', $ekskul->nama_ekskul) }}"
                   placeholder="Masukkan nama ekstrakurikuler">

            @error('nama_ekskul')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>

        {{-- Pembina --}}
        <div class="mb-3">

            <label for="pembina" class="form-label">
                Pembina
            </label>

            <input type="text"
                   id="pembina"
                   name="pembina"
                   class="form-control @error('pembina') is-invalid @enderror"
                   value="{{ old('pembina', $ekskul->pembina) }}"
                   placeholder="Masukkan nama pembina">

            @error('pembina')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>

        {{-- Jadwal Latihan --}}
        <div class="mb-3">

            <label for="jadwal_latihan" class="form-label">
                Jadwal Latihan
            </label>

            <input type="text"
                   id="jadwal_latihan"
                   name="jadwal_latihan"
                   class="form-control @error('jadwal_latihan') is-invalid @enderror"
                   value="{{ old('jadwal_latihan', $ekskul->jadwal_latihan) }}"
                   placeholder="Masukkan jadwal latihan">

            @error('jadwal_latihan')
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
                      class="form-control @error('deskripsi') is-invalid @enderror"
                      rows="5"
                      placeholder="Masukkan deskripsi">{{ old('deskripsi', $ekskul->deskripsi) }}</textarea>

            @error('deskripsi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>

        {{-- Gambar Saat Ini --}}
        @if($ekskul->gambar)

            <div class="mb-3">

                <label class="form-label">
                    Gambar Saat Ini
                </label>

                <div class="mt-2">

                    <img src="{{ asset('uploads/ekstrakurikuler/' . $ekskul->gambar) }}"
                         alt="Gambar Ekstrakurikuler"
                         width="150"
                         height="150"
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

            <a href="{{ route('ekstrakurikuler.index') }}"
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
