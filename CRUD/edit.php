<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>FORM</title>
</head>

<?php

include 'koneksi.php';

$email = $_GET['email'];
$sql = mysqli_query($konek, "SELECT * FROM user WHERE email = '$email'");
$data = mysqli_fetch_array($sql);
?>

<body>
  <form method="POST" action="edit-proses.php" enctype="multipart/form-data">
    <table>
      <tr>
        <td><label>Nama</label></td>
        <td>:</td>
        <td><input type="text" name="nama" value="<?= $data['nama'] ?>"></td>
      </tr>
      <tr>
        <td><label>Email</label></td>
        <td>:</td>
        <td><input type="hidden" name="email" value="<?= $data['email'] ?>" required><?= $data['email'] ?></td>
      </tr>
      <tr>
        <td><label>Password Lama</label></td>
        <td>:</td>
        <td><input type="password" name="passlama"></td>
      </tr>
      <tr>
        <td><label>Password Baru</label></td>
        <td>:</td>
        <td><input type="password" name="passbaru"></td>
      </tr>
      <tr>
        <td><label>Konfirmasi Password</label></td>
        <td>:</td>
        <td><input type="password" name="passkonf"></td>
      </tr>
      <tr>
        <td>
          <input type="file" name="foto" accept="images/*">
        </td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>
          <hr><button type="submit">Simpan</button></td>
      </tr>
    </table>
  </form>
</body>

</html>