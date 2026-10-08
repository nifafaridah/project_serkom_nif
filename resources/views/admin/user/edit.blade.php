@extends('admin.layouts.main')

@section('content')

<div class="container-fluid">

    <div class="row">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                    <h5>Edit User</h5>
                </div>

                <div class="card-body">

                    <form action="{{ route('user.update', $user->id) }}" method="POST">

                        @csrf
                        @method('PUT')

                        {{-- Nama --}}
                        <div class="mb-3">
                            <label class="form-label">Nama</label>

                            <input
                                type="text"
                                name="name"
                                class="form-control"
                                value="{{ old('name', $user->name) }}"
                                required>
                        </div>

                        {{-- Email --}}
                        <div class="mb-3">
                            <label class="form-label">Email</label>

                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                value="{{ old('email', $user->email) }}"
                                required>
                        </div>

                        {{-- Role --}}
                        <div class="mb-3">
                            <label class="form-label">Role</label>

                            <select name="role" class="form-control" required>

                                <option value="administrator"
                                    {{ $user->role == 'administrator' ? 'selected' : '' }}>
                                    Administrator
                                </option>

                                <option value="operator"
                                    {{ $user->role == 'operator' ? 'selected' : '' }}>
                                    Operator
                                </option>

                            </select>
                        </div>

                        {{-- Tombol --}}
                        <button type="submit" class="btn btn-primary">
                            Simpan Perubahan
                        </button>

                        <a href="{{ route('user.index') }}" class="btn btn-secondary">
                            Kembali
                        </a>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection