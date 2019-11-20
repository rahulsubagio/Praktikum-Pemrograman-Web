<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login']) {
	echo "logged | Welcome $_SESSION[nama]";
} else {
	echo "not logged";
}

?>

























<!-- <?php
// session_start();
// // tahap 1 :: buat ngecek doang login-logout berhasil tidak
// // dengan cara buka file ini secara manual
// if(isset($_SESSION['login']) && $_SESSION['login']){
//     echo 'logged';
// }else{
//     echo 'not logged';
// }

// tahap 2 ::
// otomatis mindahin ke form, ini dipake buat include ke semua file
// yang perlu diamankan
//  ==========================================
// if(!isset($_SESSION['login'])){
//    header('Location: form_login.php');
// } -->
