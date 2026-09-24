<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilSekolahController;
use App\Http\Controllers\AuthController;

Route::get('/', function () { return view('admin/dashboard');});
Route::get('/profil-sekolah', [ProfilSekolahController::class, 'index'])->name('profil-sekolah');
Route::post('/profil-sekolah', [ProfilSekolahController::class, 'store'])->name('profil-sekolah.store');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout']) ->name('logout');