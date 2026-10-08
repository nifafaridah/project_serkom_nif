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
        // Hanya Administrator yang boleh menambah berita
        if (
            !auth()->check() ||
            strtolower(trim(auth()->user()->role)) !== 'administrator'
        ) {
            abort(403, 'Anda tidak memiliki izin untuk menambah berita.');
        }

        return view('admin.berita.create');
    }

    // Menyimpan berita baru
    public function store(Request $request)
    {
        // Hanya Administrator yang boleh menyimpan berita
        if (
            !auth()->check() ||
            strtolower(trim(auth()->user()->role)) !== 'administrator'
        ) {
            abort(403, 'Anda tidak memiliki izin untuk menambah berita.');
        }

        $request->validate([
            'judul'   => 'required|string|max:500',
            'isi'     => 'required|string',
            'tanggal' => 'required|date',
            'gambar'  => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
        ]);

        $berita = new Berita();

        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->tanggal = $request->tanggal;

        // Upload gambar
        if ($request->hasFile('gambar')) {

            $gambar = $request->file('gambar');

            $namaGambar = time() . '_' . $gambar->getClientOriginalName();

            $folder = public_path('uploads/berita');

            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
            }

            $gambar->move(
                $folder,
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

        return view(
            'admin.berita.show',
            compact('berita')
        );
    }

    // Menampilkan form edit
    public function edit($id)
    {
        // Hanya Administrator yang boleh mengedit berita
        if (
            !auth()->check() ||
            strtolower(trim(auth()->user()->role)) !== 'administrator'
        ) {
            abort(403, 'Anda tidak memiliki izin untuk mengedit berita.');
        }

        $berita = Berita::findOrFail($id);

        return view(
            'admin.berita.edit',
            compact('berita')
        );
    }

    // Memperbarui berita
    public function update(Request $request, $id)
    {
        // Hanya Administrator yang boleh memperbarui berita
        if (
            !auth()->check() ||
            strtolower(trim(auth()->user()->role)) !== 'administrator'
        ) {
            abort(403, 'Anda tidak memiliki izin untuk mengedit berita.');
        }

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
                file_exists(
                    public_path('uploads/berita/' . $berita->gambar)
                )
            ) {
                unlink(
                    public_path('uploads/berita/' . $berita->gambar)
                );
            }

            $gambar = $request->file('gambar');

            $namaGambar = time() . '_' . $gambar->getClientOriginalName();

            $folder = public_path('uploads/berita');

            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
            }

            $gambar->move(
                $folder,
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
        // Hanya Administrator yang boleh menghapus berita
        if (
            !auth()->check() ||
            strtolower(trim(auth()->user()->role)) !== 'administrator'
        ) {
            abort(403, 'Anda tidak memiliki izin untuk menghapus berita.');
        }

        $berita = Berita::findOrFail($id);

        // Hapus gambar dari folder
        if (
            $berita->gambar &&
            file_exists(
                public_path('uploads/berita/' . $berita->gambar)
            )
        ) {
            unlink(
                public_path('uploads/berita/' . $berita->gambar)
            );
        }

        // Hapus data berita
        $berita->delete();

        return redirect()
            ->route('berita.index')
            ->with('success', 'Berita berhasil dihapus.');
    }
}