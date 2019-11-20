<?php
session_start();

if (isset($_SESSION['login']) && $_SESSION['login']) {
  echo "anda login | " . $_SESSION['nama'];
} else {
  echo "gagal login";
}
