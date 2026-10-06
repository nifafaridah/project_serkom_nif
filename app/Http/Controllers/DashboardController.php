<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Siswa;
use App\Models\User;
use App\Models\Galeri;
use App\Models\Berita;
use App\Models\Pengumuman;
use App\Models\Ekstrakurikuler;
use App\Models\Prestasi;

class DashboardController extends Controller
{
    public function index()
    {
        $totalGuru = Guru::count();
        $totalSiswa = Siswa::count();
        $totalUser = User::count();
        $totalGaleri = Galeri::count();
        $totalEkstrakurikuler = Ekstrakurikuler::count();
        $totalBerita = Berita::count();
        $totalPengumuman = Pengumuman::count();
        $totalPrestasi = Prestasi::count();

        return view('admin.dashboard', compact(
            'totalGuru',
            'totalSiswa',
            'totalUser',
            'totalGaleri',
            'totalEkstrakurikuler',
            'totalBerita',
            'totalPengumuman',
            'totalPrestasi'
        ));
    }
}