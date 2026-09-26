@extends('admin.layouts.main')

@section('content')

<div class="pc-container">

    <div class="pc-content">

        <div class="page-header">

            <div class="page-block">

                <div class="page-header-title">

                    <h5 class="mb-0">
                        Tambah Berita
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
                        Tambah
                    </li>

                </ul>

            </div>

        </div>


        <div class="row">

            <div class="col-sm-12">

                <div class="card">

                    <div class="card-header">

                        <h5>
                            Tambah Data Berita
                        </h5>

                    </div>


                    <div class="card-body">

                        <form
                            action="{{ route('berita.store') }}"
                            method="POST"
                            enctype="multipart/form-data"
                        >

                            @csrf


                            <!-- JUDUL -->

                            <div class="mb-3">

                                <label class="form-label">
                                    Judul Berita
                                </label>

                                <input
                                    type="text"
                                    name="judul"
                                    class="form-control"
                                    value="{{ old('judul') }}"
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
                                >{{ old('isi') }}</textarea>

                            </div>


                            <!-- GAMBAR -->

                            <div class="mb-3">

                                <label class="form-label">
                                    Gambar Berita
                                </label>

                                <input
                                    type="file"
                                    name="gambar"
                                    class="form-control"
                                    accept="image/*"
                                >

                            </div>


                            <button
                                type="submit"
                                class="btn btn-primary"
                            >

                                Simpan

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
