<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
// tahap 1 pake login statis admin:admin
//===============================SOURCE CODE====================================
if($username == 'admin' && $password == 'admin'){
    $_SESSION['login'] = true;
    // redirect
    header('Location: index.php');
    return;
}

// tahap 2 ambil dari basis datanya
//===============================SOURCE CODE====================================
//include 'koneksi.php';
//$sql = "SELECT * FROM user WHERE email='$username' AND password='$password'";
//$query = mysqli_query($konek,$sql);
//$row = mysqli_num_rows($query);
//if($row) {
//    $data = mysqli_fetch_assoc($query);
//    $_SESSION['login'] = true;
//    $_SESSION['name'] = $data['nama'];
//    $_SESSION['username'] = $data['email'];
//    // redirect
//    header('Location: index.php');
//    return;
//}

// tahap 3 kalo sempat bikin supaya basis datanya field password
// tidak disimpan plaintext tp md5
// -> konsekuensinya proses input dan edit perlu disesuaikan juga
//===============================SOURCE CODE====================================
//include 'koneksi.php';
//$sql = "SELECT * FROM user WHERE email='$username' AND password=MD5('$password')";
//$query = mysqli_query($konek,$sql);
//$row = mysqli_num_rows($query);
//if($row) {
//    $data = mysqli_fetch_assoc($query);
//    $_SESSION['login'] = true;
//    $_SESSION['name'] = $data['nama'];
//    $_SESSION['username'] = $data['email'];
//    // redirect
//    header('Location: index.php');
//    return;
//}