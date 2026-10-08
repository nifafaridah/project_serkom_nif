<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;

class EkstrakurikulerController extends Controller
{
    // ========================================
    // MENAMPILKAN SEMUA DATA EKSTRAKURIKULER
    // ========================================

    public function index()
    {
        $ekstrakurikuler = Ekstrakurikuler::all();

        return view(
            'admin.ekstrakurikuler.index',
            compact('ekstrakurikuler')
        );
    }


    // ========================================
    // MENAMPILKAN DETAIL EKSTRAKURIKULER
    // ========================================

    public function show($id)
    {
        $ekskul = Ekstrakurikuler::findOrFail($id);

        return view(
            'admin.ekstrakurikuler.show',
            compact('ekskul')
        );
    }


    // ========================================
    // MENAMPILKAN FORM TAMBAH
    // ========================================

    public function create()
    {
        // Hanya Administrator yang boleh menambah
        if (
            !auth()->check() ||
            strtolower(trim(auth()->user()->role)) !== 'administrator'
        ) {
            abort(403, 'Anda tidak memiliki izin untuk menambah data ekstrakurikuler.');
        }

        return view('admin.ekstrakurikuler.create');
    }


    // ========================================
    // MENYIMPAN DATA BARU
    // ========================================

    public function store(Request $request)
    {
        // Hanya Administrator yang boleh menyimpan
        if (
            !auth()->check() ||
            strtolower(trim(auth()->user()->role)) !== 'administrator'
        ) {
            abort(403, 'Anda tidak memiliki izin untuk menambah data ekstrakurikuler.');
        }

        $request->validate([
            'nama_ekskul'     => 'required|max:100',
            'pembina'         => 'required|max:100',
            'jadwal_latihan'  => 'required|max:100',
            'deskripsi'       => 'required',
            'gambar'          => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);


        $ekskul = new Ekstrakurikuler();

        $ekskul->nama_ekskul = $request->nama_ekskul;
        $ekskul->pembina = $request->pembina;
        $ekskul->jadwal_latihan = $request->jadwal_latihan;
        $ekskul->deskripsi = $request->deskripsi;


        // ========================================
        // UPLOAD GAMBAR
        // ========================================

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


        // ========================================
        // SIMPAN
        // ========================================

        $ekskul->save();


        return redirect()
            ->route('ekstrakurikuler.index')
            ->with(
                'success',
                'Data ekstrakurikuler berhasil disimpan!'
            );
    }


    // ========================================
    // MENAMPILKAN FORM EDIT
    // ========================================

    public function edit($id)
    {
        // Hanya Administrator yang boleh mengedit
        if (
            !auth()->check() ||
            strtolower(trim(auth()->user()->role)) !== 'administrator'
        ) {
            abort(403, 'Anda tidak memiliki izin untuk mengedit data ekstrakurikuler.');
        }

        $ekskul = Ekstrakurikuler::findOrFail($id);

        return view(
            'admin.ekstrakurikuler.edit',
            compact('ekskul')
        );
    }


    // ========================================
    // MENGUPDATE DATA
    // ========================================

    public function update(Request $request, $id)
    {
        // Hanya Administrator yang boleh memperbarui
        if (
            !auth()->check() ||
            strtolower(trim(auth()->user()->role)) !== 'administrator'
        ) {
            abort(403, 'Anda tidak memiliki izin untuk mengedit data ekstrakurikuler.');
        }

        $request->validate([
            'nama_ekskul'     => 'required|max:100',
            'pembina'         => 'required|max:100',
            'jadwal_latihan'  => 'required|max:100',
            'deskripsi'       => 'required',
            'gambar'          => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);


        $ekskul = Ekstrakurikuler::findOrFail($id);


        $ekskul->nama_ekskul = $request->nama_ekskul;
        $ekskul->pembina = $request->pembina;
        $ekskul->jadwal_latihan = $request->jadwal_latihan;
        $ekskul->deskripsi = $request->deskripsi;


        // ========================================
        // JIKA MENGGANTI GAMBAR
        // ========================================

        if ($request->hasFile('gambar')) {

            $folder = public_path('uploads/ekstrakurikuler');

            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
            }


            // HAPUS GAMBAR LAMA
            if ($ekskul->gambar) {

                $gambarLama = $folder . '/' . $ekskul->gambar;

                if (file_exists($gambarLama)) {
                    unlink($gambarLama);
                }
            }


            // UPLOAD GAMBAR BARU
            $file = $request->file('gambar');

            $namaFile = time() . '_' . $file->getClientOriginalName();

            $file->move($folder, $namaFile);

            $ekskul->gambar = $namaFile;
        }


        // ========================================
        // SIMPAN PERUBAHAN
        // ========================================

        $ekskul->save();


        return redirect()
            ->route('ekstrakurikuler.index')
            ->with(
                'success',
                'Data ekstrakurikuler berhasil diperbarui!'
            );
    }


    // ========================================
    // MENGHAPUS DATA
    // ========================================

    public function destroy($id)
    {
        // Hanya Administrator yang boleh menghapus
        if (
            !auth()->check() ||
            strtolower(trim(auth()->user()->role)) !== 'administrator'
        ) {
            abort(403, 'Anda tidak memiliki izin untuk menghapus data ekstrakurikuler.');
        }

        $ekskul = Ekstrakurikuler::findOrFail($id);


        // ========================================
        // HAPUS GAMBAR
        // ========================================

        if ($ekskul->gambar) {

            $gambar = public_path(
                'uploads/ekstrakurikuler/' . $ekskul->gambar
            );

            if (file_exists($gambar)) {
                unlink($gambar);
            }
        }


        // ========================================
        // HAPUS DATA
        // ========================================

        $ekskul->delete();


        return redirect()
            ->route('ekstrakurikuler.index')
            ->with(
                'success',
                'Data ekstrakurikuler berhasil dihapus!'
            );
    }
}