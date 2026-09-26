@extends('admin.layouts.main')

@section('content')

<div class="pc-container">
    <div class="pc-content">

        <div class="page-header">
            <div class="page-block">

                <div class="page-header-title">
                    <h5 class="m-b-10">Tambah User</h5>
                </div>

                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="{{ route('users.index') }}">
                            Kelola Users
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
                        <h5>Form Tambah User</h5>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('users.store') }}"
                              method="POST">

                            @csrf

                            <div class="mb-3">

                                <label class="form-label">
                                    Nama
                                </label>

                                <input type="text"
                                       name="name"
                                       class="form-control"
                                       placeholder="Masukkan nama"
                                       value="{{ old('name') }}"
                                       required>

                                @error('name')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror

                            </div>

                            <div class="mb-3">

                                <label class="form-label">
                                    Email
                                </label>

                                <input type="email"
                                       name="email"
                                       class="form-control"
                                       placeholder="Masukkan email"
                                       value="{{ old('email') }}"
                                       required>

                                @error('email')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror

                            </div>

                            <div class="mb-3">

                                <label class="form-label">
                                    Password
                                </label>

                                <input type="password"
                                       name="password"
                                       class="form-control"
                                       placeholder="Masukkan password"
                                       required>

                                @error('password')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror

                            </div>

                            <div class="mb-3">

                                <label class="form-label">
                                    Role
                                </label>

                                <select name="role"
                                        class="form-control"
                                        required>

                                    <option value="">
                                        -- Pilih Role --
                                    </option>

                                    <option value="administrator">
                                        Administrator
                                    </option>

                                    <option value="user">
                                        User
                                    </option>

                                </select>

                                @error('role')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror

                            </div>

                            <button type="submit"
                                    class="btn btn-primary">
                                Simpan
                            </button>

                            <a href="{{ route('users.index') }}"
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
