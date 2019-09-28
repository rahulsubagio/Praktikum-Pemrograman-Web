<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="js/bootstrap.min.js">
</head>

<body class="bg-info">
  <?php

  $link = mysqli_connect("localhost", "root", "", "LOGIN");

  $sql = "select * FROM USERS";
  $data = mysqli_query($link, $sql);

  $email = $_POST['email'];
  $pass = $_POST['password'];
  $result = false;
  $result1 = false;

  while ($row = mysqli_fetch_object($data)) {
    if ($email == $row->email && $pass == $row->password) {
      $result = true;
      $user = $row->user_name;
    } elseif ($email == $row->email && $pass != $row->password) {
      $result1 = true;
      $user = $row->user_name;
    }
  }
  ?>
  <div class="container bg-light my-5 col-5 p-3 rounded">
    <?php
    if ($result == true) {
      ?>
      <div>
        <center>
          <h2 class="text-info">Selamat <b><?php echo ($user); ?></b>, anda <b>berhasil login</b></h2>
          <ion-icon name="checkmark-circle" size="large" class="text-info"></ion-icon>
        </center>
      </div>
    <?php
    } elseif ($result1 == true) {
      ?>
      <div>
        <center>
          <h2 class="text-info">Maaf <b><?php echo ($user); ?></b>, password anda <b>salah</b></h2>
          <ion-icon name="close-circle" size="large" class="text-info"></ion-icon><br>
        </center>
      </div>
    <?php
    } else {
      ?>
      <div>
        <center>
          <h2 class="text-info">Maaf, anda <b>gagal login</b></h2>
          <ion-icon name="close-circle" size="large" class="text-info"></ion-icon>
        </center>
      </div>
    <?php
    }
    ?>
  </div>
  <center>
    <a href="login.php">
      <button type="button" class="btn btn-outline-light">Back</button>
    </a>
  </center>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>

</html>