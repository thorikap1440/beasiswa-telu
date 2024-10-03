<nav class="navbar navbar-custom navbar-expand-lg bg-light sticky-top">
  <div class="container d-flex justify-content-between">
    
    <!-- Bagian menampilkan logo pada navbar -->
    <a class="navbar-brand" href="#">
      <img src="{{ asset('/image/logl telu.png') }}" alt="Logo" width="150" height="65">
    </a>
    
    <!-- Toggler untuk tampilan mobile, gunakan data-bs-target dan data-bs-toggle dari Bootstrap 5 -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <!-- Menu tengah, gunakan ul dengan class yang sesuai dari Bootstrap untuk memastikan tampilan responsive dan terpusat -->
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0 mx-auto fw-semibold">
        <!-- Setiap link menggunakan Route Laravel, pastikan Route::is digunakan untuk memberikan class 'active' jika route tersebut aktif -->
        <li class="nav-item px-2">
          <a class="nav-link {{ Route::is('pilihanbeasiswa') ? 'active' : '' }}" aria-current="page" href="{{ route('pilihanbeasiswa') }}">Pilihan Beasiswa</a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link {{ Route::is('daftar') ? 'active' : '' }}" href="{{ route('daftar') }}">Daftar</a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link {{ Route::is('hasil') ? 'active' : '' }}" href="{{ route('hasil') }}">Hasil</a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link {{ Route::is('grafik') ? 'active' : '' }}" href="{{ route('grafik') }}">Grafik</a>
        </li>
      </ul>
    </div>
    
    <!-- Tombol 'Daftar Beasiswa', gunakan class Bootstrap untuk tombol, dengan warna dan ketebalan teks sesuai desain -->
    <a href="{{ route('daftar') }}">
        <button class="btn btn-danger text-white fw-semibold" type="button">Daftar Beasiswa</button>
    </a>

  </div>
</nav>
