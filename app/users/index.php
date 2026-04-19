<?php

  $title = 'Pemesanan Konveksi';
  $halmut = '../../';
  $halpem = './';

  include '../../assets/layout/users/header.php';

?>



<div class="container mb-5">

  <!-- HERO -->
  <div class="p-4 p-md-5 mb-4 mt-5 bg-body rounded shadow-sm">
    <div class="row align-items-center">
      <div class="col-md-8">
        <h2>Pesan Pakaian Custom Sekarang</h2>
        <p class="text-muted">Melayani kaos, hoodie, jaket, dan kemeja dengan kualitas terbaik.</p>
      </div>

      <!-- <div class="col-md-4 text-md-end">
        <span class="badge bg-success fs-6">Minimal Order: 12 pcs</span>
      </div> -->

    </div>
  </div>

  <div class="row g-4">

    <!-- FORM -->
    <div class="col-lg-7">
      <div class="card shadow-sm border-0">
        <div class="card-body">

          <h5 class="mb-3"><i class="bi bi-clipboard2 me-2"></i>Data Pemesan</h5>

          <form method="POST" enctype="multipart/form-data">
            
            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" required>
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">No HP</label>
                <input type="number" name="hp" class="form-control" required>
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label">Alamat</label>
              <textarea name="alamat" class="form-control" rows="2"></textarea>
            </div>

            <hr>

            <h5 class="mb-3"><i class="bi bi-pencil-square me-2"></i>Detail Pesanan</h5>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="form-label">Jenis</label>
                <select name="jenis" class="form-select">
                  <option>Kaos</option>
                  <option>Kemeja</option>
                  <option>Hoodie</option>
                  <option>Jaket</option>
                </select>
              </div>

              <div class="col-md-6 mb-3">
                <label class="form-label">Jumlah</label>
                <input type="number" name="jumlah" class="form-control" min="12">
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="form-label">Ukuran</label>
                <select class="form-select">
                  <option>S</option>
                  <option>M</option>
                  <option>L</option>
                  <option>XL</option>
                </select>
              </div>

              <div class="col-md-6 mb-3">
                <label class="form-label">Bahan</label>
                <select class="form-select">
                  <option>Cotton Combed</option>
                  <option>Polyester</option>
                  <option>Fleece</option>
                </select>
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label">Upload Desain</label>
              <input type="file" class="form-control">
            </div>

            <div class="mb-3">
              <label class="form-label">Catatan</label>
              <textarea class="form-control" rows="2"></textarea>
            </div>

            <button class="btn btn-success w-100">
              <i class="bi bi-cart-plus me-2"></i>Kirim Pesanan
            </button>

          </form>

        </div>
      </div>
    </div>

    <!-- SIDEBAR -->
    <div class="col-lg-5">

      <!-- ESTIMASI -->
      <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">
          <h5><i class="bi bi-cash-coin me-2"></i>Estimasi Harga</h5>

          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between">
              Kaos <span>Rp 50k</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              Kemeja <span>Rp 80k</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              Hoodie <span>Rp 120k</span>
            </li>
          </ul>

          <small class="text-muted">
            Harga tergantung jumlah & desain
          </small>
        </div>
      </div>

      <!-- KEUNGGULAN -->
      <div class="card shadow-sm border-0">
        <div class="card-body">
          <h5><i class="bi bi-star-fill"></i> Kenapa Pilih Kami?</h5>

          <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="bi bi-check2 me-2"></i>Bahan Premium</li>
            <li class="list-group-item"><i class="bi bi-check2 me-2"></i>Jahitan Rapi</li>
            <li class="list-group-item"><i class="bi bi-check2 me-2"></i>Bisa Custom Design</li>
            <li class="list-group-item"><i class="bi bi-check2 me-2"></i>Harga Terjangkau</li>
          </ul>
        </div>
      </div>

    </div>

  </div>
</div>

<?php

  include '../../assets/layout/users/footer.php';

?>