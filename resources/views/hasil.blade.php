@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <!-- Judul Halaman Daftar Pendaftar Beasiswa -->
    <h2 class="mb-4">Daftar Pendaftar Beasiswa</h2>

    <!-- Pesan sukses jika pendaftaran berhasil -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Tabel daftar pendaftar beasiswa -->
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <!-- Kolom nomor urut -->
                <th>No</th>
                <!-- Kolom untuk nama pendaftar -->
                <th>Nama</th>
                <!-- Kolom untuk email pendaftar -->
                <th>Email</th>
                <!-- Kolom untuk nomor HP pendaftar -->
                <th>No HP</th>
                <!-- Kolom untuk semester yang sedang ditempuh -->
                <th>Semester</th>
                <!-- Kolom untuk IPK pendaftar -->
                <th>IPK</th>
                <!-- Kolom untuk pilihan beasiswa yang diambil -->
                <th>Pilihan Beasiswa</th>
                <!-- Kolom untuk melihat atau mengunduh berkas pendaftaran -->
                <th>Berkas</th>
                <!-- Kolom untuk menampilkan status pendaftaran -->
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <!-- Looping untuk menampilkan data setiap pendaftar -->
            @foreach($daftar as $index => $data)
                <tr>
                    <!-- Menampilkan nomor urut -->
                    <td>{{ $index + 1 }}</td>
                    <!-- Menampilkan nama pendaftar -->
                    <td>{{ $data->nama }}</td>
                    <!-- Menampilkan email pendaftar -->
                    <td>{{ $data->email }}</td>
                    <!-- Menampilkan nomor HP pendaftar -->
                    <td>{{ $data->no_hp }}</td>
                    <!-- Menampilkan semester yang sedang ditempuh oleh pendaftar -->
                    <td>{{ $data->semester }}</td>
                    <!-- Menampilkan IPK pendaftar -->
                    <td>{{ $data->ipk }}</td>
                    <!-- Menampilkan pilihan beasiswa pendaftar -->
                    <td>{{ $data->pilihanbeasiswa }}</td>
                    <!-- Menampilkan link untuk melihat atau mengunduh berkas pendaftar -->
                    <td>
                        @if($data->berkas)
                            <!-- Jika berkas tersedia, tampilkan link untuk melihatnya di tab baru -->
                            <a href="{{ asset('storage/' . $data->berkas) }}" target="_blank">Lihat Berkas</a>
                        @else
                            <!-- Jika tidak ada berkas, tampilkan teks 'Tidak ada berkas' -->
                            Tidak ada berkas
                        @endif
                    </td>
                    <!-- Menampilkan status pendaftaran (misalnya: disetujui, ditolak, dll.) -->
                    <td>{{ $data->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
