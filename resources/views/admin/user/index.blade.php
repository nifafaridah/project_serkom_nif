@extends('admin.layouts.main')

@section('content')

<div class="page-header">
    <div class="page-block">
        <div class="page-header-title">
            <h5 class="mb-0">Data User</h5>
        </div>

        <ul class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('/') }}">Home</a>
            </li>
            <li class="breadcrumb-item">User</li>
        </ul>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">

        <div class="card">

            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">

                    <div>
                        <h5 class="mb-1">Daftar User</h5>
                        <p class="text-muted mb-0">
                            Kelola data pengguna sistem
                        </p>
                    </div>

                    <a href="{{ route('user.create') }}" class="btn btn-primary">
                        <i class="ti ti-plus"></i>
                        Tambah User
                    </a>

                </div>
            </div>

            <div class="card-body">
                @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Berhasil!</strong> {{ session('success') }}

        <button type="button"
                class="btn-close"
                data-bs-dismiss="alert"
                aria-label="Close">
        </button>
    </div>
@endif

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="table-responsive">

                    <table class="table table-hover align-middle">

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse($users as $user)

                                <tr>

                                    <td>{{ $loop->iteration }}</td>

                                    <td>{{ $user->name }}</td>

                                    <td>{{ $user->email }}</td>

                                    <td>
                                        <span class="badge bg-primary">
                                            {{ $user->role }}
                                        </span>
                                    </td>

                                    <td>
                                        <a href="{{ route('user.edit', $user->id) }}"
                                           class="btn btn-warning btn-sm">
                                            <i class="ti ti-edit"></i>
                                            Edit
                                        </a>

                                        <form action="{{ route('user.destroy', $user->id) }}"
                                              method="POST"
                                              style="display:inline;">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Yakin ingin menghapus user ini?')">

                                                <i class="ti ti-trash"></i>
                                                Hapus

                                            </button>

                                        </form>
                                    </td>

                                </tr>

                            @empty

                                <tr>
                                    <td colspan="5" class="text-center">
                                        Belum ada data user
                                    </td>
                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>
</div>

@endsection
