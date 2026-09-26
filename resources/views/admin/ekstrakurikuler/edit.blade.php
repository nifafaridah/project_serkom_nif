@extends('admin.layouts.main')

@section('content')

<div class="pc-container">
    <div class="pc-content">

        <!-- Header -->
        <div class="page-header">
            <div class="page-block">
                <div class="page-header-title">
                    <h5 class="mb-0">Edit Ekstrakurikuler</h5>
                </div>
            </div>
        </div>

        <!-- Error -->
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Card -->
        <div class="card">

            <div class="card-header">
                <h5>Edit Data Ekstrakurikuler</h5>
            </div>

            <div class="card-body">

                <form action="{{ route('ekstrakurikuler.update', ['id' => $ekskul->id]) }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <!-- Nama -->
                    <div class="mb-3">

                        <label class="form-label">
                            Nama Ekstrakurikuler
                        </label>

                        <input type="text"
                               name="nama_ekskul"
                               class="form-control"
                               value="{{ old('nama_ekskul', $ekskul->nama_ekskul) }}"
                               required>

                    </div>

                    <!-- Pembina -->
                    <div class="mb-3">

                        <label class="form-label">
                            Pembina
                        </label>

                        <input type="text"
                               name="pembina"
                               class="form-control"
                               value="{{ old('pembina', $ekskul->pembina) }}"
                               required>

                    </div>

                    <!-- Jadwal -->
                    <div class="mb-3">

                        <label class="form-label">
                            Jadwal Latihan
                        </label>

                        <input type="text"
                               name="jadwal_latihan"
                               class="form-control"
                               value="{{ old('jadwal_latihan', $ekskul->jadwal_latihan) }}"
                               required>

                    </div>

                    <!-- Deskripsi -->
                    <div class="mb-3">

                        <label class="form-label">
                            Deskripsi
                        </label>

                        <textarea name="deskripsi"
                                  class="form-control"
                                  rows="5"
                                  required>{{ old('deskripsi', $ekskul->deskripsi) }}</textarea>

                    </div>

                    <!-- Gambar Lama -->
                    @if($ekskul->gambar)

                        <div class="mb-3">

                            <label class="form-label">
                                Gambar Saat Ini
                            </label>

                            <br>

                            <img src="{{ asset('uploads/ekstrakurikuler/' . $ekskul->gambar) }}"
                                 width="150"
                                 height="150"
                                 style="object-fit: cover;"
                                 class="img-thumbnail">

                        </div>

                    @endif

                    <!-- Gambar Baru -->
                    <div class="mb-3">

                        <label class="form-label">
                            Ganti Gambar
                        </label>

                        <input type="file"
                               name="gambar"
                               class="form-control"
                               accept="image/*">

                        <small class="text-muted">
                            Kosongkan jika tidak ingin mengganti gambar.
                        </small>

                    </div>

                    <!-- Tombol -->
                    <button type="submit"
                            class="btn btn-primary">
                        Simpan Perubahan
                    </button>

                    <a href="{{ route('ekstrakurikuler.index') }}"
                       class="btn btn-secondary">
                        Kembali
                    </a>

                </form>

            </div>

        </div>

    </div>
</div>

@endsection
