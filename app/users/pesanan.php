<?php

  session_start();

  $title = 'Pemesanan Konveksi';
  $halmut = './';
  $halpem = 'pesanan.php';

  include '../../assets/layout/users/header.php';

?>



<main class="container mb-5">

  <section aria-label="Judul">
    
    <div class="p-4 p-md-5 mb-4 mt-5 bg-body rounded shadow-sm">
    <div class="row align-items-center">
      <div class="col-md-8">
        <h2>Pesan <?= $_GET['produk'] ?> Sekarang</h2>
        <p class="text-muted">Melayani kaos, hoodie, jaket, dan kemeja dengan kualitas terbaik.</p>
      </div>

      <!-- <div class="col-md-4 text-md-end">
        <span class="badge bg-success fs-6">Minimal Order: 12 pcs</span>
      </div> -->

    </div>
  </div>

  </section>
  
  <section aria-label="Form Pemesanan">
  
      <div class="row g-4">

        <!-- FORM -->
        <div class="col-lg-7">
          <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body p-4">

              <!-- HEADER -->
              <div class="mb-4">
                <h4 class="fw-bold mb-1">
                  <i class="bi bi-clipboard2-check me-2"></i>
                  Form Pemesanan
                </h4>
                <p class="text-muted small mb-0">
                  Lengkapi data berikut untuk melakukan pemesanan.
                </p>
              </div>

              <form method="POST" enctype="multipart/form-data">

                <!-- DATA PEMESAN -->
                <div class="mb-4">
                  <h6 class="fw-semibold mb-3">
                    <i class="bi bi-person-circle me-2"></i>Data Pemesan
                  </h6>

                  <div class="row g-3">
                    <div class="col-md-6">
                      <label class="form-label fw-medium">Nama Lengkap</label>
                      <input type="text" name="nama" class="form-control rounded-3" placeholder="Masukkan nama" required>
                    </div>

                    <div class="col-md-6">
                      <label class="form-label fw-medium">No HP</label>
                      <input type="number" name="hp" class="form-control rounded-3" placeholder="08xxxxxxxxxx" required>
                    </div>

                    <div class="col-12">
                      <label class="form-label fw-medium">Alamat</label>
                      <textarea name="alamat" class="form-control rounded-3" rows="3" placeholder="Masukkan alamat lengkap"></textarea>
                    </div>
                  </div>
                </div>

                <!-- DETAIL PESANAN -->
                <div class="mb-4">
                  <h6 class="fw-semibold mb-3">
                    <i class="bi bi-bag-check me-2"></i>Detail Pesanan
                  </h6>

                  <div class="row g-3">

                    <div class="col-md-6">
                      <label class="form-label fw-medium">Bahan</label>
                      <select class="form-select rounded-3">
                        <option selected disabled>Pilih Bahan</option>
                        <option>Cotton Combed</option>
                        <option>Polyester</option>
                        <option>Fleece</option>
                      </select>
                    </div>

                  </div>
                </div>

                <!-- DESIGN -->
                <div class="mb-4">
                  <h6 class="fw-semibold mb-3">
                    <i class="bi bi-palette me-2"></i>Design
                  </h6>

                  <div class="row g-3">

                    <div class="col-md-6">
                      <button 
                        type="button"
                        class="btn btn-outline-primary w-100 rounded-3 py-3"
                        data-bs-toggle="modal"
                        data-bs-target="#modalUpload">

                        <i class="bi bi-upload fs-5 d-block mb-2"></i>
                        Upload Design
                      </button>
                    </div>

                    <div class="col-md-6">
                      <button 
                        type="button"
                        class="btn btn-outline-dark w-100 rounded-3 py-3"
                        data-bs-toggle="modal"
                        data-bs-target="#modalPilih">

                        <i class="bi bi-images fs-5 d-block mb-2"></i>
                        Pilih Design
                      </button>
                    </div>

                  </div>
                </div>

                 <div class="card border-0 shadow-sm p-4 rounded-4">

                        <!-- JUDUL -->
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-rulers me-2"></i>
                            <h5 class="fw-bold mb-0">Rincian Ukuran</h5>
                        </div>

                        <!-- SUBTITLE -->
                        <p class="text-muted small mb-4">
                            Masukkan jumlah per ukuran (total min. 24 pcs)
                        </p>

                        <!-- FORM UKURAN -->
                        <div class="row g-3">

                            <!-- S -->
                            <div class="col">
                                <label class="form-label fw-semibold">S</label>
                                <input type="number" class="form-control text-center rounded-4" value="0" min="0">
                            </div>

                            <!-- M -->
                            <div class="col">
                                <label class="form-label fw-semibold">M</label>
                                <input type="number" class="form-control text-center rounded-4" value="0" min="0">
                            </div>

                            <!-- L -->
                            <div class="col">
                                <label class="form-label fw-semibold">L</label>
                                <input type="number" class="form-control text-center rounded-4" value="0" min="0">
                            </div>

                            <!-- XL -->
                            <div class="col">
                                <label class="form-label fw-semibold">XL</label>
                                <input type="number" class="form-control text-center rounded-4" value="0" min="0">
                            </div>

                            <!-- XXL -->
                            <div class="col">
                                <label class="form-label fw-semibold">XXL</label>
                                <input type="number" class="form-control text-center rounded-4" value="0" min="0">
                            </div>

                            <!-- XXXL -->
                            <div class="col">
                                <label class="form-label fw-semibold">XXXL</label>
                                <input type="number" class="form-control text-center rounded-4" value="0" min="0">
                            </div>

                        </div>

                    </div>

                <!-- CATATAN -->
                <div class="mb-4">
                  <label class="form-label fw-medium">Catatan Tambahan</label>
                  <textarea 
                    class="form-control rounded-3" 
                    rows="3"
                    placeholder="Contoh: warna hitam, sablon depan belakang, dll"></textarea>
                </div>

                <!-- BUTTON -->
                <button class="btn btn-success w-100 py-3 rounded-3 fw-semibold">
                  <i class="bi bi-cart-check me-2"></i>
                  Pembayaran & Konfirmasi
                </button>

              </form>

            </div>
          </div>
        </div>

        <!-- SIDEBAR -->
        <div class="col-lg-5">

          <!-- ESTIMASI -->
          <div class="card border-0 shadow-sm rounded-4 mb-4">
            <div class="card-body p-4">

              <div class="d-flex align-items-center mb-3">
                <div class="bg-success bg-opacity-10 text-success rounded-3 p-2 me-3">
                  <i class="bi bi-cash-stack fs-5"></i>
                </div>

                <div>
                  <h5 class="fw-bold mb-0">Estimasi Harga</h5>
                  <small class="text-muted">Harga per pcs</small>
                </div>
              </div>

              <ul class="list-group list-group-flush">

                <li class="list-group-item px-0 d-flex justify-content-between align-items-center">
                  <span>Kaos</span>
                  <span class="badge bg-light text-dark">Rp 50k</span>
                </li>

                <li class="list-group-item px-0 d-flex justify-content-between align-items-center">
                  <span>Kemeja</span>
                  <span class="badge bg-light text-dark">Rp 80k</span>
                </li>

                <li class="list-group-item px-0 d-flex justify-content-between align-items-center">
                  <span>Hoodie</span>
                  <span class="badge bg-light text-dark">Rp 120k</span>
                </li>

              </ul>

              <div class="alert alert-light border mt-3 mb-0 small">
                Harga dapat berubah tergantung jumlah pesanan dan tingkat kesulitan desain.
              </div>

            </div>
          </div>

          <!-- KEUNGGULAN -->
          <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body p-4">

              <div class="d-flex align-items-center mb-3">
                <div class="bg-warning bg-opacity-10 text-warning rounded-3 p-2 me-3">
                  <i class="bi bi-stars fs-5"></i>
                </div>

                <div>
                  <h5 class="fw-bold mb-0">Kenapa Pilih Kami?</h5>
                  <small class="text-muted">Keunggulan layanan kami</small>
                </div>
              </div>

              <ul class="list-group list-group-flush">

                <li class="list-group-item px-0 border-0">
                  <i class="bi bi-check-circle-fill text-success me-2"></i>
                  Bahan Premium
                </li>

                <li class="list-group-item px-0 border-0">
                  <i class="bi bi-check-circle-fill text-success me-2"></i>
                  Jahitan Rapi
                </li>

                <li class="list-group-item px-0 border-0">
                  <i class="bi bi-check-circle-fill text-success me-2"></i>
                  Bisa Custom Design
                </li>

                <li class="list-group-item px-0 border-0">
                  <i class="bi bi-check-circle-fill text-success me-2"></i>
                  Harga Terjangkau
                </li>

              </ul>

            </div>
          </div>

        </div>

      </div>

  </section>

  <section aria-label="Modal">
    
    <!-- Modal Tambah Akun -->
        <div class="modal fade" id="modalUpload" tabindex="-1" aria-labelledby="ModalUpload" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">

                    <div class="modal-header bg-success">
                        <h5 class="modal-title" id="modalUpload">Upload Design</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"/>
                    </div>

                  <div class="modal-body">

                      <form action="" method="post" enctype="multipart/form-data">

                          <!-- Tampak Depan -->
                          <div class="card mb-3 border-0 shadow-sm">
                              <div class="card-body">
                                  <h6 class="mb-3">
                                      <i class="bi bi-image me-2"></i>Tampak Depan
                                  </h6>

                                  <div class="mb-2">
                                      <label class="form-label">Upload Gambar</label>
                                      <input type="file" 
                                            name="tampak_depan" 
                                            class="form-control" 
                                            accept="image/*" 
                                            required>
                                  </div>

                                  <div class="form-floating">
                                      <textarea name="catatan_depan"
                                                class="form-control"
                                                placeholder="Catatan Tampak Depan"
                                                style="height: 100px"></textarea>
                                      <label>Catatan Tampak Depan</label>
                                  </div>
                              </div>
                          </div>

                          <!-- Tampak Belakang -->
                          <div class="card mb-3 border-0 shadow-sm">
                              <div class="card-body">
                                  <h6 class="mb-3">
                                      <i class="bi bi-image me-2"></i>Tampak Belakang
                                  </h6>

                                  <div class="mb-2">
                                      <label class="form-label">Upload Gambar</label>
                                      <input type="file" 
                                            name="tampak_belakang" 
                                            class="form-control" 
                                            accept="image/*" 
                                            required>
                                  </div>

                                  <div class="form-floating">
                                      <textarea name="catatan_belakang"
                                                class="form-control"
                                                placeholder="Catatan Tampak Belakang"
                                                style="height: 100px"></textarea>
                                      <label>Catatan Tampak Belakang</label>
                                  </div>
                              </div>
                          </div>

                          <!-- Tampak Kanan -->
                          <div class="card mb-3 border-0 shadow-sm">
                              <div class="card-body">
                                  <h6 class="mb-3">
                                      <i class="bi bi-image me-2"></i>Tampak Kanan
                                  </h6>

                                  <div class="mb-2">
                                      <label class="form-label">Upload Gambar</label>
                                      <input type="file" 
                                            name="tampak_kanan" 
                                            class="form-control" 
                                            accept="image/*" 
                                            required>
                                  </div>

                                  <div class="form-floating">
                                      <textarea name="catatan_kanan"
                                                class="form-control"
                                                placeholder="Catatan Tampak Kanan"
                                                style="height: 100px"></textarea>
                                      <label>Catatan Tampak Kanan</label>
                                  </div>
                              </div>
                          </div>

                          <!-- Tampak Kiri -->
                          <div class="card mb-3 border-0 shadow-sm">
                              <div class="card-body">
                                  <h6 class="mb-3">
                                      <i class="bi bi-image me-2"></i>Tampak Kiri
                                  </h6>

                                  <div class="mb-2">
                                      <label class="form-label">Upload Gambar</label>
                                      <input type="file" 
                                            name="tampak_kiri" 
                                            class="form-control" 
                                            accept="image/*" 
                                            required>
                                  </div>

                                  <div class="form-floating">
                                      <textarea name="catatan_kiri"
                                                class="form-control"
                                                placeholder="Catatan Tampak Kiri"
                                                style="height: 100px"></textarea>
                                      <label>Catatan Tampak Kiri</label>
                                  </div>
                              </div>
                          </div>

                          <!-- Logos -->
                          <div class="card mb-3 border-0 shadow-sm">
                              <div class="card-body">

                                  <h6 class="mb-3">
                                      <i class="bi bi-image me-2"></i>Logo
                                  </h6>

                                  <div class="mb-2">
                                      <label class="form-label">Upload Gambar</label>

                                      <input type="file"
                                            name="logo[]"
                                            class="form-control"
                                            accept="image/*"
                                            multiple
                                            required>
                                  </div>

                                  <div class="form-floating">
                                      <textarea name="catatan_logo"
                                                class="form-control"
                                                placeholder="Catatan Logo"
                                                style="height: 100px"></textarea>

                                      <label>Catatan Logo</label>
                                  </div>

                              </div>
                          </div>

                  </div>

                  <div class="modal-footer">
                      <button type="submit" name="tambah" class="btn btn-success">
                          <i class="bi bi-floppy me-1"></i>
                          Simpan
                      </button>
                      </form>
                  </div>
                    
                </div>
            </div>
        </div>
    <!-- /Modal Tambah Akun -->

  </section>

</main>

<?php

  include '../../assets/layout/users/footer.php';

?>