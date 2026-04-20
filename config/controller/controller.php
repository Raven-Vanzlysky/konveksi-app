<?php

    // Variabel
        $popup = false;
        $statusPopup = '';
        $warnaPopup = '';
        $popupEksekusi = '';
    // .Variabel

    // Pengecekan sedang berada di halaman mana (Untuk warna navigasi admin)
    function active($file, $laman) {
        return $laman == $file ? 'active' : '';
    }

    // Fungsi Read
    function select($query)
    {
        // panggil koneksi database
        global $db;

        $result = mysqli_query($db, $query);
        $rows = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    // Akun Section

        // Tambah Akun
        function tambah_akun($post)
        {
            global $db;

            $nama      = htmlspecialchars(strip_tags($post['nama']));
            $username  = htmlspecialchars(strip_tags($post['username']));
            $password  = htmlspecialchars(strip_tags($post['password']));
            $email     = htmlspecialchars(strip_tags($post['email']));
            $no_hp     = htmlspecialchars(strip_tags($post['no_hp']));
            $alamat    = htmlspecialchars(strip_tags($post['alamat']));
            $role     = htmlspecialchars(strip_tags($post['role']));
            
            // enkripsi password
            $password = password_hash($password, PASSWORD_DEFAULT);
            
            // query tambah data
            $query = "INSERT INTO akun VALUES(NULL, '$nama', '$username', '$password', '$email', '$no_hp', '$alamat', '$role')";
            
            mysqli_query($db, $query);
            
            return mysqli_affected_rows($db);
        }

        // Ubah Akun
        function ubah_akun($post)
        {
            global $db;
            
            $id        = htmlspecialchars(strip_tags($post['id_akun']));
            $nama      = htmlspecialchars(strip_tags($post['nama']));
            $username  = htmlspecialchars(strip_tags($post['username']));
            $password  = htmlspecialchars(strip_tags($post['password']));
            $email     = htmlspecialchars(strip_tags($post['email']));
            $no_hp     = htmlspecialchars(strip_tags($post['no_hp']));
            $alamat    = htmlspecialchars(strip_tags($post['alamat']));
            $role     = htmlspecialchars(strip_tags($post['role']));

            // enkripsi password
            $password = password_hash($password, PASSWORD_DEFAULT);
            
            // query ubah data
            $query = "UPDATE akun SET nama = '$nama', alamat = '$alamat', no_hp = '$no_hp', email = '$email', username = '$username', password = '$password', role = '$role' WHERE id_akun = $id";
            
            mysqli_query($db, $query);

            return mysqli_affected_rows($db);

        }

        // Hapus Akun
        function hapus_akun($post)
        {
            global $db;
            
            $id = strip_tags($post['id_akun']);
            //$fotoLama = strip_tags($post['fotoLama']);

            // Hapus Foto
            //$filePoto = '../assets/client/foto/' . $fotoLama;

            // if (file_exists($filePoto)) {
            // if (unlink($filePoto)) {
            //     print "Foto Berhasil Di Hapus";
            // } else {
            //     print "Gagal Menghapus Foto";
            // }
            // } else {
            // print "Foto Tidak Di temukan";
            // }
            
            // query hapus data mapel
            $query = "DELETE FROM akun WHERE id_akun = $id";
            
            mysqli_query($db, $query);
            
            return mysqli_affected_rows($db);
        }

    // .Akun Section

?>