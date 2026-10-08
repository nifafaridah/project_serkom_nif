<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    /**
     * Menampilkan semua data prestasi
     */
    public function index()
    {
        $prestasi = Prestasi::all();

        return view('admin.prestasi.index', compact('prestasi'));
    }

    /**
     * Menampilkan form tambah prestasi
     */
    public function create()
    {
        // Hanya Administrator yang boleh menambah prestasi
        if (
            !auth()->check() ||
            strtolower(trim(auth()->user()->role)) !== 'administrator'
        ) {
            abort(403, 'Anda tidak memiliki izin untuk menambah data prestasi.');
        }

        return view('admin.prestasi.create');
    }

    /**
     * Menyimpan data prestasi baru
     */
    public function store(Request $request)
    {
        // Hanya Administrator yang boleh menyimpan prestasi
        if (
            !auth()->check() ||
            strtolower(trim(auth()->user()->role)) !== 'administrator'
        ) {
            abort(403, 'Anda tidak memiliki izin untuk menambah data prestasi.');
        }

        $request->validate([
            'foto'         => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'deskripsi'    => 'required',
            'tahun_ajaran' => 'required',
        ]);

        $namaFoto = null;

        if ($request->hasFile('foto')) {

            $file = $request->file('foto');

            $namaFoto = time() . '_' . $file->getClientOriginalName();

            $folder = public_path('uploads/prestasi');

            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
            }

            $file->move($folder, $namaFoto);
        }

        Prestasi::create([
            'foto'         => $namaFoto,
            'deskripsi'    => $request->deskripsi,
            'tahun_ajaran' => $request->tahun_ajaran,
        ]);

        return redirect()
            ->route('prestasi.index')
            ->with('success', 'Data prestasi berhasil ditambahkan!');
    }

    /**
     * Menampilkan detail prestasi
     * HANYA MENAMPILKAN DATA, TIDAK MENGUBAH DATABASE
     */
    public function show($id)
    {
        $prestasi = Prestasi::findOrFail($id);

        return view(
            'admin.prestasi.show',
            compact('prestasi')
        );
    }

    /**
     * Menampilkan form edit prestasi
     */
    public function edit($id)
    {
        // Hanya Administrator yang boleh mengedit prestasi
        if (
            !auth()->check() ||
            strtolower(trim(auth()->user()->role)) !== 'administrator'
        ) {
            abort(403, 'Anda tidak memiliki izin untuk mengedit data prestasi.');
        }

        $prestasi = Prestasi::findOrFail($id);

        return view(
            'admin.prestasi.edit',
            compact('prestasi')
        );
    }

    /**
     * Memperbarui data prestasi
     */
    public function update(Request $request, $id)
    {
        // Hanya Administrator yang boleh memperbarui prestasi
        if (
            !auth()->check() ||
            strtolower(trim(auth()->user()->role)) !== 'administrator'
        ) {
            abort(403, 'Anda tidak memiliki izin untuk mengedit data prestasi.');
        }

        $prestasi = Prestasi::findOrFail($id);

        $request->validate([
            'foto'         => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'deskripsi'    => 'required',
            'tahun_ajaran' => 'required',
        ]);

        $namaFoto = $prestasi->foto;

        if ($request->hasFile('foto')) {

            $folder = public_path('uploads/prestasi');

            // Hapus foto lama jika mengganti foto
            if ($prestasi->foto) {

                $fotoLama = $folder . '/' . $prestasi->foto;

                if (file_exists($fotoLama)) {
                    unlink($fotoLama);
                }
            }

            // Upload foto baru
            $file = $request->file('foto');

            $namaFoto = time() . '_' . $file->getClientOriginalName();

            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
            }

            $file->move($folder, $namaFoto);
        }

        $prestasi->update([
            'foto'         => $namaFoto,
            'deskripsi'    => $request->deskripsi,
            'tahun_ajaran' => $request->tahun_ajaran,
        ]);

        return redirect()
            ->route('prestasi.index')
            ->with('success', 'Data prestasi berhasil diperbarui!');
    }

    /**
     * Menghapus data prestasi
     */
    public function destroy($id)
    {
        // Hanya Administrator yang boleh menghapus prestasi
        if (
            !auth()->check() ||
            strtolower(trim(auth()->user()->role)) !== 'administrator'
        ) {
            abort(403, 'Anda tidak memiliki izin untuk menghapus data prestasi.');
        }

        $prestasi = Prestasi::findOrFail($id);

        // Hapus foto dari folder jika ada
        if ($prestasi->foto) {

            $foto = public_path(
                'uploads/prestasi/' . $prestasi->foto
            );

            if (file_exists($foto)) {
                unlink($foto);
            }
        }

        // Hapus data yang dipilih saja
        $prestasi->delete();

        return redirect()
            ->route('prestasi.index')
            ->with('success', 'Data prestasi berhasil dihapus!');
    }
}