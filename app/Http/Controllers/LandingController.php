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
    // Halaman utama
    public function index()
    {
        $profil = ProfilSekolah::first();
        $guru = Guru::all();
        $siswa = Siswa::all();
        $berita = Berita::latest('tanggal')->get();
        $galeri = Galeri::all();
        $ekstrakurikuler = Ekstrakurikuler::all();
        $prestasi = Prestasi::latest()->get();
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

    // Detail profil sekolah
    public function profil()
    {
        $profil = ProfilSekolah::firstOrFail();

        return view('landing.detail-profil', compact('profil'));
    }

    // Detail guru
    public function detailGuru($id)
    {
        $guru = Guru::findOrFail($id);

        return view('landing.detail-guru', compact('guru'));
    }

    // Detail siswa
    public function detailSiswa($id)
    {
        $siswa = Siswa::findOrFail($id);

        return view('landing.detail-siswa', compact('siswa'));
    }

    // Detail berita
    public function detailBerita($id)
    {
        $berita = Berita::findOrFail($id);

        return view('landing.detail-berita', compact('berita'));
    }

    // Detail galeri
    public function detailGaleri($id)
    {
        $galeri = Galeri::findOrFail($id);

        return view('landing.detail-galeri', compact('galeri'));
    }

    // Detail ekstrakurikuler
    public function detailEkstrakurikuler($id)
    {
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id);

        return view(
            'landing.detail-ekstrakurikuler',
            compact('ekstrakurikuler')
        );
    }

    // Detail prestasi
    public function detailPrestasi($id)
    {
        $prestasi = Prestasi::findOrFail($id);

        return view('landing.detail-prestasi', compact('prestasi'));
    }

    // Detail pengumuman
    public function detailPengumuman($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        return view('landing.detail-pengumuman', compact('pengumuman'));
    }
}
