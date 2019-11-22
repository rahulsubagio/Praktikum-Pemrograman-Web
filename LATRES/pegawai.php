<?php
include "koneksi.php";
$_SESSION['login'] = false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>Login</title>
</head>

<body class="bg-light">
  <div class="container mt-5 col-4 p-5 bg-white rounded shadow">
    <h2 class="text-center font-weight-bold">CEK GAJI</h2>
    <form action="detail.php" method="GET">
      <div class="form-group">
        <label> Masukkan No KTP Anda</label>
        <input type="text" class="form-control" placeholder="No KTP" name="ktp">
      </div>
      <button type="submit" class="btn btn-primary float-right">Submit</button>
    </form>
  </div>
</body>

</html>