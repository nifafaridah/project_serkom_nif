<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    // Menampilkan semua data siswa
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

   public function store(Request $request)
{
    $request->validate([
        'nisn' => 'required|max:10',
        'nama_siswa' => 'required|max:40',
        'jenis_kelamin' => 'required',
        'tahun_masuk' => 'required',
    ]);

    Siswa::create([
        'nisn' => $request->nisn,
        'nama_siswa' => $request->nama_siswa,
        'jenis_kelamin' => $request->jenis_kelamin,
        'tahun_masuk' => $request->tahun_masuk,
    ]);

    return redirect()
        ->route('siswa.index')
        ->with('success', 'Data siswa berhasil ditambahkan!');
}

    // Menampilkan form edit siswa
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);

        return view('admin.siswa.edit', compact('siswa'));
    }

    // Memperbarui data siswa
    public function update(Request $request, $id)
    {
        $request->validate([
            'nisn' => 'required|max:10',
            'nama_siswa' => 'required|max:40',
            'jenis_kelamin' => 'required',
            'tahun_masuk' => 'required',
        ]);

        $siswa = Siswa::findOrFail($id);

        $siswa->update([
            'nisn' => $request->nisn,
            'nama_siswa' => $request->nama_siswa,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tahun_masuk' => $request->tahun_masuk,
        ]);

        return redirect()
            ->route('siswa.index')
            ->with('success', 'Data siswa berhasil diperbarui!');
    }

    // Menghapus data siswa
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);

        $siswa->delete();

        return redirect()
            ->route('siswa.index')
            ->with('success', 'Data siswa berhasil dihapus!');
    }
}