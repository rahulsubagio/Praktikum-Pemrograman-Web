<?php

include "koneksi.php";

if (isset($_SESSION['login']) && $_SESSION['login']) {
  header("Location: index.php");
} else {
  echo "gagal login";
}
