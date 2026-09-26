@extends('admin.layouts.main')

@section('content')

<div class="pc-container">
    <div class="pc-content">

        <div class="page-header">
            <div class="page-block">
                <div class="page-header-title">
                    <h5 class="mb-0">Tambah Ekstrakurikuler</h5>
                </div>
            </div>
        </div>

        <div class="card">

            <div class="card-header">
                <h5>Tambah Data Ekstrakurikuler</h5>
            </div>

            <div class="card-body">

                <form action="{{ route('ekstrakurikuler.store') }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf

                    <div class="mb-3">
                        <label class="form-label">
                            Nama Ekstrakurikuler
                        </label>

                        <input type="text"
                               name="nama_ekskul"
                               class="form-control"
                               value="{{ old('nama_ekskul') }}"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Pembina
                        </label>

                        <input type="text"
                               name="pembina"
                               class="form-control"
                               value="{{ old('pembina') }}"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Jadwal Latihan
                        </label>

                        <input type="text"
                               name="jadwal_latihan"
                               class="form-control"
                               value="{{ old('jadwal_latihan') }}"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Deskripsi
                        </label>

                        <textarea name="deskripsi"
                                  class="form-control"
                                  rows="5"
                                  required>{{ old('deskripsi') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Gambar
                        </label>

                        <input type="file"
                               name="gambar"
                               class="form-control"
                               accept="image/*">
                    </div>

                    <button type="submit"
                            class="btn btn-primary">
                        Simpan
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
