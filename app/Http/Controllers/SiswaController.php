<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    //
    // 1. Tampil Data Siswa
    public function index()
    {
        $siswa = DB::table('siswa')->get();
        return view('admin.siswa.index', compact('siswa'));
    }

    // 2. Form Tambah Siswa
    public function create()
    {
        return view('admin.siswa.create');
    }

    // 3. Simpan Data Siswa
    public function store(Request $request)
    {
        $request->validate([
            'nis'           => 'required',
            'nama_siswa'    => 'required',
            'kelas'         => 'required',
            'jenis_kelamin' => 'required',
            'alamat'        => 'nullable',
            'foto'          => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $namaFoto = null;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $namaFoto = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/siswa'), $namaFoto);
        }

        DB::table('siswa')->insert([
            'nis'           => $request->nis,
            'nama_siswa'    => $request->nama_siswa,
            'kelas'         => $request->kelas,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat'        => $request->alamat,
            'foto'          => $namaFoto,
        ]);

        return redirect()->route('siswa.index')->with('success', 'Data Siswa berhasil ditambahkan!');
    }
}
