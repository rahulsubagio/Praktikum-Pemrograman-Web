<?php

include "koneksi.php";

$id_admin = $_POST['id_admin'];
$password = $_POST['password'];

$data = mysqli_query($konek, "SELECT * FROM admin WHERE id_admin = '$id_admin'");
$cek = mysqli_fetch_array($data);

if ($password == $cek['password']) {
  $_SESSION['login'] = true;
  $_SESSION['id_admin'] = $cek['id_admin'];
  $_SESSION['nama'] = $cek['nama'];
  header("Location: cek_login.php");
  return;
}
