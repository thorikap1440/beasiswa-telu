<?php

namespace App\Http\Controllers; // Mendefinisikan namespace untuk controller ini

use Illuminate\Http\Request; // Mengimpor kelas Request dari Laravel

class PilihanBeasiswaController extends Controller
{
    // Metode untuk menampilkan halaman pilihan beasiswa
    public function index()
    {
        // Mengembalikan tampilan 'pilihanbeasiswa'
        return view(view: 'pilihanbeasiswa'); // Menggunakan metode view untuk menampilkan tampilan
    }
}
