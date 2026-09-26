<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilSekolahController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;

Route::get('/', function () { return view('admin/dashboard');});
Route::get('/profil-sekolah', [ProfilSekolahController::class, 'index'])->name('profil-sekolah');
Route::post('/profil-sekolah', [ProfilSekolahController::class, 'store'])->name('profil-sekolah.store');
Route::get('/guru', [GuruController::class, 'index'])->name('guru.index');
Route::get('/guru/create', [GuruController::class, 'create'])->name('guru.create');
Route::post('/guru', [GuruController::class, 'store'])->name('guru.store');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout']) ->name('logout');
Route::resource('/siswa', SiswaController::class,);
