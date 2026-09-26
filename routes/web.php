<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilSekolahController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;



Route::get('/', function () { return view('admin/dashboard');});
Route::get('/profil-sekolah', [ProfilSekolahController::class, 'index'])->name('profil-sekolah');
Route::post('/profil-sekolah', [ProfilSekolahController::class, 'store'])->name('profil-sekolah.store');
Route::get('/guru', [GuruController::class, 'index'])->name('guru.index');
Route::get('/guru/create', [GuruController::class, 'create'])->name('guru.create');


Route::resource('guru', GuruController::class);

Route::resource('guru', GuruController::class);
Route::post('/guru', [GuruController::class, 'store'])->name('guru.store');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout']) ->name('logout');
Route::resource('/siswa', SiswaController::class,);


Route::get('/profil-sekolah', [ProfilSekolahController::class, 'index'])
    ->name('profil-sekolah.index');

Route::post('/profil-sekolah', [ProfilSekolahController::class, 'store'])
    ->name('profil-sekolah.store');


Route::get('/siswa', [SiswaController::class, 'index'])
    ->name('siswa.index');

Route::get('/siswa/create', [SiswaController::class, 'create'])
    ->name('siswa.create');

Route::post('/siswa', [SiswaController::class, 'store'])
    ->name('siswa.store');

Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])
    ->name('siswa.edit');

Route::put('/siswa/{id}', [SiswaController::class, 'update'])
    ->name('siswa.update');

Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])
    ->name('siswa.destroy');
    Route::get('/ekstrakurikuler', [EkstrakurikulerController::class, 'index'])
    ->name('ekstrakurikuler.index');

Route::get('/ekstrakurikuler/create', [EkstrakurikulerController::class, 'create'])
    ->name('ekstrakurikuler.create');

Route::post('/ekstrakurikuler', [EkstrakurikulerController::class, 'store'])
    ->name('ekstrakurikuler.store');

Route::get('/ekstrakurikuler/{id}/edit', [EkstrakurikulerController::class, 'edit'])
    ->name('ekstrakurikuler.edit');

Route::put('/ekstrakurikuler/{id}', [EkstrakurikulerController::class, 'update'])
    ->name('ekstrakurikuler.update');

Route::delete('/ekstrakurikuler/{id}', [EkstrakurikulerController::class, 'destroy'])
    ->name('ekstrakurikuler.destroy');
    Route::get('/ekstrakurikuler', [EkstrakurikulerController::class, 'index'])
    ->name('ekstrakurikuler.index');

Route::get('/ekstrakurikuler/create', [EkstrakurikulerController::class, 'create'])
    ->name('ekstrakurikuler.create');

Route::post('/ekstrakurikuler', [EkstrakurikulerController::class, 'store'])
    ->name('ekstrakurikuler.store');

Route::get('/ekstrakurikuler/{id}/edit', [EkstrakurikulerController::class, 'edit'])
    ->name('ekstrakurikuler.edit');

Route::put('/ekstrakurikuler/{id}', [EkstrakurikulerController::class, 'update'])
    ->name('ekstrakurikuler.update');

Route::delete('/ekstrakurikuler/{id}', [EkstrakurikulerController::class, 'destroy'])
    ->name('ekstrakurikuler.destroy');Route::get('/berita', [BeritaController::class, 'index'])
    ->name('berita.index');

Route::get('/berita/create', [BeritaController::class, 'create'])
    ->name('berita.create');

Route::post('/berita', [BeritaController::class, 'store'])
    ->name('berita.store');

Route::get('/berita/{id}/edit', [BeritaController::class, 'edit'])
    ->name('berita.edit');

Route::put('/berita/{id}', [BeritaController::class, 'update'])
    ->name('berita.update');

Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])
    ->name('berita.destroy');
    use App\Http\Controllers\PengumumanController;

Route::get('/pengumuman', [PengumumanController::class, 'index'])
    ->name('pengumuman.index');

Route::get('/pengumuman/create', [PengumumanController::class, 'create'])
    ->name('pengumuman.create');

Route::post('/pengumuman', [PengumumanController::class, 'store'])
    ->name('pengumuman.store');

Route::get('/pengumuman/{id}/edit', [PengumumanController::class, 'edit'])
    ->name('pengumuman.edit');

Route::put('/pengumuman/{id}', [PengumumanController::class, 'update'])
    ->name('pengumuman.update');

Route::delete('/pengumuman/{id}', [PengumumanController::class, 'destroy'])
    ->name('pengumuman.destroy');
use App\Http\Controllers\GaleriController;

Route::get('/galeri', [GaleriController::class, 'index'])
    ->name('galeri.index');

Route::get('/galeri/create', [GaleriController::class, 'create'])
    ->name('galeri.create');

Route::post('/galeri', [GaleriController::class, 'store'])
    ->name('galeri.store');

Route::get('/galeri/{id}/edit', [GaleriController::class, 'edit'])
    ->name('galeri.edit');

Route::put('/galeri/{id}', [GaleriController::class, 'update'])
    ->name('galeri.update');

Route::delete('/galeri/{id}', [GaleriController::class, 'destroy'])
    ->name('galeri.destroy');
    use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index'])
    ->name('users.index');

Route::get('/users/create', [UserController::class, 'create'])
    ->name('users.create');

Route::post('/users', [UserController::class, 'store'])
    ->name('users.store');

Route::get('/users/{id}/edit', [UserController::class, 'edit'])
    ->name('users.edit');

Route::put('/users/{id}', [UserController::class, 'update'])
    ->name('users.update');

Route::delete('/users/{id}', [UserController::class, 'destroy'])
    ->name('users.destroy');
