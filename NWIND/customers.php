<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Customers</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body class="bg-info">
  <?php
  $link = mysqli_connect("localhost", "root", "", "nwind");
  $data = mysqli_query($link, "SELECT * FROM customers");
  ?>
  <div class="container bg-light p-3 my-5 rounded">
    <h1 class="text-info mt-2 ml-4 mb-auto"><b>Daftar Customer</b></h1><br>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Customers ID</th>
          <th scope="col">Company Name</th>
          <th scope="col">Contact Name</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($row = mysqli_fetch_array($data)) {
          ?>
          <tr>
            <td>
              <?=
                  $row['CustomerID'];
                $customer = $row['CustomerID'];
                ?>
            </td>
            <td><?= $row['CompanyName']; ?></td>
            <td><?= $row['ContactName']; ?></td>
            <td>
              <a href="order.php?cid=<?= $customer ?>">
                <button type="button" class="btn btn-info">Lihat Order</button>
              </a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>