<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    // ============================
    // MENAMPILKAN DATA GURU
    // ============================

    public function index()
    {
        $guru = DB::table('guru')->get();

        return view('admin.guru.index', compact('guru'));
    }


    // ============================
    // MENAMPILKAN DETAIL GURU
    // ============================

    public function show($id)
    {
        $guru = DB::table('guru')
            ->where('id_guru', $id)
            ->first();

        if (!$guru) {
            return redirect()
                ->route('guru.index')
                ->with('error', 'Data guru tidak ditemukan!');
        }

        return view('admin.guru.show', compact('guru'));
    }


    // ============================
    // MENAMPILKAN FORM TAMBAH GURU
    // ============================

    public function create()
    {
        // Hanya Administrator yang boleh menambah guru
        if (!auth()->check() || strtolower(trim(auth()->user()->role)) !== 'administrator') {
            abort(403, 'Anda tidak memiliki izin untuk menambah data guru.');
        }

        return view('admin.guru.create');
    }


    // ============================
    // MENYIMPAN DATA GURU
    // ============================

    public function store(Request $request)
    {
        // Hanya Administrator yang boleh menyimpan guru
        if (!auth()->check() || strtolower(trim(auth()->user()->role)) !== 'administrator') {
            abort(403, 'Anda tidak memiliki izin untuk menambah data guru.');
        }

        // Validasi
        $request->validate([
            'nama_guru' => 'required',
            'nip'       => 'required',
            'mapel'     => 'required',
            'foto'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);


        // ============================
        // UPLOAD FOTO
        // ============================

        $namaFoto = null;

        if ($request->hasFile('foto')) {

            $file = $request->file('foto');

            $namaFoto = time() . '_' . $file->getClientOriginalName();

            $folder = public_path('uploads/guru');

            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
            }

            $file->move($folder, $namaFoto);
        }


        // ============================
        // MEMBUAT ID GURU
        // ============================

        $jumlahGuru = DB::table('guru')->count();

        $idGuru = $jumlahGuru + 1;


        // ============================
        // SIMPAN KE DATABASE
        // ============================

        DB::table('guru')->insert([
            'id_guru'   => $idGuru,
            'nama_guru' => $request->nama_guru,
            'nip'       => $request->nip,
            'mapel'     => $request->mapel,
            'foto'      => $namaFoto,
        ]);


        // Kembali ke halaman guru
        return redirect()
            ->route('guru.index')
            ->with('success', 'Data guru berhasil disimpan!');
    }


    // ============================
    // FORM EDIT GURU
    // ============================

    public function edit($id)
    {
        // Hanya Administrator yang boleh edit
        if (!auth()->check() || strtolower(trim(auth()->user()->role)) !== 'administrator') {
            abort(403, 'Anda tidak memiliki izin untuk mengedit data guru.');
        }

        $guru = DB::table('guru')
            ->where('id_guru', $id)
            ->first();

        if (!$guru) {
            return redirect()
                ->route('guru.index')
                ->with('error', 'Data guru tidak ditemukan!');
        }

        return view('admin.guru.edit', compact('guru'));
    }


    // ============================
    // UPDATE GURU
    // ============================

    public function update(Request $request, $id)
    {
        // Hanya Administrator yang boleh update
        if (!auth()->check() || strtolower(trim(auth()->user()->role)) !== 'administrator') {
            abort(403, 'Anda tidak memiliki izin untuk mengubah data guru.');
        }

        $request->validate([
            'nama_guru' => 'required',
            'nip'       => 'required',
            'mapel'     => 'required',
            'foto'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);


        // Cari data guru
        $guru = DB::table('guru')
            ->where('id_guru', $id)
            ->first();

        if (!$guru) {
            return redirect()
                ->route('guru.index')
                ->with('error', 'Data guru tidak ditemukan!');
        }


        // ============================
        // FOTO LAMA
        // ============================

        $namaFoto = $guru->foto;


        // ============================
        // UPLOAD FOTO BARU
        // ============================

        if ($request->hasFile('foto')) {

            $file = $request->file('foto');

            $namaFoto = time() . '_' . $file->getClientOriginalName();

            $folder = public_path('uploads/guru');

            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
            }

            // Upload foto baru
            $file->move($folder, $namaFoto);


            // ============================
            // HAPUS FOTO LAMA
            // ============================

            if ($guru->foto) {

                $fotoLama = $folder . '/' . $guru->foto;

                if (file_exists($fotoLama)) {
                    unlink($fotoLama);
                }
            }
        }


        // ============================
        // UPDATE DATABASE
        // ============================

        DB::table('guru')
            ->where('id_guru', $id)
            ->update([
                'nama_guru' => $request->nama_guru,
                'nip'       => $request->nip,
                'mapel'     => $request->mapel,
                'foto'      => $namaFoto,
            ]);


        return redirect()
            ->route('guru.index')
            ->with('success', 'Data guru berhasil diperbarui!');
    }


    // ============================
    // HAPUS GURU
    // ============================

    public function destroy($id)
    {
        // Hanya Administrator yang boleh menghapus
        if (!auth()->check() || strtolower(trim(auth()->user()->role)) !== 'administrator') {
            abort(403, 'Anda tidak memiliki izin untuk menghapus data guru.');
        }

        // Cari data guru
        $guru = DB::table('guru')
            ->where('id_guru', $id)
            ->first();


        if ($guru) {

            // ============================
            // HAPUS FOTO
            // ============================

            if ($guru->foto) {

                $foto = public_path('uploads/guru/' . $guru->foto);

                if (file_exists($foto)) {
                    unlink($foto);
                }
            }


            // ============================
            // HAPUS DATA GURU
            // ============================

            DB::table('guru')
                ->where('id_guru', $id)
                ->delete();
        }


        return redirect()
            ->route('guru.index')
            ->with('success', 'Data guru berhasil dihapus!');
    }
}