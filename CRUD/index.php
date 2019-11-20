<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Beranda</title>
</head>

<body>
  <form action="form.php">
    <button>Tambah</button>
  </form> <br>

  <table border="1">
    <tr>
      <td>Nama</td>
      <td>Email</td>
      <td>Foto</td>
      <td>Aksi</td>
    </tr>

    <?php
    $sql = mysqli_query($konek, 'SELECT * FROM user') or die(mysqli_error($konek));

    while ($data = mysqli_fetch_array($sql)) { ?>
      <tr>
        <td><?= $data['nama']; ?></td>
        <td><?= $data['email']; ?></td>
        <td><img src="<?= $data['foto']; ?>"></td>
        <td>
          <a href="edit.php?email=<?= $data['email'] ?>">Edit</a>
          <a href="hapus.php?email=<?= $data['email'] ?>">Hapus</a>
        </td>
      </tr>

    <?php
    }
    if (isset($_GET['pesan'])) {
      $msg = $_GET['pesan'];
      echo "<script>alert('$msg')</script>";
    }
    ?>

  </table>
</body>

</html>