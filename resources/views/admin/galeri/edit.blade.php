@extends('admin.layouts.main')

@section('content')

<div class="pc-container">
    <div class="pc-content">

        <div class="page-header">
            <div class="page-block">

                <div class="page-header-title">
                    <h5 class="m-b-10">Edit Galeri</h5>
                </div>

                <ul class="breadcrumb">

                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">
                            Home
                        </a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="{{ route('galeri.index') }}">
                            Galeri
                        </a>
                    </li>

                    <li class="breadcrumb-item">
                        Edit
                    </li>

                </ul>

            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">

                <div class="card">

                    <div class="card-header">
                        <h5>Form Edit Galeri</h5>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('galeri.update', $galeri->id) }}"
                              method="POST"
                              enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="mb-3">

                                <label class="form-label">
                                    Judul
                                </label>

                                <input type="text"
                                       name="judul"
                                       class="form-control"
                                       value="{{ old('judul', $galeri->judul) }}"
                                       required>

                                @error('judul')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror

                            </div>

                            <div class="mb-3">

                                <label class="form-label">
                                    Gambar Saat Ini
                                </label>

                                <br>

                                @if($galeri->gambar)

                                    <img src="{{ asset('uploads/galeri/' . $galeri->gambar) }}"
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
                                </small>

                            </div>

                            <div class="mb-3">

                                <label class="form-label">
                                    Deskripsi
                                </label>

                                <textarea name="deskripsi"
                                          class="form-control"
                                          rows="5">{{ old('deskripsi', $galeri->deskripsi) }}</textarea>

                            </div>

                            <button type="submit"
                                    class="btn btn-primary">
                                Update
                            </button>

                            <a href="{{ route('galeri.index') }}"
                               class="btn btn-secondary">
                                Kembali
                            </a>

                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection
