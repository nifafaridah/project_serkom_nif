<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Siswa;
use App\Models\User;
use App\Models\Galeri;
use App\Models\Ekstrakurikuler;
use App\Models\Berita;

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

        return view('admin.dashboard', compact(
            'totalGuru',
            'totalSiswa',
            'totalUser',
            'totalGaleri',
            'totalEkstrakurikuler',
            'totalBerita'
        ));
    }
}

