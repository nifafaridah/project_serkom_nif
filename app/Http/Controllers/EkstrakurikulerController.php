<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;

class EkstrakurikulerController extends Controller
{
    // Menampilkan semua data
    public function index()
    {
        $ekstrakurikuler = Ekstrakurikuler::all();

        return view(
            'admin.ekstrakurikuler.index',
            compact('ekstrakurikuler')
        );
    }

    // Menampilkan form tambah
    public function create()
    {
        return view('admin.ekstrakurikuler.create');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_ekskul' => 'required|max:100',
            'pembina' => 'required|max:100',
            'jadwal_latihan' => 'required|max:100',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $ekskul = new Ekstrakurikuler();

        $ekskul->nama_ekskul = $request->nama_ekskul;
        $ekskul->pembina = $request->pembina;
        $ekskul->jadwal_latihan = $request->jadwal_latihan;
        $ekskul->deskripsi = $request->deskripsi;

        // Upload gambar
        if ($request->hasFile('gambar')) {

            $folder = public_path('uploads/ekstrakurikuler');

            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
            }

            $file = $request->file('gambar');

            $namaFile = time() . '_' . $file->getClientOriginalName();

            $file->move($folder, $namaFile);

            $ekskul->gambar = $namaFile;
        }

        $ekskul->save();

        return redirect()
            ->route('ekstrakurikuler.index')
            ->with('success', 'Data ekstrakurikuler berhasil disimpan!');
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $ekskul = Ekstrakurikuler::findOrFail($id);

        return view(
            'admin.ekstrakurikuler.edit',
            compact('ekskul')
        );
    }

    // Mengupdate data
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_ekskul' => 'required|max:100',
            'pembina' => 'required|max:100',
            'jadwal_latihan' => 'required|max:100',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $ekskul = Ekstrakurikuler::findOrFail($id);

        $ekskul->nama_ekskul = $request->nama_ekskul;
        $ekskul->pembina = $request->pembina;
        $ekskul->jadwal_latihan = $request->jadwal_latihan;
        $ekskul->deskripsi = $request->deskripsi;

        // Jika mengganti gambar
        if ($request->hasFile('gambar')) {

            $folder = public_path('uploads/ekstrakurikuler');

            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
            }

            // Hapus gambar lama
            if ($ekskul->gambar) {

                $gambarLama = $folder . '/' . $ekskul->gambar;

                if (file_exists($gambarLama)) {
                    unlink($gambarLama);
                }
            }

            // Upload gambar baru
            $file = $request->file('gambar');

            $namaFile = time() . '_' . $file->getClientOriginalName();

            $file->move($folder, $namaFile);

            $ekskul->gambar = $namaFile;
        }

        $ekskul->save();

        return redirect()
            ->route('ekstrakurikuler.index')
            ->with('success', 'Data ekstrakurikuler berhasil diperbarui!');
    }

    // Menghapus data
    public function destroy($id)
    {
        $ekskul = Ekstrakurikuler::findOrFail($id);

        // Hapus gambar
        if ($ekskul->gambar) {

            $gambar = public_path(
                'uploads/ekstrakurikuler/' . $ekskul->gambar
            );

            if (file_exists($gambar)) {
                unlink($gambar);
            }
        }

        $ekskul->delete();

        return redirect()
            ->route('ekstrakurikuler.index')
            ->with('success', 'Data ekstrakurikuler berhasil dihapus!');
    }
}
