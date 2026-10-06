<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::all();

        return view('admin.galeri.index', compact('galeri'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'deskripsi' => 'nullable',
        ]);

        $galeri = new Galeri();

        $galeri->judul = $request->judul;
        $galeri->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')) {

            $folder = public_path('uploads/galeri');

            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
            }

            $file = $request->file('gambar');

            $namaFile = time() . '_' . $file->getClientOriginalName();

            $file->move($folder, $namaFile);

            $galeri->gambar = $namaFile;
        }

        $galeri->save();

        return redirect()
            ->route('galeri.index')
            ->with('success', 'Galeri berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);

        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'deskripsi' => 'nullable',
        ]);

        $galeri = Galeri::findOrFail($id);

        $galeri->judul = $request->judul;
        $galeri->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')) {

            $folder = public_path('uploads/galeri');

            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
            }

            if ($galeri->gambar) {

                $gambarLama = $folder . '/' . $galeri->gambar;

                if (file_exists($gambarLama)) {
                    unlink($gambarLama);
                }
            }

            $file = $request->file('gambar');

            $namaFile = time() . '_' . $file->getClientOriginalName();

            $file->move($folder, $namaFile);

            $galeri->gambar = $namaFile;
        }

        $galeri->save();

        return redirect()
            ->route('galeri.index')
            ->with('success', 'Galeri berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);

        if ($galeri->gambar) {

            $gambar = public_path(
                'uploads/galeri/' . $galeri->gambar
            );

            if (file_exists($gambar)) {
                unlink($gambar);
            }
        }

        $galeri->delete();

        return redirect()
            ->route('galeri.index')
            ->with('success', 'Galeri berhasil dihapus!');
    }
}
