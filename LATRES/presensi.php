<?php

include "koneksi.php";

$ktp = $_GET['ktp'];
$date = $_POST['date'];

mysqli_query($konek, "INSERT INTO presensi VALUES ($ktp, '$date')");

header("location: index.php");
