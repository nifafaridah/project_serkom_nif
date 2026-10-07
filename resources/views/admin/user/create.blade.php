@extends('admin.layouts.main')

@section('content')

<div class="page-header">
    <div class="page-block">
        <div class="page-header-title">
            <h5 class="mb-0">Tambah User</h5>
        </div>

        <ul class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('user.index') }}">User</a>
            </li>
            <li class="breadcrumb-item">Tambah User</li>
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

                {{-- Pesan Error --}}
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- Form Tambah User --}}
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf

                    {{-- Nama --}}
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input
                            type="text"
                            name="name"
                            class="form-control"
                            value="{{ old('name') }}"
                            placeholder="Masukkan nama"
                            required>
                    </div>

                    {{-- Email --}}
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            value="{{ old('email') }}"
                            placeholder="Masukkan email"
                            required>
                    </div>

                    {{-- Password --}}
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input
                            type="password"
                            name="password"
                            class="form-control"
                            placeholder="Masukkan password"
                            required>
                    </div>

                    {{-- Role --}}
                    <div class="mb-3">
                        <label class="form-label">Role</label>

                        <select
                            name="role"
                            class="form-control"
                            required>

                            <option value="">
                                -- Pilih Role --
                            </option>

                            <option value="User"
                                {{ old('role') == 'User' ? 'selected' : '' }}>
                                User
                            </option>

                            <option value="Operator"
                                {{ old('role') == 'Operator' ? 'selected' : '' }}>
                                Operator
                            </option>

                            <option value="Administrator"
                                {{ old('role') == 'Administrator' ? 'selected' : '' }}>
                                Administrator
                            </option>

                        </select>
                    </div>

                    {{-- Tombol --}}
                    <a href="{{ route('user.index') }}"
                       class="btn btn-secondary">
                        Kembali
                    </a>

                    <button
                        type="submit"
                        class="btn btn-primary">
                        Simpan
                    </button>

                </form>

            </div>

        </div>

    </div>
</div>

@endsection