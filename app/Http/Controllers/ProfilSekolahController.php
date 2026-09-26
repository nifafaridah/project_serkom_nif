<?php

namespace App\Http\Controllers;

use App\Models\ProfilSekolah;
use Illuminate\Http\Request;

class ProfilSekolahController extends Controller
{
    // Menampilkan halaman profil sekolah
    public function index()
    {
        $profil = ProfilSekolah::first();

        return view('admin.profil-sekolah.index', compact('profil'));
    }


    // Menyimpan data profil sekolah
    public function store(Request $request)
    {
        $request->validate([
            'nama_sekolah'   => 'required',
            'kepala_sekolah' => 'required',
            'npsn'            => 'required',
            'alamat'         => 'required',
            'kontak'         => 'required',
            'visi_misi'      => 'required',
            'tahun_berdiri'  => 'required',
            'deskripsi'      => 'required',

            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);


        // Ambil data yang sudah ada
        $profil = ProfilSekolah::first();


        // Kalau belum ada, buat baru
        if (!$profil) {
            $profil = new ProfilSekolah();
        }


        // Data utama
        $profil->nama_sekolah   = $request->nama_sekolah;
        $profil->kepala_sekolah = $request->kepala_sekolah;
        $profil->npsn           = $request->npsn;
        $profil->alamat         = $request->alamat;
        $profil->kontak         = $request->kontak;
        $profil->visi_misi      = $request->visi_misi;
        $profil->tahun_berdiri  = $request->tahun_berdiri;
        $profil->deskripsi      = $request->deskripsi;


        // Folder upload
        $folder = public_path('uploads/profil');

        if (!file_exists($folder)) {
            mkdir($folder, 0777, true);
        }


        // Upload foto
        if ($request->hasFile('foto')) {

            if ($profil->foto) {

                $fotoLama = $folder . '/' . $profil->foto;

                if (file_exists($fotoLama)) {
                    unlink($fotoLama);
                }
            }

            $fileFoto = $request->file('foto');

            $namaFoto = time() . '_foto_' . $fileFoto->getClientOriginalName();

            $fileFoto->move($folder, $namaFoto);

            $profil->foto = $namaFoto;
        }


        // Upload logo
        if ($request->hasFile('logo')) {

            if ($profil->logo) {

                $logoLama = $folder . '/' . $profil->logo;

                if (file_exists($logoLama)) {
                    unlink($logoLama);
                }
            }

            $fileLogo = $request->file('logo');

            $namaLogo = time() . '_logo_' . $fileLogo->getClientOriginalName();

            $fileLogo->move($folder, $namaLogo);

            $profil->logo = $namaLogo;
        }


        // SIMPAN
        $profil->save();


        return redirect()
            ->route('profil-sekolah.index')
            ->with('success', 'Profil sekolah berhasil disimpan!');
    }
}
