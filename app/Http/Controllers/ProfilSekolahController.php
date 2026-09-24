<?php

namespace App\Http\Controllers;
use App\Models\ProfilSekolah;

use Illuminate\Http\Request;

class ProfilSekolahController extends Controller
{
    //
    public function index()
    {
        $profil = ProfilSekolah::first();

        return view('admin.profil_sekolah.index', compact('profil'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_sekolah' => 'required',
            'kepala_sekolah' => 'required',
            'npsn' => 'nullable',
            'alamat' => 'nullable',
            'kontak' => 'nullable',
            'visi_misi' => 'nullable',
            'tahun_berdiri' => 'nullable',
            'deskripsi' => 'nullable',
        ]);

        ProfilSekolah::updateOrCreate(
            ['id_profil' => 1],
            [
                'nama_sekolah' => $request->nama_sekolah,
                'kepala_sekolah' => $request->kepala_sekolah,
                'npsn' => $request->npsn,
                'alamat' => $request->alamat,
                'kontak' => $request->kontak,
                'visi_misi' => $request->visi_misi,
                'tahun_berdiri' => $request->tahun_berdiri,
                'deskripsi' => $request->deskripsi,
            ]
        );

        return redirect('/profil-sekolah')
            ->with('success', 'Profil sekolah berhasil disimpan.');
    }
}
