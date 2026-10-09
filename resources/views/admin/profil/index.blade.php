
@extends('admin.layouts.main')

@section('content')

{{-- HEADER --}}
<div class="page-header mb-4">
    <div class="page-block">
        <div class="page-header-title">
            <h5 class="m-b-10">Profil Pengguna</h5>
        </div>

        <ul class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item active">
                Profil Pengguna
            </li>
        </ul>
    </div>
</div>

{{-- PESAN SUKSES --}}
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="ti ti-circle-check me-1"></i>
        {{ session('success') }}

        <button type="button"
                class="btn-close"
                data-bs-dismiss="alert"
                aria-label="Close">
        </button>
    </div>
@endif

{{-- PESAN ERROR --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- KARTU PROFIL --}}
<div class="row">
    <div class="col-lg-8 col-md-12">

        <div class="card border-0 shadow-sm">

            {{-- HEADER KARTU --}}
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Informasi Akun</h5>

                <a href="{{ route('profile.edit') }}"
                   class="btn btn-primary btn-sm">
                    <i class="ti ti-edit me-1"></i>
                    Edit Profil
                </a>
            </div>

            {{-- ISI KARTU --}}
            <div class="card-body">

                {{-- FOTO / IKON PROFIL --}}
                <div class="text-center mb-4">
                    <div class="rounded-circle bg-primary text-white d-inline-flex
                                align-items-center justify-content-center"
                         style="width: 90px; height: 90px; font-size: 36px;">
                        <i class="ti ti-user"></i>
                    </div>

                    <h5 class="mt-3 mb-1">
                        {{ auth()->user()->name }}
                    </h5>

                    <span class="badge bg-primary">
                        {{ auth()->user()->role }}
                    </span>
                </div>

                <hr>

                {{-- NAMA --}}
                <div class="row mb-3">
                    <div class="col-md-4 text-muted">
                        Nama Pengguna
                    </div>

                    <div class="col-md-8 fw-semibold">
                        {{ auth()->user()->name }}
                    </div>
                </div>

                {{-- EMAIL --}}
                <div class="row mb-3">
                    <div class="col-md-4 text-muted">
                        Email
                    </div>

                    <div class="col-md-8">
                        {{ auth()->user()->email }}
                    </div>
                </div>

                {{-- ROLE --}}
                <div class="row mb-3">
                    <div class="col-md-4 text-muted">
                        Hak Akses
                    </div>

                    <div class="col-md-8">
                        @if (strtolower(trim(auth()->user()->role)) === 'administrator')
                            <span class="badge bg-success">
                                Administrator
                            </span>
                        @elseif (strtolower(trim(auth()->user()->role)) === 'operator')
                            <span class="badge bg-info text-dark">
                                Operator
                            </span>
                        @else
                            <span class="badge bg-secondary">
                                {{ auth()->user()->role }}
                            </span>
                        @endif
                    </div>
                </div>

                <hr>

                {{-- KETERANGAN --}}
                <div class="alert alert-info mb-0">
                    <i class="ti ti-info-circle me-1"></i>
                    Kamu dapat mengubah nama, email, dan password melalui
                    tombol Edit Profil. Hak akses akun tidak dapat diubah
                    melalui halaman ini.
                </div>

            </div>
        </div>

    </div>
</div>

@endsection
