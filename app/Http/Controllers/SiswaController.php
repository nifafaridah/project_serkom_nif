<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    // Menampilkan data siswa
    public function index()
    {
        $siswa = Siswa::all();

        return view('admin.siswa.index', compact('siswa'));
    }


    // Menampilkan form tambah siswa
    public function create()
    {
        return view('admin.siswa.create');
    }


    // Menyimpan data siswa
    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'required',
            'nama_siswa' => 'required|max:40',
            'jenis_kelamin' => 'required',
            'tahun_masuk' => 'required',
        ]);

        // Membuat data siswa baru
        $siswa = new Siswa();

        $siswa->nisn = $request->nisn;
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->tahun_masuk = $request->tahun_masuk;

        // Simpan ke database
        $siswa->save();

        return redirect()
            ->route('siswa.index')
            ->with('success', 'Data siswa berhasil ditambahkan!');
    }


    // Form edit siswa
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);

        return view('admin.siswa.edit', compact('siswa'));
    }


    // Update data siswa
    public function update(Request $request, $id)
    {
        $request->validate([
            'nisn' => 'required',
            'nama_siswa' => 'required|max:40',
            'jenis_kelamin' => 'required',
            'tahun_masuk' => 'required',
        ]);

        $siswa = Siswa::findOrFail($id);

        $siswa->nisn = $request->nisn;
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->tahun_masuk = $request->tahun_masuk;

        $siswa->save();

        return redirect()
            ->route('siswa.index')
            ->with('success', 'Data siswa berhasil diperbarui!');
    }


    // Hapus data siswa
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);

        $siswa->delete();

        return redirect()
            ->route('siswa.index')
            ->with('success', 'Data siswa berhasil dihapus!');
    }
}
