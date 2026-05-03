<?php

    // jika tombol buat di tekan jalankan script berikut
    if (isset($_POST['buatakun'])) {
        $result = daftar_akun_baru($_POST) > 0;

        $popup = true;
        $statusPopup = $result ? 'Berhasil' : 'Gagal';
        $warnaPopup = $result ? 'success' : 'danger';
        $iconPopup = $result ? 'check2-circle' : 'x-circle';
        $popupEksekusi = 'Ditambahkan';
    }

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <main class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">

                <div class="card shadow-sm">

                    <!-- Header -->
                    <div class="card-header text-center fw-bold">
                        Register Akun
                    </div>

                    <!-- Body (Scrollable) -->
                    <div class="card-body overflow-auto" style="max-height: 400px;">
                        
                        <form action="" method="post" enctype="multipart/form-data">

                            <div class="form-floating mb-2">
                                <input type="text" name="nama" id="floatingInput" class="form-control" minlength="5" placeholder="Nama" required>
                                <label for="floatingInput">Nama</label>
                            </div>

                            <div class="form-floating mb-2">
                                <input type="text" name="username" id="floatingInput" class="form-control" minlength="5" placeholder="Username" required>
                                <label for="floatingInput">Username</label>
                            </div>

                            <div class="form-floating mb-2">
                                <input type="password" name="password" id="floatingInput" class="form-control" minlength="5" placeholder="Password" required>
                                <label for="floatingInput">Password</label>
                            </div>

                            <div class="form-floating mb-2">
                                <input type="email" name="email" id="floatingInput" class="form-control" minlength="5" placeholder="Email" required>
                                <label for="floatingInput">Email</label>
                            </div>
                            
                            <div class="form-floating mb-2">
                                <input type="number" name="no_hp" id="floatingInput" class="form-control" minlength="12" placeholder="Nomor Handphone" required>
                                <label for="floatingInput">Nomor Handphone</label>
                            </div>
                            
                            <div class="form mb-2">
                                <textarea name="alamat" class="form-control" minlength="5" placeholder="Alamat" rows="3" required></textarea>
                            </div>

                            <!-- <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" required>
                                <label class="form-check-label">
                                    Saya setuju dengan syarat & ketentuan
                                </label>
                            </div> -->

                            
                        </div>
                        
                        <!-- Footer -->
                        <div class="card-footer text-center">
                            <button type="submit" name="buatakun" class="btn btn-primary w-100 mb-2">
                                Daftar
                            </button>
                            <small>
                                Sudah punya akun? <a href="login.php">Login</a>
                            </small>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </main>

</body>
</html>