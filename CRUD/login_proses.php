<?php

include "koneksi.php";

$email = $_POST['email'];
$password = $_POST['password'];

// statis
// if ($username == "admin" && $password == "admin") {
//   $_SESSION['login'] = true;
//   header("Location: index.php");
//   return;
// }

$data = mysqli_query($konek, "SELECT * FROM user WHERE email = '$email'");
$cek = mysqli_fetch_array($data);
$boolean = password_verify($password, $cek['password']);

if ($boolean) {
  $_SESSION['login'] = true;
  $_SESSION['nama'] = $data['nama'];
  header("Location: cek_login.php");
  return;
}
