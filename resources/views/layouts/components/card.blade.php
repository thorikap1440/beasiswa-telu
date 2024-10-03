<!-- Cards Beasiswa -->
<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <!-- Card 1: Beasiswa Akademik -->
        <div class="col-lg-3">
            <div class="card" style="width: 19rem;">
                <!-- Gunakan atribut alt yang deskriptif untuk gambar -->
                <img src="{{ asset('/image/card1 1.png') }}" class="card-img-top border img-fluid" alt="Beasiswa Akademik">
                <div class="card-body">
                    <!-- Gunakan tag h5 untuk judul dengan class fw-bold  -->
                    <h5 class="card-title fw-bold">Beasiswa Akademik</h5>
                    <!-- Elemen paragraf digunakan untuk teks deskriptif -->
                    <p class="card-text fs-6">Bantuan pendidikan diberikan oleh Pemerintah kepada mahasiswa yang berprestasi.</p>
                    <!-- Pastikan tombol menggunakan class btn Bootstrap dan class data-bs-toggle untuk modals -->
                    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#akademikModal">Selengkapnya...</a>
                </div>
            </div>
        </div>

        <!-- Card 2: Beasiswa Non-Akademik -->
        <div class="col-lg-3">
            <div class="card" style="width: 19rem;">
                <img src="{{ asset('/image/card2.jpg') }}" class="card-img-top img-fluid" alt="Beasiswa Non-Akademik">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Beasiswa Non-Akademik</h5>
                    <p class="card-text fs-6">Beasiswa yang diberikan kepada mahasiswa yang memiliki di bidang olahraga atau seni.</p>
                    <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#nonAkademikModal">Selengkapnya...</a>
                </div>
            </div>
        </div>

        <!-- Card 3: Beasiswa BUMN -->
        <div class="col-lg-3">
            <div class="card" style="width: 19rem;">
                <img src="{{ asset('/image/card3.png') }}" class="card-img-top border img-fluid" alt="Beasiswa BUMN">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Beasiswa BUMN</h5>
                    <p class="card-text fs-6">Beasiswa yang di berikan kepada mahasiswa berprestasi namun kurang mampu secara finansial.</p>
                    <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#bumnModal">Selengkapnya...</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Cards Beasiswa -->

<!-- Modals -->
<!-- Modal untuk Beasiswa Akademik -->
<div class="modal fade" id="akademikModal" tabindex="-1" role="dialog" aria-labelledby="akademikModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="akademikModalLabel">Beasiswa Akademik</h5>
                <!-- Tombol close modal harus memiliki atribut aria-label untuk aksesibilitas -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Beasiswa Akademik diberikan kepada mahasiswa yang mencapai prestasi akademik yang sangat baik...</p>
                <h6>Syarat:</h6>
                <ul>
                    <!-- Gunakan list yang terstruktur untuk menampilkan syarat -->
                    <li>Mahasiswa aktif semester 1 sampai dengan 8</li>
                    <li>Memiliki IPK di atas 3</li>
                    <li>Melampirkan berkas pendukung yaitu Nilai Raport</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Modal untuk Beasiswa Non-Akademik -->
<div class="modal fade" id="nonAkademikModal" tabindex="-1" role="dialog" aria-labelledby="nonAkademikModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nonAkademikModalLabel">Beasiswa Non-Akademik</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Beasiswa Non-Akademik diberikan kepada individu yang menonjol di luar bidang akademis...</p>
                <h6>Syarat:</h6>
                <ul>
                    <li>Mahasiswa aktif semester 1 sampai dengan 8</li>
                    <li>Memiliki IPK di atas 3</li>
                    <li>Melampirkan berkas prestasi di luar akademik</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Modal untuk Beasiswa BUMN -->
<div class="modal fade" id="bumnModal" tabindex="-1" role="dialog" aria-labelledby="bumnModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bumnModalLabel">Beasiswa BUMN</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Beasiswa BUMN diberikan kepada mahasiswa berprestasi yang kurang mampu secara finansial...</p>
                <h6>Syarat:</h6>
                <ul>
                    <li>Mahasiswa aktif semester 1 sampai dengan 8</li>
                    <li>Memiliki IPK di atas 3</li>
                    <li>Melampirkan sertifikat pendukung sebagai bukti pencapaian pada suatu bidang</li>
                </ul>
            </div>
        </div>
    </div>
</div>
