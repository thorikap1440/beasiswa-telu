<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daftar;

class GrafikController extends Controller
{
    // Metode untuk menampilkan grafik pendaftar beasiswa
    public function index()
    {
        // Menghitung jumlah pendaftar berdasarkan jenis beasiswa
        $beasiswaA = Daftar::where('pilihanbeasiswa', 'Beasiswa Akademik')->count(); // Hitung jumlah pendaftar untuk Beasiswa Akademik
        $beasiswaB = Daftar::where('pilihanbeasiswa', 'Beasiswa Non-Akademik')->count(); // Hitung jumlah pendaftar untuk Beasiswa Non-Akademik
        $beasiswaC = Daftar::where('pilihanbeasiswa', 'Beasiswa BUMN')->count(); // Hitung jumlah pendaftar untuk Beasiswa BUMN
    
        // Mengirimkan data jumlah pendaftar ke tampilan grafik
        return view('grafik', compact('beasiswaA', 'beasiswaB', 'beasiswaC')); // Menggunakan compact untuk mengirimkan variabel ke tampilan
    }
    
}
