@extends('admin.layouts.main')

@section('content')

<div class="pc-container">
    <div class="pc-content">

        <div class="page-header">
            <div class="page-block">

                <div class="page-header-title">
                    <h5 class="m-b-10">Edit User</h5>
                </div>

                <ul class="breadcrumb">

                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">
                            Home
                        </a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="{{ route('users.index') }}">
                            Kelola Users
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
                        <h5>Form Edit User</h5>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('users.update', $user->id) }}"
                              method="POST">

                            @csrf
                            @method('PUT')

                            <div class="mb-3">

                                <label class="form-label">
                                    Nama
                                </label>

                                <input type="text"
                                       name="name"
                                       class="form-control"
                                       value="{{ old('name', $user->name) }}"
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
                                       value="{{ old('email', $user->email) }}"
                                       required>

                                @error('email')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror

                            </div>

                            <div class="mb-3">

                                <label class="form-label">
                                    Password Baru
                                </label>

                                <input type="password"
                                       name="password"
                                       class="form-control"
                                       placeholder="Kosongkan jika tidak ingin mengubah password">

                                <small class="text-muted">
                                    Kosongkan jika password tidak ingin diubah.
                                </small>

                            </div>

                            <div class="mb-3">

                                <label class="form-label">
                                    Role
                                </label>

                                <select name="role"
                                        class="form-control"
                                        required>

                                    <option value="administrator"
                                        {{ $user->role == 'administrator' ? 'selected' : '' }}>
                                        Administrator
                                    </option>

                                    <option value="user"
                                        {{ $user->role == 'user' ? 'selected' : '' }}>
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
                                Update
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
