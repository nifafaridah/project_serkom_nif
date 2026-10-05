<?php

namespace App\Http\Controllers;

use App\Models\ProfilSekolah;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Ekstrakurikuler;

class LandingController extends Controller
{
    public function index()
    {
        $profil = ProfilSekolah::first();

        $guru = Guru::all();

        $siswa = Siswa::all();

        $berita = Berita::latest('tanggal')->get();

        // Galeri tidak menggunakan order tanggal
        $galeri = Galeri::all();

        $ekstrakurikuler = Ekstrakurikuler::all();

        return view('landing.index', compact(
            'profil',
            'guru',
            'siswa',
            'berita',
            'galeri',
            'ekstrakurikuler'
        ));
    }
}