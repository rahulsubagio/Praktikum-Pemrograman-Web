<?php

include "koneksi.php";

$nama = $_POST['nama'];
$ktp = $_POST['ktp'];
$foto = $_FILES['foto'];

$img = "uploads/";
$img = $img . basename($foto['name']);
move_uploaded_file($foto['tmp_name'], $img);

mysqli_query($konek, "INSERT INTO pegawai VALUES ($ktp, '$nama', '$img')");

header("location: index.php");
