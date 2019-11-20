<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
</head>

<body>
  <form method="POST" action="login_proses.php">
    <table>
      <tr>
        <label>
          <td>Email</td>
          <td>:</td>
          <td><input type="email" name="email"></td>
        </label>
      </tr>
      <tr>
        <label>
          <td>Password</td>
          <td>:</td>
          <td><input type="password" name="password"></td>
        </label>
      </tr>
    </table>
    <button type="submit" name="simpan">Login</button>
  </form>
</body>

</html>