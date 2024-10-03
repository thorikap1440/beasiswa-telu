@extends('layouts.main')

@section('content')

<!-- Hero Section -->
<div class="hero-section d-flex align-items-center justify-content-center" 
     style="background: url('{{ asset('image/hero-bg.jpg') }}') no-repeat center center; background-size: cover; height: 100vh;">
    
    <!-- Overlay gelap di atas background untuk memberikan kontras pada teks -->
    <div class="overlay"></div> 
    
    <!-- Kontainer untuk teks hero dan tombol -->
    <div class="container text-center text-light">
        <!-- Judul besar (hero title) dengan class display-4 untuk tampilan lebih besar -->
        <h1 class="display-4 fw-bold">Beasiswa <br> Telkom University Purwokerto</h1>
        
        <!-- Paragraf penjelasan singkat tentang beasiswa -->
        <p class="lead">Railah kesuksesan mu dengan beasiswa Telkom University Purwokerto.</p>
        
        <!-- Tombol "Daftar Sekarang" yang membuka modal pendaftaran -->
        <a class="btn btn-danger btn-lg fs-6" data-bs-toggle="modal" data-bs-target="#daftarModal" href="#" role="button">
            Daftar Sekarang
        </a>
    </div>
</div>
<!-- Akhir dari Hero Section -->

<!-- Modal -->
<div class="modal fade" id="daftarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <!-- Isi modal -->
    <div class="modal-content">
      <!-- Header modal, menampilkan judul dan tombol tutup -->
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Learn More</h5>
        <!-- Tombol untuk menutup modal -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <!-- Isi dari modal -->
      <div class="modal-body">
        <!-- Anda bisa menambahkan lebih banyak detail tentang beasiswa di sini -->
        Here you can add more details about your content.
      </div>
      
      <!-- Footer modal dengan tombol tutup -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Akhir dari Modal -->


<!-- Cards Beasiswa -->
@include('layouts.components.card') 
<!-- Menggunakan komponen kartu yang diambil dari file layout terpisah -->
<!-- Akhir dari Cards Beasiswa -->

@endsection
