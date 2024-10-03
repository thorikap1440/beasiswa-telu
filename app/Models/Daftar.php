<?php

namespace App\Models; // Mendefinisikan namespace untuk model ini

use Illuminate\Database\Eloquent\Factories\HasFactory; // Mengimpor trait HasFactory
use Illuminate\Database\Eloquent\Model; // Mengimpor kelas Model dari Laravel

class Daftar extends Model
{
    use HasFactory; // Menggunakan trait HasFactory untuk mendukung factory

    // untuk memproteksi agar namanya tetap tabel 'daftar'
    protected $table = 'daftar'; // Menentukan nama tabel yang digunakan dalam model

    // untuk menentukan data mana saja yang fillable
    protected $fillable = [
        'nama',           // Nama lengkap pendaftar
        'email',          // Email pendaftar
        'no_hp',         // Nomor handphone pendaftar
        'semester',       // Semester pendaftar saat ini
        'ipk',            // Indeks Prestasi Kumulatif pendaftar
        'pilihanbeasiswa', // Pilihan jenis beasiswa yang diinginkan
        'berkas',         // Nama file berkas yang diunggah
        'status',         // Status pendaftaran beasiswa
    ];
}
