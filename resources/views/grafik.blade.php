@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-center">
        <div class="col-lg-8">
            <!-- Judul halaman grafik beasiswa -->
            <h2 class="mb-4 text-center">Grafik Pendaftar Beasiswa</h2>
            <!-- Elemen canvas untuk menampilkan grafik -->
            <canvas id="beasiswaChart"></canvas>
        </div>
    </div>
</div>

<!-- Bagian script untuk membuat grafik menggunakan Chart.js -->
<script>
    // Mengambil data jumlah pendaftar untuk tiap beasiswa dari backend (controller)
    const beasiswaA = {{ json_encode($beasiswaA) }}; // Data untuk Beasiswa Akademik
    const beasiswaB = {{ json_encode($beasiswaB) }}; // Data untuk Beasiswa Non-Akademik
    const beasiswaC = {{ json_encode($beasiswaC) }}; // Data untuk Beasiswa BUMN

    // Pastikan data bukan null atau undefined dengan mencetaknya ke konsol
    console.log(beasiswaA, beasiswaB, beasiswaC);

    // Mendapatkan context dari elemen canvas untuk menggambar grafik
    const ctx = document.getElementById('beasiswaChart').getContext('2d');
    
    // Membuat grafik line chart dengan data pendaftar beasiswa
    const beasiswaChart = new Chart(ctx, {
        type: 'line', // Jenis chart yang digunakan adalah line chart
        data: {
            labels: ['Beasiswa Akademik', 'Beasiswa Non-Akademik', 'Beasiswa BUMN'], // Label sumbu X (jenis beasiswa)
            datasets: [{
                label: 'Jumlah Pendaftar', // Label data pada grafik
                data: [beasiswaA, beasiswaB, beasiswaC], // Data jumlah pendaftar tiap beasiswa
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)', // Warna latar belakang data Beasiswa Akademik
                    'rgba(54, 162, 235, 0.2)', // Warna latar belakang data Beasiswa Non-Akademik
                    'rgba(75, 192, 192, 0.2)'  // Warna latar belakang data Beasiswa BUMN
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)', // Warna border data Beasiswa Akademik
                    'rgba(54, 162, 235, 1)', // Warna border data Beasiswa Non-Akademik
                    'rgba(75, 192, 192, 1)'  // Warna border data Beasiswa BUMN
                ],
                borderWidth: 2 // Ketebalan garis pada grafik
            }]
        },
        options: {
            scales: {
                // Opsi sumbu Y dimulai dari 0
                y: {
                    beginAtZero: true
                }
            },
            plugins: {
                legend: {
                    labels: {
                        font: {
                            family: 'Poppins', // Mengubah font label legenda menjadi Poppins
                            size: 14 // Ukuran font label legenda
                        }
                    }
                },
                tooltip: {
                    bodyFont: {
                        family: 'Poppins', // Mengubah font tooltip menjadi Poppins
                        size: 14 // Ukuran font tooltip
                    }
                }
            }
        }
    });

</script>
@endsection
