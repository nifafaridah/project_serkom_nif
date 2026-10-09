
@extends('admin.layouts.main')

@section('content')

<div class="container-fluid">

    {{-- Header halaman --}}
    <div class="page-header mb-4">
        <div class="row align-items-center">

            <div class="col">
                <h5 class="mb-0">Detail User</h5>
            </div>

            <div class="col-auto">
                <ul class="breadcrumb mb-0">

                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">
                            Home
                        </a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="{{ route('user.index') }}">
                            Kelola User
                        </a>
                    </li>

                    <li class="breadcrumb-item active">
                        Detail
                    </li>

                </ul>
            </div>

        </div>
    </div>


    {{-- Card Detail User --}}
    <div class="card border-0 shadow-sm">

        {{-- Header Card --}}
        <div class="card-header">

            <div>

                <h5 class="mb-1">
                    Detail User
                </h5>

                <p class="mb-0 text-muted">
                    Informasi akun pengguna sistem
                </p>

            </div>

        </div>


        {{-- Body --}}
        <div class="card-body">

            <div class="row">

                {{-- Icon User --}}
                <div class="col-md-4 text-center">

                    <div
                        class="bg-light rounded d-flex align-items-center justify-content-center mx-auto"
                        style="
                            width: 180px;
                            height: 180px;
                        "
                    >

                        <i class="ti ti-user"
                           style="font-size: 90px;">
                        </i>

                    </div>

                    <h5 class="mt-3 mb-1">
                        {{ $user->name }}
                    </h5>

                    <p class="text-muted mb-0">
                        {{ $user->role ?? 'User' }}
                    </p>

                </div>


                {{-- Data User --}}
                <div class="col-md-8">

                    <h5 class="mb-3">
                        Data User
                    </h5>

                    <div class="table-responsive">

                        <table class="table table-bordered align-middle mb-0">

                            <tbody>

                                {{-- Nama --}}
                                <tr>

                                    <th style="width: 30%;">
                                        Nama
                                    </th>

                                    <td>
                                        {{ $user->name ?? '-' }}
                                    </td>

                                </tr>


                                {{-- Email --}}
                                <tr>

                                    <th>
                                        Email
                                    </th>

                                    <td>
                                        {{ $user->email ?? '-' }}
                                    </td>

                                </tr>


                                {{-- Role --}}
                                <tr>

                                    <th>
                                        Role
                                    </th>

                                    <td>

                                        @if($user->role === 'Administrator')

                                            <span class="badge bg-danger">
                                                Administrator
                                            </span>

                                        @elseif($user->role === 'Operator')

                                            <span class="badge bg-primary">
                                                Operator
                                            </span>

                                        @else

                                            <span class="badge bg-secondary">
                                                {{ $user->role ?? 'User' }}
                                            </span>

                                        @endif

                                    </td>

                                </tr>


                                {{-- ID --}}
                                <tr>

                                    <th>
                                        ID User
                                    </th>

                                    <td>
                                        {{ $user->id }}
                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </div>


                    {{-- Tombol --}}
                    <div class="mt-4">

                        <a href="{{ route('user.edit', $user->id) }}"
                           class="btn btn-warning">

                            <i class="ti ti-edit me-1"></i>
                            Edit Data

                        </a>

                        <a href="{{ route('user.index') }}"
                           class="btn btn-secondary">

                            <i class="ti ti-arrow-left me-1"></i>
                            Kembali

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
