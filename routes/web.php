<?php

use App\Http\Controllers\DaftarBeasiswaController; // Mengimpor controller untuk pendaftaran beasiswa
use App\Http\Controllers\GrafikController; // Mengimpor controller untuk grafik pendaftar
use App\Http\Controllers\HasilBeasiswaController; // Mengimpor controller untuk hasil pendaftaran beasiswa
use App\Http\Controllers\PilihanBeasiswaController; // Mengimpor controller untuk pilihan beasiswa
use Illuminate\Support\Facades\Route; // Mengimpor facade Route untuk mendefinisikan rute

// Route::get('/', function () {
//     return view('welcome'); // Rute untuk halaman welcome yang dinonaktifkan
// });

// Mendefinisikan rute untuk halaman utama
Route::get('/', [PilihanBeasiswaController::class, 'index'])->name('pilihanbeasiswa'); // Menampilkan pilihan beasiswa

// Mendefinisikan rute untuk form pendaftaran
Route::get('/daftar', [DaftarBeasiswaController::class, 'index'])->name('daftar'); // Menampilkan form pendaftaran beasiswa
Route::post('/daftar', [DaftarBeasiswaController::class, 'store'])->name('daftar.store'); // Mengolah data pendaftaran beasiswa

// Mendefinisikan rute untuk menampilkan hasil pendaftaran
Route::get('/hasil', [HasilBeasiswaController::class, 'index'])->name('hasil'); // Menampilkan daftar pendaftar beasiswa

// Mendefinisikan rute untuk menampilkan grafik pendaftar
Route::get('/grafik', [GrafikController::class, 'index'])->name('grafik'); // Menampilkan grafik pendaftar beasiswa
