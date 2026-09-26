<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    // Menampilkan data guru
    public function index()
    {
        $guru = DB::table('guru')->get();

        return view('admin.guru.index', compact('guru'));
    }


    // Menampilkan form tambah guru
    public function create()
    {
        return view('admin.guru.create');
    }


    // Menyimpan data guru
    public function store(Request $request)
    {
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
    // FORM EDIT
    // ============================

    public function edit($id)
    {
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
        $request->validate([
            'nama_guru' => 'required',
            'nip'       => 'required',
            'mapel'     => 'required',
            'foto'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);


        $guru = DB::table('guru')
            ->where('id_guru', $id)
            ->first();

        if (!$guru) {
            return redirect()
                ->route('guru.index')
                ->with('error', 'Data guru tidak ditemukan!');
        }


        // Foto lama
        $namaFoto = $guru->foto;


        // Kalau ada foto baru
        if ($request->hasFile('foto')) {

            $file = $request->file('foto');

            $namaFoto = time() . '_' . $file->getClientOriginalName();

            $folder = public_path('uploads/guru');

            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
            }

            $file->move($folder, $namaFoto);


            // Hapus foto lama
            if ($guru->foto) {

                $fotoLama = $folder . '/' . $guru->foto;

                if (file_exists($fotoLama)) {
                    unlink($fotoLama);
                }
            }
        }


        // Update database
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
        $guru = DB::table('guru')
            ->where('id_guru', $id)
            ->first();


        if ($guru) {

            // Hapus foto
            if ($guru->foto) {

                $foto = public_path('uploads/guru/' . $guru->foto);

                if (file_exists($foto)) {
                    unlink($foto);
                }
            }


            // Hapus data
            DB::table('guru')
                ->where('id_guru', $id)
                ->delete();
        }


        return redirect()
            ->route('guru.index')
            ->with('success', 'Data guru berhasil dihapus!');
    }
}
