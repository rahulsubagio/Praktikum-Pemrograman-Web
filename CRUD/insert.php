<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = mysqli_query($konek, "INSERT INTO user VALUES ('$nama', '$email', '$pass')") or die(mysqli_error($konek));

if ($sql) {
  $pesan = 'Berhasil input data';
} else {
  $pesan = 'Gagal input data';
}

header("Location: index.php?pesan=$pesan");
