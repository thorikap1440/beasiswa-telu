<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daftar;

class DaftarBeasiswaController extends Controller
{
    // Metode untuk menampilkan form pendaftaran
    public function index()
    {
        return view('daftar'); // Menampilkan form pendaftaran
    }

    // Metode untuk menyimpan data pendaftaran
    public function store(Request $request)
    {
        // Validasi form input
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255', // Validasi nama harus ada, bertipe string, dan maksimal 255 karakter
            'email' => 'required|email|max:255', // Validasi email harus ada, harus dalam format email, dan maksimal 255 karakter
            'no_hp' => 'required|string|max:15', // Validasi nomor HP harus ada, bertipe string, dan maksimal 15 karakter
            'semester' => 'required|integer', // Validasi semester harus ada dan bertipe integer
            'ipk' => 'required|numeric', // Validasi IPK harus ada dan bertipe numeric
            'pilihanbeasiswa' => 'required|string', // Validasi pilihan beasiswa harus ada dan bertipe string
            'berkas' => 'required|file|mimes:pdf,jpg,png|max:2048', // Validasi berkas harus ada, bertipe file dengan format yang ditentukan, dan maksimal 2048 KB
        ]);

        // Cek jika ada file berkas yang diupload dan simpan path-nya
        if ($request->hasFile('berkas')) {
            $berkasPath = $request->file('berkas')->store('berkas', 'public'); // Simpan berkas di direktori 'berkas' dalam storage publik
        } else {
            $berkasPath = null; // Jika tidak ada berkas, set path-nya menjadi null
        }

        // Simpan data ke dalam database
        $daftar = Daftar::create([
            'nama' => $request->input('nama'), // Ambil input nama dari request
            'email' => $request->input('email'), // Ambil input email dari request
            'no_hp' => $request->input('no_hp'), // Ambil input nomor HP dari request
            'semester' => $request->input('semester'), // Ambil input semester dari request
            'ipk' => $request->input('ipk'), // Ambil input IPK dari request
            'pilihanbeasiswa' => $request->input('pilihanbeasiswa'), // Ambil input pilihan beasiswa dari request
            'berkas' => $berkasPath, // Simpan path berkas yang diupload
            'status' => 'belum terverifikasi', // Set status pendaftaran awal
        ]);

        // Redirect ke halaman hasil dengan pesan sukses
        return redirect('/hasil')->with('success', 'Pendaftaran beasiswa berhasil!'); // Mengarahkan ke halaman hasil dan menampilkan pesan sukses
    }
}
