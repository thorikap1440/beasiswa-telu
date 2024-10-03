<footer class="bg-light pt-5 mt-5">
    <div class="container">
        <div class="row">
            <!-- Kolom 1: Alamat -->
            <!-- Gunakan gambar logo dengan atribut alt untuk aksesibilitas -->
            <div class="col-md-4">
                <img src="{{ asset('image/logl telu.png') }}" alt="Telkom University" width="150" height="65">
                <h5 class="fw-bold mt-3">Alamat</h5>
                <!-- Pastikan informasi alamat menggunakan elemen paragraf untuk memastikan struktur HTML yang baik -->
                <p class="fs-6">Jl. Telekomunikasi 1, Terusan Buah Batu – Bojongsoang, Telkom University, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257</p>
            </div>
            
            <!-- Kolom 2: FAQ -->
            <!-- Pastikan list FAQ menggunakan list yang tidak terurut untuk mengelompokkan item dengan benar -->
            <div class="col-md-3">
                <h5 class="fw-bold">FAQ</h5>
                <ul class="list-unstyled">
                    <!-- Setiap link dalam list harus memiliki class yang konsisten untuk memastikan style seragam -->
                    <li><a href="#" class="text-dark">Umum</a></li>
                    <li><a href="#" class="text-dark">Persyaratan Pendaftaran</a></li>
                    <li><a href="#" class="text-dark">Jalur Seleksi</a></li>
                    <li><a href="#" class="text-dark">Ujian</a></li>
                    <li><a href="#" class="text-dark">Pengumuman</a></li>
                    <li><a href="#" class="text-dark">Registrasi</a></li>
                    <li><a href="#" class="text-dark">Beasiswa</a></li>
                </ul>
            </div>
            
            <!-- Kolom 3: Artikel -->
            <!-- Gunakan list yang tidak terurut (unordered list) untuk menjaga hierarki konten -->
            <div class="col-md-2">
                <h5 class="fw-bold">Artikel</h5>
                <ul class="list-unstyled">
                    <!-- Setiap link artikel harus konsisten dalam penggunaan class untuk style yang seragam -->
                    <li><a href="#" class="text-dark">Tel-U Hacks</a></li>
                    <li><a href="#" class="text-dark">Tel-U Insight</a></li>
                    <li><a href="#" class="text-dark">Tel-U Update</a></li>
                    <li><a href="#" class="text-dark">Trendy Tel-U</a></li>
                </ul>
            </div>
            
            <!-- Kolom 4: Pertanyaan -->
            <!-- Gunakan align teks yang sesuai untuk memastikan kolom ini terlihat seragam dan menarik -->
            <div class="col-md-3 text-center">
                <h5 class="fw-bold">Ada Pertanyaan?</h5>
                <p>Hubungi kami sekarang, jika ada pertanyaan lebih lanjut.</p>
                <!-- Gunakan tombol dengan style Bootstrap, pastikan call-to-action jelas dan menarik -->
                <a href="#" class="btn btn-danger">Kontak Kami</a>
            </div>
        </div>
        
        <hr>
        
        <!-- Baris untuk copyright, gunakan elemen teks yang netral dengan kelas text-center untuk memastikan konten berada di tengah -->
        <div class="row">
            <div class="col text-center">
                <p class="text-muted">Copyright ©2024 All Rights Reserved By Telkom University Purwokerto</p>
            </div>
        </div>
    </div>
</footer>
