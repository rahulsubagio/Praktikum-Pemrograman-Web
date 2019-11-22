<?php
include "koneksi.php";
$ktp = $_GET['ktp'];
$query = mysqli_query($konek, "SELECT * FROM pegawai WHERE ktp = '$ktp'");
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>Detail</title>
</head>

<body class="">
  <div class="container mt-5">
    <div class="">
      <img src="<?= $data['foto'] ?>" height="150" width="150" class="mx-auto d-block rounded">
      <h1 class="text-center"><?= $data['nama']; ?></h1>
    </div>
    <div>
      <?php if ($_SESSION['login']) : ?>
        <a href="index.php">
          <button class="btn btn-secondary">Back</button>
        </a>
      <?php endif; ?>
    </div>
    <table class="table table-striped mt-3">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Tanggal</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i = 1;
        $gaji = 0;
        $query1 = mysqli_query($konek, "SELECT * FROM presensi WHERE ktp = '$ktp'");
        while ($data1 = mysqli_fetch_array($query1)) {
          ?>
          <tr>
            <th scope="row"><?= $i; ?></th>
            <td><?= $data1['absen']; ?></td>
          </tr>
        <?php $i++;
          $gaji += 250000;
        } ?>
      </tbody>
    </table>
    <h5 class="text-center mt-5 mb-5">Gaji Anda Sejumlah Rp.<?= $gaji; ?> pada bulan <?= date('M Y') ?></h5>
  </div>
</body>

</html>