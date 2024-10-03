<?php

namespace App\Http\Controllers;

use App\Models\Daftar; // Mengimpor model Daftar
use Illuminate\Http\Request; // Mengimpor Request untuk menangani permintaan HTTP

class HasilBeasiswaController extends Controller
{
    // Metode untuk menampilkan hasil pendaftaran beasiswa
    public function index()
    {
        // Mengambil semua data dari tabel 'daftar'
        $daftar = Daftar::all(); // Mengambil semua entri dari model Daftar
        
        // Mengirimkan data pendaftar ke tampilan 'hasil'
        return view('hasil', compact('daftar')); // Menggunakan compact untuk mengirimkan variabel 'daftar' ke tampilan
    }
}
