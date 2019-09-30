<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Order</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body class="bg-info">
  <?php
  $cid = $_GET['cid'];
  $link = mysqli_connect("localhost", "root", "", "nwind");
  $data = mysqli_query($link, "SELECT * FROM orders WHERE CustomerID = '$cid'");
  ?>
  <div class="container bg-light p-3 my-5 rounded">
    <h1 class="text-info mt-2 ml-4 mb-auto"><b>Daftar Order</b></h1><br>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Order ID</th>
          <th scope="col">Customer ID</th>
          <th scope="col">Order Date</th>
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
                  $row['OrderID'];
                $order = $row['OrderID'];
                ?>
            </td>
            <td><?= $cid; ?></td>
            <td><?= $row['OrderDate']; ?></td>
            <td>
              <a href="order-details.php?oid=<?= $order ?>">
                <button type="button" class="btn btn-info">Lihat Produk dalam order ini</button>
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