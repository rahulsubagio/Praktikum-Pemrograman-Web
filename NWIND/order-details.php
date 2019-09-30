<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Order Details</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body class="bg-info">
  <?php
  $oid = $_GET['oid'];
  $link = mysqli_connect("localhost", "root", "", "nwind");
  $data = mysqli_query($link, "SELECT * FROM orderdetails LEFT JOIN products ON products.ProductID = orderdetails.ProductID WHERE OrderID = '$oid'");
  ?>
  <div class="container bg-light p-3 my-5 rounded">
    <h1 class="text-info mt-2 ml-4 mb-auto"><b>Produk dalam order ini</b></h1><br>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Order ID</th>
          <th scope="col">Product</th>
          <th scope="col">Unit Price</th>
          <th scope="col">Quantity</th>
          <th scope="col">Discount</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($row = mysqli_fetch_array($data)) {
          ?>
          <tr>
            <td><?= $row['OrderID']; ?></td>
            <td><?= $row['ProductName'] ?></td>
            <td><?= $row['UnitPrice']; ?></td>
            <td><?= $row['QuantityPerUnit']; ?></td>
            <td><?= $row['Discount']; ?></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>