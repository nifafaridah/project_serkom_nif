<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PrestasiController extends Controller
{
    /**
     * Menampilkan semua data prestasi.
     */
    public function index()
    {
        $prestasi = Prestasi::latest()->get();

        return view('admin.prestasi.index', compact('prestasi'));
    }


    /**
     * Form tambah prestasi.
     */
    public function create()
    {
        return view('admin.prestasi.create');
    }


    /**
     * Menyimpan data prestasi.
     */
    public function store(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'tahun_ajaran' => 'required|string|max:20',
        ]);

        $namaFoto = null;

        if ($request->hasFile('foto')) {

            $folder = public_path('uploads/prestasi');

            if (!File::exists($folder)) {
                File::makeDirectory($folder, 0755, true);
            }

            $file = $request->file('foto');

            $namaFoto = time() . '_' . $file->getClientOriginalName();

            $file->move($folder, $namaFoto);
        }

        Prestasi::create([
            'deskripsi' => $request->deskripsi,
            'foto' => $namaFoto,
            'tahun_ajaran' => $request->tahun_ajaran,
        ]);

        return redirect()
            ->route('prestasi.index')
            ->with('success', 'Data prestasi berhasil ditambahkan.');
    }


    /**
     * Form edit prestasi.
     */
    public function edit($id)
    {
        $prestasi = Prestasi::findOrFail($id);

        return view('admin.prestasi.edit', compact('prestasi'));
    }


    /**
     * Update data prestasi.
     */
    public function update(Request $request, $id)
    {
        $prestasi = Prestasi::findOrFail($id);

        $request->validate([
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'tahun_ajaran' => 'required|string|max:20',
        ]);

        $namaFoto = $prestasi->foto;

        if ($request->hasFile('foto')) {

            $folder = public_path('uploads/prestasi');

            if (!File::exists($folder)) {
                File::makeDirectory($folder, 0755, true);
            }

            // Hapus foto lama
            if (
                $prestasi->foto &&
                File::exists($folder . '/' . $prestasi->foto)
            ) {
                File::delete($folder . '/' . $prestasi->foto);
            }

            $file = $request->file('foto');

            $namaFoto = time() . '_' . $file->getClientOriginalName();

            $file->move($folder, $namaFoto);
        }

        $prestasi->update([
            'deskripsi' => $request->deskripsi,
            'foto' => $namaFoto,
            'tahun_ajaran' => $request->tahun_ajaran,
        ]);

        return redirect()
            ->route('prestasi.index')
            ->with('success', 'Data prestasi berhasil diperbarui.');
    }


    /**
     * Hapus data prestasi.
     */
    public function destroy($id)
    {
        $prestasi = Prestasi::findOrFail($id);

        $folder = public_path('uploads/prestasi');

        if (
            $prestasi->foto &&
            File::exists($folder . '/' . $prestasi->foto)
        ) {
            File::delete($folder . '/' . $prestasi->foto);
        }

        $prestasi->delete();

        return redirect()
            ->route('prestasi.index')
            ->with('success', 'Data prestasi berhasil dihapus.');
    }
}