<?php

    // Halaman
    $laman = 'Pengguna';

    // Header
    include '../../assets/layout/admin/header.php';

    // Data Akun
    if(isset($_POST['cari'])) 
    {
        $kata_cari = htmlspecialchars(strip_tags($_POST['kata_cari']));
        $data_akun = select("SELECT * FROM akun WHERE CONCAT(nama, email, alamat, role) LIKE '%$kata_cari%' ORDER BY nama ASC");
    } else {
        $data_akun = select("SELECT * FROM akun");
    }

    // jika tombol tambah di tekan jalankan script berikut
    if (isset($_POST['tambah'])) {
        if (tambah_akun($_POST) > 0) {
        $popup = true;
        $statusPopup = 'Berhasil';
        $warnaPopup = 'success';
        $popupEksekusi = 'ditambahkan';
        } else {
            $popup = true;
            $statusPopup = 'Gagal';
            $warnaPopup = 'danger';
            $popupEksekusi = 'ditambahkan';
        }
    }

    // jika tombol hapus di tekan jalankan script berikut
    if (isset($_POST['ubah'])) {
        if (ubah_akun($_POST) > 0) {
        $popup = true;
        $statusPopup = 'Berhasil';
        $warnaPopup = 'success';
        $popupEksekusi = 'diedit';
        } else {
            $popup = true;
            $statusPopup = 'Gagal';
            $warnaPopup = 'danger';
            $popupEksekusi = 'diedit';
        }
    }

    // jika tombol hapus di tekan jalankan script berikut
    if (isset($_POST['hapus'])) {
        if (hapus_akun($_POST) > 0) {
        $popup = true;
        $statusPopup = 'Berhasil';
        $warnaPopup = 'success';
        $popupEksekusi = 'dihapus';
        } else {
            $popup = true;
            $statusPopup = 'Gagal';
            $warnaPopup = 'danger';
            $popupEksekusi = 'dihapus';
        }
    }
    
?>

    <!-- Dashboard Main -->
    <main class="overflow-auto" style="flex:1;">
        
        <!-- Popup -->
        <section aria-label="Popup">
            <?php if ($popup == true) :?>
                <div class="modal fade show" style="display:block;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg-<?= $warnaPopup;?>">
                                <h5 class="modal-title"><?= $statusPopup;?></h5>
                            </div>
                            <div class="modal-body">
                                <i class="bi bi-check2-circle me-2"></i>Akun <?= $statusPopup;?> <?= $popupEksekusi;?>!
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-<?= $warnaPopup;?>" data-bs-dismiss="modal" onclick="klik()">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif;?>
        </section>
        <!-- .Popup -->

        <!-- Table Data Akun -->
        <section aria-label="Users Table">

            <!-- Desktop View -->
            <div class="d-none d-md-block">
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-md-8 col-lg-12">
                    <div class="card animate__animated animate__zoomInDown">

                        <!-- .card-header -->
                        <div class="card-header">

                            <div class="card-wrap d-flex justify-content-between align-items-center">
                                <h3 class="card-title"><?= $laman; ?></h3>

                                <form class="form" action="" method="post">
                                <div class="input-group">
                                    <input type="search" class="form-control me-3" name="kata_cari" placeholder="Cari..." aria-label="Search" value="<?php if(isset($_POST['cari'])) { echo $_POST['kata_cari']; } ?>">
                                    <button class="btn btn-outline-info me-1" type="submit" name="cari"><i class="bi bi-search"></i></button>
                                </div>
                                </form>
                            </div>

                            <button type="button" class="btn btn-primary btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#modalTambah">
                            <i class="bi bi-person-plus me-1"></i>
                                Tambah
                            </button>  

                            <button class="btn btn-sm btn-secondary mb-2"><i class="bi bi-file-earmark-text me-1"></i>Generate Report</button>
                            <button class="btn btn-sm btn-success mb-2"><i class="bi bi-download me-1"></i>Export</button>

                            </div>
                        <!-- /.card-header -->

                        <!-- .card-body -->
                        <div class="card-body overflow-auto" style="max-height: 400px;">

                        <div class="table-responsive">

                            <table id="table" class="table table-sm table-bordered border-dark table-hover">
                            <thead class="text-center">
                                <tr>
                                <th scope="col" class="bg-success">#</th>
                                <th scope="col" class="bg-success">Nama</th>
                                <th scope="col" class="bg-success">Username</th>
                                <th scope="col" class="bg-success">Email</th>
                                <th scope="col" class="bg-success">No HP</th>
                                <th scope="col" class="bg-success">Alamat</th>
                                <th scope="col" class="bg-success">Role</th>
                                <th scope="col" class="bg-success">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($data_akun as $akun) : ?>
                                    <tr style="height: 10px;">
                                    <td scope="row" class="text-center"><?= $no++; ?></td>
                                    <td><?= $akun['nama']; ?></td>
                                    <td><?= $akun['username']; ?></td>
                                    <td><?= $akun['email']; ?></td>
                                    <td><?= $akun['no_hp']; ?></td>
                                    <td><?= $akun['alamat']; ?></td>
                                    <td class="text-center"><span class="badge bg-<?= ($akun['role'] == 'Admin') ? 'primary' : 'success';?>"><?= $akun['role']; ?></span></td>
                                    <td class="text-center">
                                    
                                        <button type="button" class="btn btn-sm btn-outline-primary mb-1" data-bs-toggle="modal" data-bs-target="#modalUbah<?= $akun['id_akun']; ?>">
                                        <i class="bi bi-pen"></i>
                                        Ubah
                                        </button>

                                        <button type="button" class="btn btn-sm btn-outline-danger mb-1" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $akun['id_akun']; ?>">
                                        <i class="bi bi-trash"></i>
                                        Hapus
                                        </button>
                                        
                                    </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            </table>

                        </div>

                        </div>
                        <!-- /.card-body -->

                    </div>
                    </div>
                </div>
            </div>

            <!-- Mobile View -->
            <div class="d-block d-md-none">
                <?php foreach ($data_akun as $akun) : ?>
                <div class="card mb-2 shadow-sm">
                    <div class="card-body p-2">

                    <div class="d-flex justify-content-between">
                        <h6 class="mb-1"><?= $akun['nama'];?></h6>
                        <span class="badge bg-<?php echo ($akun['role'] == 'Admin') ? 'primary' : 'success';?>">
                        <?= $akun['role'];?>
                        </span>
                    </div>

                    <small class="text-muted d-block">Username: <?= $akun['username'];?></small>
                    <small class="text-muted d-block">Email: <?= $akun['email'];?></small>
                    <small class="text-muted d-block">No HP: <?= $akun['no_hp'];?></small>
                    <small class="text-muted d-block">Alamat: <?= $akun['alamat'];?></small>

                    <div class="mt-2 d-flex gap-2">
                        <button class="btn btn-sm btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#modalEdit">
                        <i class="bi bi-pencil"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger w-100" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $akun['id_akun']; ?>">
                        <i class="bi bi-trash"></i>
                        </button>
                    </div>

                    </div>
                </div>
                <?php endforeach;?>
            </div>

        </section>
        <!-- .Tabel Data Akun -->

        <!-- Modal Akun -->
        <section class="modal-akun">

            <!-- Modal Tambah Akun -->
                <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"/>
                            </div>

                            <div class="modal-body">

                                <form action="" method="post" enctype="multipart/form-data">

                                <div class="form-floating mb-2">
                                    <input type="text" name="nama" id="floatingInput" class="form-control" placeholder="Nama" required>
                                    <label for="floatingInput">Nama</label>
                                </div>

                                <div class="form-floating mb-2">
                                    <input type="text" name="username" id="floatingInput" class="form-control" placeholder="Username" required>
                                    <label for="floatingInput">Username</label>
                                </div>

                                <div class="form-floating mb-2">
                                    <input type="password" name="password" id="floatingInput" class="form-control" placeholder="Password" required>
                                    <label for="floatingInput">Password</label>
                                </div>

                                <div class="form-floating mb-2">
                                    <input type="email" name="email" id="floatingInput" class="form-control" placeholder="Email" required>
                                    <label for="floatingInput">Email</label>
                                </div>
                                
                                <div class="form-floating mb-2">
                                    <input type="number" name="no_hp" id="floatingInput" class="form-control" placeholder="Nomor Handphone" required>
                                    <label for="floatingInput">Nomor Handphone</label>
                                </div>
                                
                                <div class="form mb-2">
                                    <textarea name="alamat" class="form-control" placeholder="Alamat" required></textarea>
                                </div>

                                <div class="form-group mb-2">
                                    <label for="Role">Role</label>
                                    <select name="role" id="role" class="form-control" required>
                                    <option>-- Pilih --</option>
                                    <option value="Admin">Admin</option>
                                    <option value="User">User</option>
                                    </select>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            <!-- /Modal Tambah Akun -->

            <!-- Modal Ubah Akun -->
                <?php foreach ($data_akun as $akun) : ?>
                <div class="modal fade" id="modalUbah<?= $akun['id_akun']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ubah <?= $laman; ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"/>
                        </div>

                        <div class="modal-body">

                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_akun" value="<?= $akun['id_akun']; ?>">

                            <div class="form-floating mb-3">
                                <input type="text" name="nama" id="floatingInput" class="form-control" placeholder="Nama" value="<?= $akun['nama']; ?>" required>
                                <label for="floatingInput">Nama</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" name="username" id="floatingInput" class="form-control" placeholder="Username" value="<?= $akun['username']; ?>" required>
                                <label for="floatingInput">Username</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="password" name="password" id="floatingInput" class="form-control" placeholder="Password" required>
                                <label for="floatingInput">Password</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="email" name="email" id="floatingInput" class="form-control" placeholder="Email" value="<?= $akun['email']; ?>" required>
                                <label for="floatingInput">Email</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="number" name="no_hp" id="floatingInput" class="form-control" placeholder="Nomor Handphone" value="<?= $akun['no_hp']; ?>" required>
                                <label for="floatingInput">Nomor Handphone</label>
                            </div>

                            <div class="form-floating mb-2">
                                <textarea name="alamat" id="floatingInput" class="form-control" placeholder="" required><?= $akun['alamat']; ?></textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="role">Role</label>
                                <select name="role" id="role" class="form-control" required>
                                <option value="Admin" <?= $akun['role'] == 'Admin' ? 'selected' : null ; ?> >Admin</option>
                                <option value="Guru" <?= $akun['role'] == 'Guru' ? 'selected' : null ; ?> >Guru</option>
                                </select>
                            </div>

                        </div>

                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
                        </form>
                        </div>

                    </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <!-- /Modal Ubah AKun -->

            <!-- Modal Hapus Akun -->
                <?php foreach ($data_akun as $akun) : ?>
                <div class="modal fade" id="modalHapus<?= $akun['id_akun']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Hapus <?= $laman; ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"/>
                            </div>

                            <div class="modal-body">
                                <form action="" method="post">
                                <input type="hidden" name="id_akun" value="<?= $akun['id_akun']; ?>">
                                <!-- <input type="hidden" name="fotoLama" value="<?//= $akun['foto']; ?>"> -->
                                <p>Yakin Ingin Menghapus <?= $laman; ?> : <?= $akun['nama']; ?>.?</p>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger" name="hapus">Hapus</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <!-- /Modal Hapus Akun -->
            
        </section>
        <!-- /Modal Akun -->

    </main>

<?php

    // Footer
    include '../../assets/layout/admin/footer.php';

?>