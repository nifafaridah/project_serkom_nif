@extends('admin.layouts.main')

@section('content')

<div class="pc-container">

    <div class="pc-content">

        <div class="page-header">

            <div class="page-block">

                <div class="page-header-title">

                    <h5 class="mb-0">
                        Edit Berita
                    </h5>

                </div>

                <ul class="breadcrumb">

                    <li class="breadcrumb-item">

                        <a href="{{ url('/') }}">
                            Home
                        </a>

                    </li>

                    <li class="breadcrumb-item">

                        <a href="{{ route('berita.index') }}">
                            Berita
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

                        <h5>
                            Edit Data Berita
                        </h5>

                    </div>


                    <div class="card-body">

                        <form
                            action="{{ route('berita.update', ['id' => $berita->id]) }}"
                            method="POST"
                            enctype="multipart/form-data"
                        >

                            @csrf

                            @method('PUT')


                            <!-- JUDUL -->

                            <div class="mb-3">

                                <label class="form-label">
                                    Judul Berita
                                </label>

                                <input
                                    type="text"
                                    name="judul"
                                    class="form-control"
                                    value="{{ old('judul', $berita->judul) }}"
                                    required
                                >

                            </div>


                            <!-- ISI -->

                            <div class="mb-3">

                                <label class="form-label">
                                    Isi Berita
                                </label>

                                <textarea
                                    name="isi"
                                    class="form-control"
                                    rows="6"
                                    required
                                >{{ old('isi', $berita->isi) }}</textarea>

                            </div>


                            <!-- GAMBAR LAMA -->

                            @if($berita->gambar)

                                <div class="mb-3">

                                    <label class="form-label">
                                        Gambar Saat Ini
                                    </label>

                                    <br>

                                    <img
                                        src="{{ asset('uploads/berita/' . $berita->gambar) }}"
                                        width="150"
                                        height="100"
                                        style="object-fit:cover; border-radius:6px;"
                                    >

                                </div>

                            @endif


                            <!-- GAMBAR BARU -->

                            <div class="mb-3">

                                <label class="form-label">
                                    Ganti Gambar
                                </label>

                                <input
                                    type="file"
                                    name="gambar"
                                    class="form-control"
                                    accept="image/*"
                                >

                                <small class="text-muted">

                                    Kosongkan jika tidak ingin mengganti gambar.

                                </small>

                            </div>


                            <button
                                type="submit"
                                class="btn btn-primary"
                            >

                                Simpan Perubahan

                            </button>


                            <a
                                href="{{ route('berita.index') }}"
                                class="btn btn-secondary"
                            >

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
