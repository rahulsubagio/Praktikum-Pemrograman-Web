<?php 
include 'koneksi.php';
$email = $_GET['email'];

$sql = mysqli_query($konek,"delete from user where email='$email'");

if (!mysqli_error($konek)) {
	// echo "Berhasil hapus data";
	$message = "Berhasil hapus data";
} else {
	// echo "Gagal menghapus data";
	$message = "Gagal menghapus data";
}
header("Location:index.php?message=$message");
 ?>