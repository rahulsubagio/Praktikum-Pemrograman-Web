<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>FORM</title>
</head>

<body>
  <form method="POST" action="insert.php">
    <table>
      <tr>
        <td><label for="">Nama</label></td>
        <td>:</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td><label for="">Email</label></td>
        <td>:</td>
        <td><input type="email" name="email"></td>
      </tr>
      <tr>
        <td><label for="">Password</label></td>
        <td>:</td>
        <td><input type="password" name="password"></td>
      </tr>
      <tr>
        <td><button>Simpan</button></td>
      </tr>
    </table>
  </form>
</body>

</html>