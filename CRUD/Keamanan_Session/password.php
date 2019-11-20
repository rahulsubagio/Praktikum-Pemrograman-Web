<?php

$koneksi = new mysqli('localhost','root','', 'materi');

$result = $koneksi->query("UPDATE user SET password='$_GET[password]' WHERE email='$_GET[email]'");

$result = $koneksi->query("SELECT * FROM user WHERE email='$_GET[email]'");
$row = $result->fetch_assoc();

if($row){
	echo "Berhasil mengganti password $row[nama]";
}else{
	echo "error";
}