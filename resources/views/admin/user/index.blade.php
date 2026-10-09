
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

                    {{-- TAMBAH USER HANYA UNTUK ADMINISTRATOR --}}
                    @if(auth()->check() && strtolower(trim(auth()->user()->role)) === 'administrator')

                        <a href="{{ route('user.create') }}" class="btn btn-primary">
                            <i class="ti ti-plus"></i>
                            Tambah User
                        </a>

                    @endif

                </div>
            </div>

            <div class="card-body">

                {{-- Pesan berhasil --}}
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

                {{-- Pesan error --}}
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

                    <table class="table table-bordered table-hover align-middle">

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th style="width: 280px;">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse($users as $user)

                                <tr>

                                    {{-- Nomor --}}
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>

                                    {{-- Nama --}}
                                    <td>
                                        {{ $user->name }}
                                    </td>

                                    {{-- Email --}}
                                    <td>
                                        {{ $user->email }}
                                    </td>

                                    {{-- Role --}}
                                    <td>
                                        <span class="badge bg-primary">
                                            {{ $user->role }}
                                        </span>
                                    </td>

                                    {{-- Aksi --}}
                                    <td>
                                        <div class="d-flex gap-2 flex-nowrap">

                                            {{-- DETAIL --}}
                                            <a href="{{ route('user.show', $user->id) }}"
                                               class="btn btn-info btn-sm"
                                               title="Detail User">

                                                <i class="ti ti-eye"></i>
                                            </a>

                                            {{-- EDIT & HAPUS HANYA UNTUK ADMINISTRATOR --}}
                                            @if(auth()->check() && strtolower(trim(auth()->user()->role)) === 'administrator')

                                                {{-- EDIT --}}
                                                <a href="{{ route('user.edit', $user->id) }}"
                                                   class="btn btn-warning btn-sm"
                                                   title="Edit User">

                                                    <i class="ti ti-edit"></i>
                                                </a>

                                                {{-- HAPUS --}}
                                                <form action="{{ route('user.destroy', $user->id) }}"
                                                      method="POST"
                                                      class="d-inline form-hapus">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit"
                                                            class="btn btn-danger btn-sm"
                                                            title="Hapus User">

                                                        <i class="ti ti-trash"></i>
                                                    </button>

                                                </form>

                                            @endif

                                        </div>
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
