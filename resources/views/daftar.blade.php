@extends('layouts.main')

@section('content')

<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-lg-5 shadow p-5 rounded-2">
            <!-- Gunakan elemen h2 untuk judul utama form -->
            <h2 class="mb-4">Form Pendaftaran Beasiswa</h2>
        
            <!-- Pastikan menampilkan pesan sukses jika ada, menggunakan session helper -->
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
        
            <!-- Form untuk pendaftaran beasiswa, gunakan method POST dan enctype multipart untuk file upload -->
            <form action="{{ route('daftar.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <!-- Field input untuk Nama Lengkap -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <!-- Setiap input harus memiliki atribut 'required' untuk validasi front-end -->
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
        
                <!-- Field input untuk Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <!-- Gunakan type email agar input divalidasi sebagai format email -->
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
        
                <!-- Field input untuk Nomor HP -->
                <div class="mb-3">
                    <label for="phone" class="form-label">Nomor HP</label>
                    <!-- Pastikan input nomor HP berbentuk text untuk lebih fleksibel -->
                    <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                </div>
        
                <!-- Field untuk memilih semester saat ini -->
                <div class="mb-3">
                    <label for="semester" class="form-label">Semester Saat Ini</label>
                    <!-- Gunakan select untuk pilihan dropdown, onchange memicu fungsi calculateGPA -->
                    <select class="form-select" id="semester" name="semester" required onchange="calculateGPA()">
                        <option value="1">Semester 1</option>
                        <option value="2">Semester 2</option>
                        <option value="3">Semester 3</option>
                        <option value="4">Semester 4</option>
                        <option value="5">Semester 5</option>
                        <option value="6">Semester 6</option>
                        <option value="7">Semester 7</option>
                        <option value="8">Semester 8</option>
                    </select>
                </div>
        
                <!-- Field input IPK Terakhir -->
                <div class="mb-3">
                    <label for="gpa" class="form-label">IPK Terakhir</label>
                    <!-- IPK diisi otomatis dan diatur agar readonly -->
                    <input type="text" class="form-control" id="ipk" name="ipk" readonly required>
                </div>
        
                <!-- Field untuk memilih jenis beasiswa -->
                <div class="mb-3">
                    <label for="scholarship" class="form-label">Pilih Beasiswa</label>
                    <!-- Dropdown pilihan beasiswa, dinonaktifkan berdasarkan IPK -->
                    <select class="form-select" id="pilihanbeasiswa" name="pilihanbeasiswa" disabled required>
                        <option value="Beasiswa Akademik">Beasiswa Akademik</option>
                        <option value="Beasiswa Non-Akademik">Beasiswa Non-Akademik</option>
                        <option value="Beasiswa BUMN">Beasiswa BUMN</option>
                    </select>
                </div>
        
                <!-- Field untuk upload berkas syarat -->
                <div class="mb-3">
                    <label for="document" class="form-label">Upload Berkas Syarat</label>
                    <!-- File input untuk mengunggah berkas, dinonaktifkan berdasarkan IPK -->
                    <input type="file" class="form-control" id="berkas" name="berkas" disabled required>
                </div>
        
                <!-- Tombol submit form -->
                <button type="submit" class="btn btn-danger" id="submitBtn" disabled>Daftar</button>
                <!-- Button Batal -->
                <a href="{{ url('/') }}" class="btn btn-secondary ms-2">Batal</a> 
            </form>
        </div>
    </div>
</div>

<!-- JavaScript untuk hitung IPK otomatis dan mengaktifkan/menonaktifkan elemen -->
<script>
    function calculateGPA() {
        // Mendapatkan nilai semester yang dipilih
        const semester = document.getElementById('semester').value;
        const gpaField = document.getElementById('ipk');
        const scholarshipField = document.getElementById('pilihanbeasiswa');
        const documentField = document.getElementById('berkas');
        const submitBtn = document.getElementById('submitBtn');

        // Logika perhitungan IPK otomatis berdasarkan semester
        let gpa;
        if (semester == 1 || semester == 2) {
            gpa = 2.5;
        } else if (semester == 3 || semester == 4) {
            gpa = 2.8;
        } else if (semester == 5 || semester == 6) {
            gpa = 3.2;
        } else {
            gpa = 3.5;
        }

        // Menampilkan IPK yang dihitung otomatis ke field input
        gpaField.value = gpa;

        // Logika untuk mengaktifkan atau menonaktifkan field beasiswa dan berkas
        if (gpa >= 3) {
            scholarshipField.disabled = false;
            documentField.disabled = false;
            submitBtn.disabled = false;
        } else {
            // Jika IPK kurang dari 3, reset dan disable field
            scholarshipField.disabled = true;
            documentField.disabled = true;
            submitBtn.disabled = true;
            scholarshipField.value = ''; // Reset pilihan beasiswa
            documentField.value = ''; // Reset file input
        }
    }
</script>
@endsection
