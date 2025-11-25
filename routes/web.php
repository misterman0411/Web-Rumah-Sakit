<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PegawaiController;

Route::get('/', function () {
    return redirect('/pasien');
});

Route::resource('pasien', PasienController::class);
Route::resource('dokter', DokterController::class);
Route::resource('pegawai', PegawaiController::class);
Route::get('/', function () {
    return view('welcome');
});
