<?php

$koneksi = new mysqli('localhost','root','', 'materi');

$result = $koneksi->query("DELETE FROM user WHERE email = '$_GET[email]'");

if(!$koneksi->error){
	echo "Berhasil";
}else{
	echo "error $koneksi->error";
}