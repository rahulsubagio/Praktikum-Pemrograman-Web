<?php
include "koneksi.php";
date_default_timezone_set('Asia/Jakarta');
$no_plat = $_POST['no_plat'];
$no_ktp = $_POST['no_ktp'];
$id_kry = $_POST['id_karyawan'];
$tgl_sewa = date("Y/m/d H:i:s");
$lama_sewa = $_POST['lama_sewa'];
$tgl_hrs_kembali = date('Y/m/d H:i:s', strtotime($tgl_sewa . ' + ' . $lama_sewa . ' days'));

$query = mysqli_query($link, "select * from kendaraan where no_plat = '$no_plat'");
$data = mysqli_fetch_array($query);
$biaya = $lama_sewa * $data['harga_sewa'];
$query2 = mysqli_query($link, "insert into sewa Values ('','$tgl_sewa','$lama_sewa','','$tgl_hrs_kembali','$biaya','$no_plat','$no_ktp','$id_kry')") or die(mysqli_error($link));
$query3 = mysqli_query($link, "UPDATE kendaraan SET status = 'Sewa' where no_plat = '$no_plat'") or die(mysqli_error($link));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Patrick+Hand&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style/style.css" />
    <title>RAR RENTAL</title>
</head>

<body class="menu">
    <div class="kendaraan px-5">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <a class="navbar-brand" href="home.php">
                <h3 class="font-weight-bold">RAR RENTAL</h3>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="home.php">
                        <h5 class="font-weight-bold">Home</h5>
                    </a>
                    <a class="nav-item nav-link" href="mobil.php">
                        <h5 class="font-weight-bold">Kendaraan</h5>
                    </a>
                    <a class="nav-item nav-link" href="rental.php">
                        <h5 class="font-weight-bold">Rental</h5>
                    </a>
                    <a class="nav-item nav-link" href="transaksi.php">
                        <h5 class="active font-weight-bold">Transaksi</h5>
                    </a>
                    <a class="nav-item nav-link" href="about_us.php">
                        <h5 class="font-weight-bold">About Us</h5>
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <div class="container col-5 rounded" style="font-family: 'Patrick Hand', cursive;">
        <?php 
            if ($query) { 
        ?>
            <p class="rental font-weight-bold mt-4" align="center">Transaksi Berhasil</p>
        <?php 
            } else { 
        ?>
            <p class="rental font-weight-bold mt-4" align="center">Transaksi Gagal</p>
        <?php 
            } 
        ?>
    </div>

    <footer class="footer">
        <p>copypaste ® rental-RAR</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>