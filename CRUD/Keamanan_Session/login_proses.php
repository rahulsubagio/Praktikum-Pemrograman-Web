<?php
include 'koneksi.php';
session_start();

$user = $_POST['user'];
$pass = $_POST['pass'];

//statis
// if ($user=="admin" && $pass=="admin") {
// 	$_SESSION['login'] = true;
// 	header("Location:index.php");
// 	return;
// }

$data = mysqli_query($konek, "select * from user where email='$user'");
$cek = mysqli_fetch_assoc($data);
$boolean = password_verify($pass, $cek['password']);

if ($boolean) {
	$_SESSION['login'] = true;
	$_SESSION['nama'] = $cek['nama'];
	header("Location:cek_login.php");
	return;
}

?>