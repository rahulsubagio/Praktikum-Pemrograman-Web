<?php 
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$passlama = $_POST['passlama'];
$passbaru = $_POST['passbaru'];
$passkonf = $_POST['passkonfirmasi'];

if(strlen($passlama) == 0) {
	$message = "Butuh password untuk mengganti data";
	header('Location: index.php?message='.$message);
	exit();
}

$sql_check = "SELECT * FROM user WHERE email='$email' and password = MD5('$passlama')";
$query = mysqli_query($konek, $sql_check);

if(mysqli_num_rows($query)){
	if(strlen($passbaru) && $passbaru == $passkonf){
		// ganti passowrd
		$sql = mysqli_query($konek,"update user set nama='$nama', password=MD5('$passbaru') where email='$email'");
	}else{
		$sql = mysqli_query($konek,"update user set nama='$nama' where email='$email'");
	}	
	if (!mysqli_error($konek)) {
			// echo "Berhasil hapus data";
		$message = "Berhasil edit data";
	} else {
			// echo "Gagal menghapus data";
		$message = "Gagal mengedit data";
	}
}else{
	$message = "password salah";
}
header("Location:index.php?message=$message");
 ?>