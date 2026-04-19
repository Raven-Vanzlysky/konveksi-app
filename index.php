<?php

    $title = 'Landing Page Konveksi';
    $halmut = './';
    $halpem = 'app/users/';

    include 'assets/layout/users/header.php';

?>

        <!-- MAIN CONTENT -->
        <main>

            <!-- HERO -->
            <section class="py-4 bg-body-tertiary" aria-label="Hero Konveksi">
                <div class="container">
                    <div id="heroCarousel" class="carousel slide carousel-fade rounded shadow overflow-hidden"
                        data-bs-ride="carousel" data-bs-interval="4000" data-bs-pause="false" data-bs-wrap="true">

                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0"
                                class="active"></button>
                            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
                        </div>

                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <img src="assets/img/1.jpeg" class="d-block w-100" style="height:450px; object-fit:cover;"
                                    alt="Produksi Konveksi">
                                <div class="carousel-caption d-flex flex-column justify-content-center h-100 text-light">
                                    <h1 class="fw-bold">Jasa Konveksi Berkualitas</h1>
                                    <p class="lead">Melayani pembuatan kaos, hoodie, dan seragam custom</p>
                                    <a href="#katalog" class="btn btn-primary btn-lg">Lihat Katalog</a>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="assets/img/2.jpeg" class="d-block w-100" style="height:450px; object-fit:cover;"
                                    alt="Bahan Premium">
                                <div class="carousel-caption d-flex flex-column justify-content-center h-100 text-light">
                                    <h2 class="fw-bold">Bahan Premium</h2>
                                    <p class="lead">Cotton combed, fleece, dan bahan berkualitas lainnya</p>
                                    <a href="#katalog" class="btn btn-success btn-lg">Pesan Sekarang</a>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="assets/img/3.jpeg" class="d-block w-100" style="height:450px; object-fit:cover;"
                                    alt="Produksi Cepat">
                                <div class="carousel-caption d-flex flex-column justify-content-center h-100 text-light">
                                    <h2 class="fw-bold">Produksi Cepat & Terpercaya</h2>
                                    <p class="lead">Cocok untuk komunitas, sekolah, dan perusahaan</p>
                                    <a href="#kontak" class="btn btn-warning btn-lg">Hubungi Kami</a>
                                </div>
                            </div>

                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>

                    </div>
                </div>
            </section>

            <!-- KATALOG -->
            <section id="katalog" class="py-5">
                <div class="container">
                    <h2 class="text-center mb-4 fw-bold">Katalog Produk</h2>
                    <div class="row g-4">

                        <div class="col-md-4">
                            <div class="card h-100">
                                <img src="assets/img/1.jpeg" class="card-img-top" alt="Kaos Custom">
                                <div class="card-body">
                                    <h5 class="card-title">Kaos Custom</h5>
                                    <p class="card-text">Bahan cotton combed 24s & 30s.</p>
                                    <span class="badge bg-success">Mulai 65K</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card h-100">
                                <img src="assets/img/2.jpeg" class="card-img-top" alt="Hoodie Custom">
                                <div class="card-body">
                                    <h5 class="card-title">Hoodie</h5>
                                    <p class="card-text">Bahan fleece premium.</p>
                                    <span class="badge bg-success">Mulai 120K</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card h-100">
                                <img src="assets/img/3.jpeg" class="card-img-top" alt="Kemeja Seragam">
                                <div class="card-body">
                                    <h5 class="card-title">Kemeja Seragam</h5>
                                    <p class="card-text">Custom warna dan bordir logo.</p>
                                    <span class="badge bg-success">Mulai 95K</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- KEUNGGULAN -->
            <section id="keunggulan" class="bg-body-tertiary py-5">
                <div class="container text-center">
                    <h2 class="mb-4 fw-bold">Kenapa Pilih Kami?</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <h5 class="fw-bold">Bahan Premium</h5>
                            <p>Kualitas terjamin dan nyaman digunakan.</p>
                        </div>
                        <div class="col-md-4">
                            <h5 class="fw-bold">Harga Terjangkau</h5>
                            <p>Cocok untuk komunitas dan perusahaan.</p>
                        </div>
                        <div class="col-md-4">
                            <h5 class="fw-bold">Pengerjaan Cepat</h5>
                            <p>Estimasi produksi 3–7 hari kerja.</p>
                        </div>
                    </div>
                </div>
            </section>

        </main>

<?php

    include 'assets/layout/users/footer.php';

?>