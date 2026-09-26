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
                            <h5 class="m-b-10">Edit Pengumuman</h5>
                        </div>

                        <ul class="breadcrumb">

                            <li class="breadcrumb-item">
                                <a href="{{ url('/') }}">
                                    Home
                                </a>
                            </li>

                            <li class="breadcrumb-item">
                                <a href="{{ route('pengumuman.index') }}">
                                    Pengumuman
                                </a>
                            </li>

                            <li class="breadcrumb-item">
                                Edit
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
                        <h5>Form Edit Pengumuman</h5>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('pengumuman.update', $pengumuman->id) }}"
                              method="POST"
                              enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            {{-- Judul --}}
                            <div class="mb-3">

                                <label class="form-label">
                                    Judul Pengumuman
                                </label>

                                <input type="text"
                                       name="judul"
                                       class="form-control"
                                       value="{{ old('judul', $pengumuman->judul) }}"
                                       placeholder="Masukkan judul pengumuman"
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
                                       value="{{ old('tanggal', $pengumuman->tanggal) }}"
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
                                          required>{{ old('isi', $pengumuman->isi) }}</textarea>

                                @error('isi')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror

                            </div>

                            {{-- Gambar Lama --}}
                            <div class="mb-3">

                                <label class="form-label">
                                    Gambar Saat Ini
                                </label>

                                <br>

                                @if($pengumuman->gambar)

                                    <img src="{{ asset('uploads/pengumuman/' . $pengumuman->gambar) }}"
                                         width="150"
                                         height="100"
                                         style="object-fit: cover;"
                                         class="rounded">

                                @else

                                    <p class="text-muted">
                                        Belum ada gambar
                                    </p>

                                @endif

                            </div>

                            {{-- Gambar Baru --}}
                            <div class="mb-3">

                                <label class="form-label">
                                    Ganti Gambar
                                </label>

                                <input type="file"
                                       name="gambar"
                                       class="form-control"
                                       accept=".jpg,.jpeg,.png">

                                <small class="text-muted">
                                    Kosongkan jika tidak ingin mengganti gambar.
                                    Format JPG, JPEG, PNG. Maksimal 2 MB.
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
                                    Update

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
