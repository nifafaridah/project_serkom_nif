@extends('admin.layouts.main')

@section('content')

<div class="container-fluid">

    <div class="row">

        <div class="col-md-8">

            <div class="card">

                <div class="card-header">
                    <h5>Profil Pengguna</h5>
                </div>

                <div class="card-body">

                    <h4>{{ auth()->user()->name }}</h4>

                    <p>
                        Email:
                        {{ auth()->user()->email }}
                    </p>

                    <p>
                        Role:
                        {{ ucfirst(auth()->user()->role) }}
                    </p>

                    <a href="{{ route('dashboard') }}" class="btn btn-secondary">
                        Kembali
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection