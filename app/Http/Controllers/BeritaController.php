<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    // Menampilkan daftar berita
    public function index()
    {
        $berita = Berita::latest('id')->get();

        return view('admin.berita.index', compact('berita'));
    }

    // Menampilkan form tambah berita
    public function create()
    {
        return view('admin.berita.create');
    }

    // Menyimpan berita baru
    public function store(Request $request)
    {
        $request->validate([
            'judul'   => 'required|string|max:255',
            'isi'     => 'required|string',
            'tanggal' => 'required|date',
            'gambar'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $berita = new Berita();

        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->tanggal = $request->tanggal;

        // Simpan user yang sedang login
        if (auth()->check()) {
            $berita->user_id = auth()->id();
        }

        // Upload gambar
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');

            $namaGambar = time() . '_' . $gambar->getClientOriginalName();

            $gambar->move(
                public_path('uploads/berita'),
                $namaGambar
            );

            $berita->gambar = $namaGambar;
        }

        $berita->save();

        return redirect()
            ->route('berita.index')
            ->with('success', 'Berita berhasil ditambahkan.');
    }

    // Menampilkan detail berita
    public function show($id)
    {
        $berita = Berita::findOrFail($id);

        return view('admin.berita.show', compact('berita'));
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);

        return view('admin.berita.edit', compact('berita'));
    }

    // Memperbarui berita
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul'   => 'required|string|max:255',
            'isi'     => 'required|string',
            'tanggal' => 'required|date',
            'gambar'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $berita = Berita::findOrFail($id);

        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->tanggal = $request->tanggal;

        // Upload gambar baru jika ada
        if ($request->hasFile('gambar')) {

            // Hapus gambar lama
            if (
                $berita->gambar &&
                file_exists(public_path('uploads/berita/' . $berita->gambar))
            ) {
                unlink(
                    public_path('uploads/berita/' . $berita->gambar)
                );
            }

            $gambar = $request->file('gambar');

            $namaGambar = time() . '_' . $gambar->getClientOriginalName();

            $gambar->move(
                public_path('uploads/berita'),
                $namaGambar
            );

            $berita->gambar = $namaGambar;
        }

        $berita->save();

        return redirect()
            ->route('berita.index')
            ->with('success', 'Berita berhasil diperbarui.');
    }

    // Menghapus berita
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        // Hapus gambar dari folder
        if (
            $berita->gambar &&
            file_exists(public_path('uploads/berita/' . $berita->gambar))
        ) {
            unlink(
                public_path('uploads/berita/' . $berita->gambar)
            );
        }

        $berita->delete();

        return redirect()
            ->route('berita.index')
            ->with('success', 'Berita berhasil dihapus.');
    }
}
