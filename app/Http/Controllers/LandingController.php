<?php


namespace App\Http\Controllers;

use App\Models\ProfilSekolah;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Ekstrakurikuler;
use App\Models\Prestasi;
use App\Models\Pengumuman;

class LandingController extends Controller
{
    public function index()
    {
        // Profil sekolah
        $profil = ProfilSekolah::first();

        // Data guru
        $guru = Guru::all();

        // Data siswa
        $siswa = Siswa::all();

        // Data berita
        $berita = Berita::latest('tanggal')->get();

        // Data galeri
        $galeri = Galeri::all();

        // Data ekstrakurikuler
        $ekstrakurikuler = Ekstrakurikuler::all();

        // Data prestasi
        $prestasi = Prestasi::latest()->get();

        // Data pengumuman
        $pengumuman = Pengumuman::latest()->get();

        return view('landing.index', compact(
            'profil',
            'guru',
            'siswa',
            'berita',
            'galeri',
            'ekstrakurikuler',
            'prestasi',
            'pengumuman'
        ));
    }
}
