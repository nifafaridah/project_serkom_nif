@extends('admin.layouts.main')

@section('content')


    {{-- HEADER PROFIL --}}
    <div class="card school-header mb-4">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="school-icon">
                    <i class="ti ti-school"></i>
                </div>
                <div class="ms-3">
                    <h3 class="mb-1 text-white">Profil Sekolah</h3>
                    <p class="mb-0 text-white opacity-75">Kelola informasi dan data utama sekolah</p>
                </div>
            </div>
        </div>
    </div>

    {{-- PESAN BERHASIL --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="ti ti-check me-2"></i>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- FORM UTAMA --}}
    <form action="{{ route('profil-sekolah.store') }}" method="POST">
        @csrf

        <div class="row">

            {{-- KOLOM KIRI --}}
            <div class="col-lg-7">
                <div class="card mb-4">
                    <div class="card-header form-title">
                        <h5 class="mb-0">
                            <i class="ti ti-building-school me-2"></i>Informasi Sekolah
                        </h5>
                    </div>
                    <div class="card-body">

                        {{-- Nama Sekolah --}}
                        <div class="mb-3">
                            <label class="form-label">Nama Sekolah</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="ti ti-school"></i></span>
                                <input type="text" name="nama_sekolah" class="form-control"
                                       value="{{ $profil->nama_sekolah ?? '' }}"
                                       placeholder="Masukkan nama sekolah">
                            </div>
                        </div>

                        {{-- Kepala Sekolah --}}
                        <div class="mb-3">
                            <label class="form-label">Kepala Sekolah</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="ti ti-user"></i></span>
                                <input type="text" name="kepala_sekolah" class="form-control"
                                       value="{{ $profil->kepala_sekolah ?? '' }}"
                                       placeholder="Masukkan nama kepala sekolah">
                            </div>
                        </div>

                        {{-- NPSN --}}
                        <div class="mb-3">
                            <label class="form-label">NPSN</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="ti ti-id"></i></span>
                                <input type="text" name="npsn" class="form-control"
                                       value="{{ $profil->npsn ?? '' }}"
                                       placeholder="Masukkan NPSN">
                            </div>
                        </div>

                        {{-- Kontak --}}
                        <div class="mb-3">
                            <label class="form-label">Kontak</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="ti ti-phone"></i></span>
                                <input type="text" name="kontak" class="form-control"
                                       value="{{ $profil->kontak ?? '' }}"
                                       placeholder="Masukkan nomor kontak sekolah">
                            </div>
                        </div>

                        {{-- Tahun Berdiri --}}
                        <div class="mb-3">
                            <label class="form-label">Tahun Berdiri</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="ti ti-calendar"></i></span>
                                <input type="number" name="tahun_berdiri" class="form-control"
                                       value="{{ $profil->tahun_berdiri ?? '' }}"
                                       placeholder="Contoh: 2000">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- KOLOM KANAN --}}
            <div class="col-lg-5">
                <div class="card mb-4">
                    <div class="card-header form-title">
                        <h5 class="mb-0">
                            <i class="ti ti-map-pin me-2"></i>Alamat Sekolah
                        </h5>
                    </div>
                    <div class="card-body">
                        <label class="form-label">Alamat Lengkap</label>
                        <textarea name="alamat" class="form-control mb-2" rows="7"
                                  placeholder="Masukkan alamat lengkap sekolah">{{ $profil->alamat ?? '' }}</textarea>
                        <small class="text-muted d-block">Isi alamat lengkap sekolah secara rinci.</small>
                    </div>
                </div>

                {{-- CARD INFO --}}
                <div class="info-card">
                    <div class="info-icon">
                        <i class="ti ti-info-circle"></i>
                    </div>
                    <div>
                        <h6 class="mb-1">Informasi</h6>
                        <p class="mb-0 small">Pastikan data profil sekolah diisi dengan benar agar informasi yang ditampilkan sesuai.</p>
                    </div>
                </div>
            </div>

        </div>

        {{-- VISI MISI --}}
        <div class="card mb-4">
            <div class="card-header form-title">
                <h5 class="mb-0">
                    <i class="ti ti-target-arrow me-2"></i>Visi & Misi Sekolah
                </h5>
            </div>
            <div class="card-body">
                <label class="form-label">Visi & Misi</label>
                <textarea name="visi_misi" class="form-control" rows="5"
                          placeholder="Masukkan visi dan misi sekolah">{{ $profil->visi_misi ?? '' }}</textarea>
            </div>
        </div>

        {{-- DESKRIPSI --}}
        <div class="card mb-4">
            <div class="card-header form-title">
                <h5 class="mb-0">
                    <i class="ti ti-file-description me-2"></i>Deskripsi Sekolah
                </h5>
            </div>
            <div class="card-body">
                <textarea name="deskripsi" class="form-control" rows="5"
                          placeholder="Masukkan deskripsi tentang sekolah">{{ $profil->deskripsi ?? '' }}</textarea>
            </div>
        </div>

        {{-- TOMBOL AKSI --}}
        <div class="d-flex justify-content-end mb-4 gap-2">
            <button type="reset" class="btn btn-light">
                <i class="ti ti-refresh me-1"></i>Reset
            </button>
            <button type="submit" class="btn btn-primary btn-save">
                <i class="ti ti-device-floppy me-1"></i>Simpan Profil
            </button>
        </div>

    </form>
</div>
@endsection