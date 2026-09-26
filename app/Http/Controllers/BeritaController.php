<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    // Menampilkan semua berita
    public function index()
    {
        $berita = Berita::all();

        return view(
            'admin.berita.index',
            compact('berita')
        );
    }


    // Menampilkan form tambah berita
    public function create()
    {
        return view('admin.berita.create');
    }


    // Menyimpan berita
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);


        $berita = new Berita();

        $berita->judul = $request->judul;

        $berita->isi = $request->isi;


        // Upload gambar
        if ($request->hasFile('gambar')) {

            $folder = public_path('uploads/berita');


            if (!file_exists($folder)) {

                mkdir($folder, 0777, true);

            }


            $file = $request->file('gambar');

            $namaFile = time() . '_' . $file->getClientOriginalName();

            $file->move($folder, $namaFile);

            $berita->gambar = $namaFile;

        }


        $berita->save();


        return redirect()
            ->route('berita.index')
            ->with(
                'success',
                'Berita berhasil disimpan!'
            );
    }


    // Menampilkan form edit
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);

        return view(
            'admin.berita.edit',
            compact('berita')
        );
    }


    // Mengupdate berita
    public function update(
        Request $request,
        $id
    ) {

        $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);


        $berita = Berita::findOrFail($id);


        $berita->judul = $request->judul;

        $berita->isi = $request->isi;


        // Jika upload gambar baru
        if ($request->hasFile('gambar')) {

            $folder = public_path('uploads/berita');


            if (!file_exists($folder)) {

                mkdir($folder, 0777, true);

            }


            // Hapus gambar lama
            if ($berita->gambar) {

                $gambarLama =
                    $folder . '/' . $berita->gambar;


                if (file_exists($gambarLama)) {

                    unlink($gambarLama);

                }

            }


            $file = $request->file('gambar');

            $namaFile =
                time() . '_' .
                $file->getClientOriginalName();


            $file->move(
                $folder,
                $namaFile
            );


            $berita->gambar = $namaFile;

        }


        $berita->save();


        return redirect()
            ->route('berita.index')
            ->with(
                'success',
                'Berita berhasil diperbarui!'
            );
    }


    // Menghapus berita
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);


        // Hapus gambar
        if ($berita->gambar) {

            $gambar =
                public_path(
                    'uploads/berita/' .
                    $berita->gambar
                );


            if (file_exists($gambar)) {

                unlink($gambar);

            }

        }


        $berita->delete();


        return redirect()
            ->route('berita.index')
            ->with(
                'success',
                'Berita berhasil dihapus!'
            );
    }
}
