<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$passlama = password_hash($_POST['passlama'], PASSWORD_DEFAULT);
$passbaru = password_hash($_POST['passbaru'], PASSWORD_DEFAULT);
$passconf = password_hash($_POST['passconf'], PASSWORD_DEFAULT);
$foto = $_FILES['foto'];

var_dump($foto);
$namafile = md5(date('Y-m-d H:i:s'));
$namafile = 'uploads/' . $namafile . substr($foto['name'], strrpos($foto['name'], '.'));
move_uploaded_file($foto['tmp_name'], $namafile);


if (strlen($passlama) == 0) {
  $pesan  = "butuh password utk mengganti data";
  header('Location: index.php?message=' . $pesan);
  exit();
}

$sql_check = "SELECT * FROM user WHERE email = '$email' AND password = '$passlama'";
$query = mysqli_query($konek, $sql_check);

if (mysqli_num_rows($query)) {
  if (strlen($passbaru) && $passbaru == $passkonf) {
    //ganti password
    $sql = mysqli_query($konek, "UPDATE user SET nama = '$nama', password = '$passbaru' WHERE email = '$email'") or die(mysqli_error($konek));
  } else {
    if ($foto['size'] == 0) {
      //update nama
      $sql = mysqli_query($konek, "UPDATE user SET nama = '$nama' WHERE email = '$email'") or die(mysqli_error($konek));
    } else {
      //update nama
      $sql = mysqli_query($konek, "UPDATE user SET nama = '$nama', foto = '$filename' WHERE email = '$email'") or die(mysqli_error($konek));
    }
  }

  if (!mysqli_error($konek)) {
    $pesan = 'Berhasil edit data';
  } else {
    $pesan = 'Gagal edit data';
  }
} else {
  $pesan = "password salah";
}
header("Location: index.php?pesan=$pesan");
