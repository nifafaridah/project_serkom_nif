<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    // ============================
    // MENAMPILKAN DATA SISWA
    // ============================

    public function index()
    {
        $siswa = DB::table('siswa')->get();

        return view('admin.siswa.index', compact('siswa'));
    }


    // ============================
    // MENAMPILKAN DETAIL SISWA
    // ============================

    public function show($id)
    {
        $siswa = DB::table('siswa')
            ->where('id_siswa', $id)
            ->first();

        if (!$siswa) {
            return redirect()
                ->route('siswa.index')
                ->with('error', 'Data siswa tidak ditemukan!');
        }

        return view('admin.siswa.show', compact('siswa'));
    }


    // ============================
    // MENAMPILKAN FORM TAMBAH SISWA
    // ============================

    public function create()
    {
        // Hanya Administrator yang boleh menambah siswa
        if (!auth()->check() || strtolower(trim(auth()->user()->role)) !== 'administrator') {
            abort(403, 'Anda tidak memiliki izin untuk menambah data siswa.');
        }

        return view('admin.siswa.create');
    }


    // ============================
    // MENYIMPAN DATA SISWA
    // ============================

    public function store(Request $request)
    {
        // Hanya Administrator yang boleh menyimpan siswa
        if (!auth()->check() || strtolower(trim(auth()->user()->role)) !== 'administrator') {
            abort(403, 'Anda tidak memiliki izin untuk menambah data siswa.');
        }

        $request->validate([
            'nisn'          => 'required',
            'nama_siswa'    => 'required',
            'jenis_kelamin' => 'required',
            'tahun_masuk'   => 'required',
        ]);


        // ============================
        // MEMBUAT ID SISWA
        // ============================

        $jumlahSiswa = DB::table('siswa')->count();

        $idSiswa = $jumlahSiswa + 1;


        // ============================
        // SIMPAN DATA
        // ============================

        DB::table('siswa')->insert([

            'id_siswa'      => $idSiswa,
            'nisn'          => $request->nisn,
            'nama_siswa'    => $request->nama_siswa,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tahun_masuk'   => $request->tahun_masuk,

        ]);


        return redirect()
            ->route('siswa.index')
            ->with('success', 'Data siswa berhasil disimpan!');
    }


    // ============================
    // FORM EDIT SISWA
    // ============================

    public function edit($id)
    {
        // Hanya Administrator yang boleh edit
        if (!auth()->check() || strtolower(trim(auth()->user()->role)) !== 'administrator') {
            abort(403, 'Anda tidak memiliki izin untuk mengedit data siswa.');
        }

        $siswa = DB::table('siswa')
            ->where('id_siswa', $id)
            ->first();

        if (!$siswa) {
            return redirect()
                ->route('siswa.index')
                ->with('error', 'Data siswa tidak ditemukan!');
        }

        return view('admin.siswa.edit', compact('siswa'));
    }


    // ============================
    // UPDATE SISWA
    // ============================

    public function update(Request $request, $id)
    {
        // Hanya Administrator yang boleh update
        if (!auth()->check() || strtolower(trim(auth()->user()->role)) !== 'administrator') {
            abort(403, 'Anda tidak memiliki izin untuk mengubah data siswa.');
        }

        $request->validate([
            'nisn'          => 'required',
            'nama_siswa'    => 'required',
            'jenis_kelamin' => 'required',
            'tahun_masuk'   => 'required',
        ]);


        // Cari data siswa
        $siswa = DB::table('siswa')
            ->where('id_siswa', $id)
            ->first();

        if (!$siswa) {
            return redirect()
                ->route('siswa.index')
                ->with('error', 'Data siswa tidak ditemukan!');
        }


        // ============================
        // UPDATE DATA
        // ============================

        DB::table('siswa')
            ->where('id_siswa', $id)
            ->update([

                'nisn'          => $request->nisn,
                'nama_siswa'    => $request->nama_siswa,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tahun_masuk'   => $request->tahun_masuk,

            ]);


        return redirect()
            ->route('siswa.index')
            ->with('success', 'Data siswa berhasil diperbarui!');
    }


    // ============================
    // HAPUS SISWA
    // ============================

    public function destroy($id)
    {
        // Hanya Administrator yang boleh menghapus
        if (!auth()->check() || strtolower(trim(auth()->user()->role)) !== 'administrator') {
            abort(403, 'Anda tidak memiliki izin untuk menghapus data siswa.');
        }

        // Cari data siswa
        $siswa = DB::table('siswa')
            ->where('id_siswa', $id)
            ->first();


        if ($siswa) {

            // Hapus data siswa
            DB::table('siswa')
                ->where('id_siswa', $id)
                ->delete();
        }


        return redirect()
            ->route('siswa.index')
            ->with('success', 'Data siswa berhasil dihapus!');
    }
}