@extends('admin.layouts.main')

@section('content')

<div class="page-header mb-4">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">

                <div class="page-header-title">
                    <h5 class="m-b-10">Data Prestasi</h5>
                </div>

                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>

                    <li class="breadcrumb-item">
                        Prestasi
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>


<div class="card border-0 shadow-sm">

    <div class="card-header d-flex justify-content-between align-items-center">

        <div>
            <h5 class="mb-1">Daftar Prestasi</h5>

            <small class="text-muted">
                Kelola data prestasi sekolah
            </small>
        </div>

        <a href="{{ route('prestasi.create') }}"
           class="btn btn-primary">

            <i class="ti ti-plus me-1"></i>

            Tambah Prestasi

        </a>

    </div>


    <div class="card-body">

        @if(session('success'))

            <div class="alert alert-success">
                {{ session('success') }}
            </div>

        @endif


        <div class="table-responsive">

            <table class="table table-hover align-middle">

                <thead>

                    <tr>
                        <th width="60">No</th>
                        <th width="150">Foto</th>
                        <th>Deskripsi</th>
                        <th width="150">Tahun Ajaran</th>
                        <th width="180">Aksi</th>
                    </tr>

                </thead>


                <tbody>

                    @forelse($prestasi as $item)

                        <tr>

                            <td>
                                {{ $loop->iteration }}
                            </td>


                            <td>

                                @if($item->foto)

                                    <img
                                        src="{{ asset('uploads/prestasi/' . $item->foto) }}"
                                        alt="Foto Prestasi"
                                        width="120"
                                        height="80"
                                        style="object-fit: cover; border-radius: 8px;"
                                    >

                                @else

                                    <div
                                        class="bg-light d-flex align-items-center justify-content-center"
                                        style="width:120px;height:80px;border-radius:8px;"
                                    >
                                        <i class="ti ti-trophy fs-2 text-muted"></i>
                                    </div>

                                @endif

                            </td>


                            <td>

                                <div style="max-width: 500px;">

                                    {{ $item->deskripsi }}

                                </div>

                            </td>


                            <td>

                                <span class="badge bg-primary">

                                    {{ $item->tahun_ajaran }}

                                </span>

                            </td>


                            <td>

                                <a
                                    href="{{ route('prestasi.edit', $item->id_prestasi) }}"
                                    class="btn btn-warning btn-sm"
                                >
                                    <i class="ti ti-edit"></i>
                                    Edit
                                </a>


                                <form
                                    action="{{ route('prestasi.destroy', $item->id_prestasi) }}"
                                    method="POST"
                                    class="d-inline"
                                    onsubmit="return confirm('Yakin ingin menghapus data prestasi ini?')"
                                >

                                    @csrf

                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-danger btn-sm"
                                    >
                                        <i class="ti ti-trash"></i>
                                        Hapus
                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="5"
                                class="text-center text-muted py-4">

                                <i class="ti ti-trophy fs-1 d-block mb-2"></i>

                                Belum ada data prestasi.

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection