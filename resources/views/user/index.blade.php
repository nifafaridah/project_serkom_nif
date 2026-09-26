@extends('admin.layouts.main')

@section('content')

<div class="pc-container">
    <div class="pc-content">

        <div class="page-header">
            <div class="page-block">

                <div class="page-header-title">
                    <h5 class="m-b-10">Kelola Users</h5>
                </div>

                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>

                    <li class="breadcrumb-item">
                        Kelola Users
                    </li>
                </ul>

            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">

                <div class="card">

                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">

                            <h5>Daftar Users</h5>

                            <a href="{{ route('users.create') }}"
                               class="btn btn-primary">
                                <i class="ti ti-plus"></i>
                                Tambah User
                            </a>

                        </div>
                    </div>

                    <div class="card-body">

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="table-responsive">

                            <table class="table table-hover table-bordered">

                                <thead>
                                    <tr>
                                        <th width="60">No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th width="180">Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @forelse($users as $user)

                                    <tr>

                                        <td>
                                            {{ $loop->iteration }}
                                        </td>

                                        <td>
                                            {{ $user->name }}
                                        </td>

                                        <td>
                                            {{ $user->email }}
                                        </td>

                                        <td>
                                            <span class="badge bg-primary">
                                                {{ $user->role }}
                                            </span>
                                        </td>

                                        <td>

                                            <a href="{{ route('users.edit', $user->id) }}"
                                               class="btn btn-warning btn-sm">
                                                Edit
                                            </a>

                                            <form action="{{ route('users.destroy', $user->id) }}"
                                                  method="POST"
                                                  style="display:inline">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                        class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Yakin ingin menghapus user ini?')">
                                                    Hapus
                                                </button>

                                            </form>

                                        </td>

                                    </tr>

                                    @empty

                                    <tr>
                                        <td colspan="5" class="text-center">
                                            Belum ada user.
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

    </div>
</div>

@endsection
