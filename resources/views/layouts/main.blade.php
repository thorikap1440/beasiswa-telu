<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Pastikan setiap tag memiliki atribut penting seperti charset dan viewport untuk mobile-friendly -->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Telkom University Purwokerto</title>
        
        <!-- Gunakan link CDN Bootstrap dengan integrity dan crossorigin untuk keamanan -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
            crossorigin="anonymous"
        />

        <!-- Gunakan Google Fonts untuk font eksternal yang jelas dan mudah dibaca -->
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
            rel="stylesheet"
        />

        <!-- Gunakan asset helper dari Laravel untuk memuat CSS lokal -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <!-- Pastikan library Chart.js dipanggil untuk visualisasi data -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> 
    </head>
    
    <style>
        /* Gunakan satu jenis font secara konsisten di seluruh dokumen */
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    
    <body>
        <!-- Sertakan navbar melalui Laravel blade templating untuk menjaga konsistensi desain -->
        @include('layouts.components.navbar')
        
        <!-- Gunakan yield untuk memasukkan konten dinamis -->
        @yield('content')

        <!-- Sertakan footer untuk bagian bawah yang sama di setiap halaman -->
        @include('layouts.components.footer')
        
        <!-- CDN Bootstrap JS -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
