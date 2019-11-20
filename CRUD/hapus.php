<?php

include 'koneksi.php';

$email = $_GET['email'];

$sql = mysqli_query($konek, "DELETE FROM user WHERE email = '$email'");

if (!mysqli_error($konek)) {
  $pesan = "Berhasil hapus data";
} else {
  $pesan = "Gagal menghapus data";
}

header("Location: index.php?pesan=$pesan");
