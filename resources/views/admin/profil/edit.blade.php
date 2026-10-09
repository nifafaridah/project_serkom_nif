
@extends('admin.layouts.main')

@section('content')

<div class="page-header mb-4">
    <div class="page-block">
        <div class="page-header-title">
            <h5 class="m-b-10">Edit Profil Pengguna</h5>
        </div>

        <ul class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('profil.index') }}">Profil Pengguna</a>
            </li>
            <li class="breadcrumb-item active">
                Edit Profil
            </li>
        </ul>
    </div>
</div>

<div class="row">
    <div class="col-lg-8 col-md-12">
        <div class="card border-0 shadow-sm">

            <div class="card-header">
                <h5 class="mb-0">Form Edit Profil</h5>
            </div>

            <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('profile.update') }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">
                            Nama Pengguna
                        </label>

                        <input
                            type="text"
                            name="name"
                            id="name"
                            class="form-control"
                            value="{{ old('name', auth()->user()->name) }}"
                            placeholder="Masukkan nama pengguna"
                            required
                        >
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">
                            Email
                        </label>

                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="form-control"
                            value="{{ old('email', auth()->user()->email) }}"
                            placeholder="Masukkan email"
                            required
                        >
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Role</label>

                        <input
                            type="text"
                            class="form-control"
                            value="{{ auth()->user()->role }}"
                            readonly
                        >

                        <small class="text-muted">
                            Role tidak dapat diubah melalui profil.
                        </small>
                    </div>

                    <hr>

                    <h6 class="fw-bold mb-3">Ganti Password</h6>

                    <p class="text-muted small">
                        Kosongkan password jika tidak ingin menggantinya.
                    </p>

                    <div class="mb-3">
                        <label for="password" class="form-label">
                            Password Baru
                        </label>

                        <input
                            type="password"
                            name="password"
                            id="password"
                            class="form-control"
                            placeholder="Masukkan password baru"
                            autocomplete="new-password"
                        >
                    </div>

                    <div class="mb-4">
                        <label for="password_confirmation" class="form-label">
                            Konfirmasi Password Baru
                        </label>

                        <input
                            type="password"
                            name="password_confirmation"
                            id="password_confirmation"
                            class="form-control"
                            placeholder="Ulangi password baru"
                            autocomplete="new-password"
                        >
                    </div>

                    <div class="d-flex flex-wrap gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="ti ti-device-floppy me-1"></i>
                            Simpan Perubahan
                        </button>

                        <a href="{{ route('profil.index') }}"
                           class="btn btn-secondary">
                            Kembali
                        </a>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

@endsection
