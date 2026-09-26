@extends('admin.layouts.main')

@section('content')

<div class="pc-container">

    <div class="pc-content">

        <!-- HEADER -->

        <div class="page-header">

            <div class="page-block">

                <div class="page-header-title">

                    <h5 class="mb-0">
                        Data Berita
                    </h5>

                </div>


                <ul class="breadcrumb">

                    <li class="breadcrumb-item">

                        <a href="{{ url('/') }}">
                            Home
                        </a>

                    </li>

                    <li class="breadcrumb-item">
                        Berita
                    </li>

                </ul>

            </div>

        </div>


        <!-- DATA BERITA -->

        <div class="row">

            <div class="col-sm-12">

                <div class="card">


                    <!-- CARD HEADER -->

                    <div class="card-header">

                        <div class="d-flex justify-content-between align-items-center">

                            <div>

                                <h5 class="mb-1">
                                    Daftar Berita
                                </h5>

                                <p class="text-muted mb-0">
                                    Kelola berita sekolah
                                </p>

                            </div>


                            <a
                                href="{{ route('berita.create') }}"
                                class="btn btn-primary"
                            >

                                <i class="ti ti-plus"></i>

                                Tambah Berita

                            </a>

                        </div>

                    </div>


                    <!-- CARD BODY -->

                    <div class="card-body">


                        @if(session('success'))

                            <div class="alert alert-success">

                                {{ session('success') }}

                            </div>

                        @endif


                        @if($errors->any())

                            <div class="alert alert-danger">

                                <ul class="mb-0">

                                    @foreach($errors->all() as $error)

                                        <li>
                                            {{ $error }}
                                        </li>

                                    @endforeach

                                </ul>

                            </div>

                        @endif


                        <div class="table-responsive">

                            <table class="table table-hover">


                                <thead>

                                    <tr>

                                        <th>
                                            No
                                        </th>

                                        <th>
                                            Gambar
                                        </th>

                                        <th>
                                            Judul Berita
                                        </th>

                                        <th>
                                            Isi Berita
                                        </th>

                                        <th>
                                            Aksi
                                        </th>

                                    </tr>

                                </thead>


                                <tbody>

                                    @forelse($berita as $item)

                                        <tr>

                                            <td>
                                                {{ $loop->iteration }}
                                            </td>


                                            <td>

                                                @if($item->gambar)

                                                    <img
                                                        src="{{ asset('uploads/berita/' . $item->gambar) }}"
                                                        width="70"
                                                        height="60"
                                                        style="object-fit:cover; border-radius:6px;"
                                                        alt="Gambar Berita"
                                                    >

                                                @else

                                                    <span class="text-muted">
                                                        Tidak ada gambar
                                                    </span>

                                                @endif

                                            </td>


                                            <td>

                                                {{ $item->judul }}

                                            </td>


                                            <td>

                                                {{ \Illuminate\Support\Str::limit($item->isi, 100) }}

                                            </td>


                                            <td>


                                                <a
                                                    href="{{ route('berita.edit', ['id' => $item->id]) }}"
                                                    class="btn btn-warning btn-sm"
                                                >

                                                    Edit

                                                </a>


                                                <form
                                                    action="{{ route('berita.destroy', ['id' => $item->id]) }}"
                                                    method="POST"
                                                    style="display:inline;"
                                                >

                                                    @csrf

                                                    @method('DELETE')


                                                    <button
                                                        type="submit"
                                                        class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Yakin ingin menghapus berita ini?')"
                                                    >

                                                        Hapus

                                                    </button>

                                                </form>


                                            </td>

                                        </tr>


                                    @empty

                                        <tr>

                                            <td
                                                colspan="5"
                                                class="text-center"
                                            >

                                                Belum ada data berita

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
