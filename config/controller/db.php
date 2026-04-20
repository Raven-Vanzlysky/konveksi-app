<?php

  $db = mysqli_connect('127.0.0.1', 'root', '', 'konveksidb');

  include 'controller.php';

// cek koneksi
//   if (!$db) {
//       print 'gagal';
//   } else {
//       print 'berhasil';
//   }
