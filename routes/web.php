<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// ---------- AUTH ----------
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'register'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// ---------- HALAMAN UTAMA ----------
Route::get('/', function () {
    return redirect('/dashboard');
});

// ---------- DASHBOARD ----------
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->middleware('auth')
    ->name('dashboard');

Route::get('/admin/dashboard', [App\Http\Controllers\AdminDashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('admin.dashboard');

// ---------- CRUD DAN HANYA BISA DIAKSES SETELAH LOGIN ----------
Route::middleware('auth')->group(function () {
    Route::resource('pasien', PasienController::class);
    Route::resource('dokter', DokterController::class);
    Route::resource('pegawai', PegawaiController::class);
});

// ---------- JANGAN PAKAI Auth::routes() (hapus total) ----------
// Auth::routes();  // HAPUS – ini penyebab error besar

// ---------- JANGAN PAKAI /home (hapus juga) ----------
// Route::get('/home', ... ); // TIDAK DIPERLUKAN
