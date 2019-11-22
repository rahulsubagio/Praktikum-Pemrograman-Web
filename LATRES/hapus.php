<?php

include 'koneksi.php';

$ktp = $_GET['ktp'];

$sql = mysqli_query($konek, "DELETE FROM pegawai WHERE ktp = '$ktp'");

if (!mysqli_error($sql)) {
  $pesan = "Berhasil hapus data";
} else {
  $pesan = "Gagal menghapus data";
}

header("Location: index.php?pesan=$pesan");
