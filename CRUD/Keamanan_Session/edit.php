<!DOCTYPE html>
<html>
<head>
	<title>Form Edit</title>
</head>
<body>

<?php 
include 'koneksi.php';
$email = $_GET['email'];
$sql = mysqli_query($konek, "select * from user where email='$email'");
$data = mysqli_fetch_array($sql);
 ?>

<form method="POST" action="edit_proses.php">
	<table>
		<tr>
			<td> Nama </td>
			<td> : </td>
			<td> <input type="text" name="nama" value="<?=$data['nama']?>"> </td>
		</tr>
		<tr style="display: none;">
			<td> Email </td>
			<td> : </td>
			<td> <input type="hidden" name="email" value="<?=$data['email']?>"> </td>
		</tr>
		<tr>
			<td> Password Lama </td>
			<td> : </td>
			<td> <input type="password" name="passlama"> </td>
		</tr>
		<tr>
			<td> Password Baru </td>
			<td> : </td>
			<td> <input type="password" name="passbaru"> </td>
		</tr>
		<tr>
			<td> Konfirmasi Password </td>
			<td> : </td>
			<td> <input type="password" name="passkonfirmasi"> </td>
		</tr>
		<tr>
			<td rowspan="3"> <input type="submit" name="simpan" value="Simpan"> </td>
		</tr>
	</table>
</form>
</body>
</html>