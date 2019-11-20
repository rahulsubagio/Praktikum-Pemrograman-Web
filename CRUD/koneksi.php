<?php
session_start();
$konek = new mysqli("localhost", "root", "", "crud");

if ($konek->connect_error) {
  die('Maaf Koneksi gagal : ' . $konek->connect_error);
}
