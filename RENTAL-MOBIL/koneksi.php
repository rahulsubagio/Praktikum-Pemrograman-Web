<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "baspro";

$link = new mysqli($host, $user, $pass, $database);

if ($link->connect_error) {
	exit();
	die('maaf koneksi gagal : ' . $connect->error);
}
