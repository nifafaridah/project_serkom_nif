<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumuman = Pengumuman::orderBy('tanggal', 'desc')->get();

        return view('admin.pengumuman.index', compact('pengumuman'));
    }

    public function create()
    {
        return view('admin.pengumuman.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $pengumuman = new Pengumuman();

        $pengumuman->judul = $request->judul;
        $pengumuman->isi = $request->isi;
        $pengumuman->tanggal = $request->tanggal;

        if ($request->hasFile('gambar')) {

            $folder = public_path('uploads/pengumuman');

            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
            }

            $file = $request->file('gambar');

            $namaFile = time() . '_' . $file->getClientOriginalName();

            $file->move($folder, $namaFile);

            $pengumuman->gambar = $namaFile;
        }

        $pengumuman->save();

        return redirect()
            ->route('pengumuman.index')
            ->with('success', 'Pengumuman berhasil disimpan!');
    }

    public function edit($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        return view('admin.pengumuman.edit', compact('pengumuman'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $pengumuman = Pengumuman::findOrFail($id);

        $pengumuman->judul = $request->judul;
        $pengumuman->isi = $request->isi;
        $pengumuman->tanggal = $request->tanggal;

        if ($request->hasFile('gambar')) {

            $folder = public_path('uploads/pengumuman');

            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
            }

            if ($pengumuman->gambar) {
                $gambarLama = $folder . '/' . $pengumuman->gambar;

                if (file_exists($gambarLama)) {
                    unlink($gambarLama);
                }
            }

            $file = $request->file('gambar');

            $namaFile = time() . '_' . $file->getClientOriginalName();

            $file->move($folder, $namaFile);

            $pengumuman->gambar = $namaFile;
        }

        $pengumuman->save();

        return redirect()
            ->route('pengumuman.index')
            ->with('success', 'Pengumuman berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        if ($pengumuman->gambar) {

            $gambar = public_path(
                'uploads/pengumuman/' . $pengumuman->gambar
            );

            if (file_exists($gambar)) {
                unlink($gambar);
            }
        }

        $pengumuman->delete();

        return redirect()
            ->route('pengumuman.index')
            ->with('success', 'Pengumuman berhasil dihapus!');
    }
}
