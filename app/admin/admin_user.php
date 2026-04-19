<?php

    $laman = 'Users';
    include '../../assets/layout/admin/header.php';

?>

    <!-- Dashboard Main -->
    <main class="overflow-auto" style="flex:1;">
        

        <!-- Actions -->
        <section class="mb-4" aria-label="Dashboard Actions">
            <h5>Actions</h5>
            <div class="d-flex flex-wrap gap-2">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="bi bi-person-plus me-1"></i>Add User</button>
            <button class="btn btn-secondary"><i class="bi bi-file-earmark-text me-1"></i>Generate Report</button>
            <button class="btn btn-success"><i class="bi bi-download me-1"></i>Export</button>
            <button class="btn btn-danger"><i class="bi bi-trash me-1"></i>Delete</button>
            </div>
        </section>

        <!-- Table Data Dummy -->
        <section aria-label="Recent Users Table">
            <h5>Recent Users</h5>
            <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>John Doe</td>
                    <td>john@example.com</td>
                    <td>Admin</td>
                    <td><span class="badge bg-success">Active</span></td>
                    <td>
                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="bi bi-pencil me-2"></i>Edit</button>
                    <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash me-2"></i>Delete</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jane Smith</td>
                    <td>jane@example.com</td>
                    <td>User</td>
                    <td><span class="badge bg-secondary">Inactive</span></td>
                    <td>
                    <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil me-2"></i>Edit</button>
                    <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash me-2"></i>Delete</button>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
        </section>

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
                            <input type="number" name="nip" id="floatingInput" class="form-control" placeholder="NIP" required>
                            <label for="floatingInput">NIP</label>
                        </div>

                        <div class="form-floating mb-2">
                            <input type="text" name="nama" id="floatingInput" class="form-control" placeholder="Nama" required>
                            <label for="floatingInput">Nama</label>
                        </div>

                        <div class="form mb-2">
                            <label for="almt">Alamat</label>
                            <textarea name="alamat" id="almt" class="form-control" placeholder="Alamat" required></textarea>
                        </div>

                        <div class="form-group mb-2">
                            <label for="jenis_kelamin">Jenis Kelamin</label> <br>
                            <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Pria"> Laki - Laki
                            <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Wanita"> Perempuan
                        </div>

                        <div class="form-group mb-2">
                            <label for="agama">Agama</label>
                            <select name="agama" id="agama" class="form-control" required>
                            <option>-- Pilih --</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>

                        <div class="form-group mb-2">
                            <label for="foto"><b>Foto</b></label><br>
                            <div class="form-control">
                            <label for="foto">Pilih gambar...</label>
                            <input type="file" class="form-control" id="foto" name="foto" onchange="previewImg()" required>
                            </div>
                        </div>

                        <div class="form-floating mb-2">
                            <input type="email" name="email" id="floatingInput" class="form-control" placeholder="Email" required>
                            <label for="floatingInput">Email</label>
                        </div>

                        <div class="form-floating mb-2">
                            <input type="text" name="username" id="floatingInput" class="form-control" placeholder="Username" required>
                            <label for="floatingInput">Username</label>
                        </div>

                        <div class="form-floating mb-2">
                            <input type="password" name="password" id="floatingInput" class="form-control" placeholder="Password" required>
                            <label for="floatingInput">Password</label>
                        </div>

                        <div class="form-group mb-2">
                            <label for="level">Level</label>
                            <select name="level" id="level" class="form-control" required>
                            <option>-- Pilih --</option>
                            <option value="Admin">Admin</option>
                            <option value="Guru">Guru</option>
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
                <?php //foreach ($data_guru as $x) : ?>
                <div class="modal fade" id="modalEdit<?//= $x['id_guru']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ubah <?//= $subtitle; ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"/>
                        </div>

                        <div class="modal-body">

                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_guru" value="<?//= $x['id_guru']; ?>">

                            <div class="form-floating mb-3">
                                <input type="text" name="nip" id="floatingInput" class="form-control" placeholder="NIP" value="<?//= $x['nip']; ?>" required>
                                <label for="floatingInput">NIP</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" name="nama" id="floatingInput" class="form-control" placeholder="Nama" value="<?//= $x['nama']; ?>" required>
                                <label for="floatingInput">Nama</label>
                            </div>

                            <div class="form-floating mb-2">
                                <textarea name="alamat" id="floatingInput" class="form-control" placeholder="" required><?//= $x['alamat']; ?></textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="floatingInput">Jenis Kelamin</label><br>
                                <input type="radio" name="jenis_kelamin" id="floatingInput" value="Pria" <?php// if($x['jenis_kelamin'] == 'Pria') print 'checked'; ?> > Laki - Laki
                                <input type="radio" name="jenis_kelamin" id="floatingInput" value="Wanita" <?php// if($x['jenis_kelamin'] == 'Wanita') print 'checked'; ?> > Perempuan
                            </div>

                            <div class="form-group mb-3">
                                <label for="floatingInput">Agama</label>
                                <select name="agama" id="agama" class="form-control" required>
                                <option value="Islam" <?//= $x['agama'] == 'Islam' ? 'selected' : null ; ?> >Islam</option>
                                <option value="Kristen" <?//= $x['agama'] == 'Kristen' ? 'selected' : null ; ?> >Kristen</option>
                                <option value="Hindhu" <?//= $x['agama'] == 'Hindhu' ? 'selected' : null ; ?> >Hindhu</option>
                                <option value="Budha" <?//= $x['agama'] == 'Budha' ? 'selected' : null ; ?> >Budha</option>
                                <option value="Protestan" <?//= $x['agama'] == 'Protestan' ? 'selected' : null ; ?> >Protestan</option>
                                <option value="Konghuchu" <?//= $x['agama'] == 'Konghuchu' ? 'selected' : null ; ?> >Konghuchu</option>
                                </select>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="email" name="email" id="floatingInput" class="form-control" placeholder="Email" value="<?= $x['email']; ?>" required>
                                <label for="floatingInput">Email</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" name="username" id="floatingInput" class="form-control" placeholder="Username" value="<?= $x['username']; ?>" required>
                                <label for="floatingInput">Username</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="password" name="password" id="floatingInput" class="form-control" placeholder="Password" required>
                                <label for="floatingInput">Password</label>
                            </div>

                            <div class="form-group mb-3">
                                <label for="level">Level</label>
                                <select name="level" id="level" class="form-control" required>
                                <option value="Admin" <?//= $x['level'] == 'Admin' ? 'selected' : null ; ?> >Admin</option>
                                <option value="Guru" <?//= $x['level'] == 'Guru' ? 'selected' : null ; ?> >Guru</option>
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
                <?php// endforeach; ?>
            <!-- /Modal Ubah AKun -->

            <!-- Modal Hapus Akun -->
                <?php// foreach ($data_guru as $x) : ?>
                <div class="modal fade" id="modalHapus<?= $x['id_guru']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Hapus <?//= $subtitle; ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"/>
                            </div>

                            <div class="modal-body">
                                <form action="" method="post">
                                <input type="hidden" name="id_guru" value="<?//= $x['id_guru']; ?>">
                                <input type="hidden" name="fotoLama" value="<?//= $x['foto']; ?>">
                                <p>Yakin Ingin Menghapus <?//= $subtitle; ?> : <?//= $x['nama']; ?>.?</p>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                                <button type="submit" class="btn btn-danger" name="hapus">Hapus</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <?php //endforeach; ?>
            <!-- /Modal Hapus Akun -->
            
        </section>
        <!-- /Modal Akun -->

    </main>

<?php

    include '../../assets/layout/admin/footer.php';

?>