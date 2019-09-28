<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" bcontent="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>LOGIN</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="js/bootstrap.min.js">
</head>

<body class="bg-info">
  <form class="container bg-light p-4 my-5 col-5 rounded" method="POST" action="proses.php">

    <div class="form-group">
      <center>
        <h2 class="text-info"><b>LOGIN</b></h2>
      </center>
      <label>Email address</label>
      <input type="email" class="form-control" placeholder="Enter email" name="email">
    </div>

    <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control" placeholder="Password" name="password">
    </div>
    <button type="submit" class="btn btn-outline-info btn-block">Login</button>
  </form>

  <center>
    <ion-icon name="person" size="large" class="text-light"></ion-icon>
  </center>

  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>