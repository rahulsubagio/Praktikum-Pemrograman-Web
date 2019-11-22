<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>Login</title>
</head>

<body class="bg-light">
  <div class="container mt-5 col-4 bg-white rounded px-5 pb-5 pt-4 shadow">
    <a href="pegawai.php" class="float-right">Cek Gaji</a><br>
    <h2 class="text-center font-weight-bold">LOGIN</h2>
    <form action="login_proses.php" method="POST">
      <div class="form-group">
        <label>ID</label>
        <input type="text" class="form-control" placeholder="id" name="id_admin">
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" placeholder="Password" name="password">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>

</html>