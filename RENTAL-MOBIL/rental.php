<?php
include "koneksi.php";
if (isset($_GET['no_plat'])) {
	$no_plat = $_GET['no_plat'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Patrick+Hand&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="style/style.css" />
	<title>RAR RENTAL</title>
</head>

<body class="menu">
	<div class="kendaraan px-5">
		<nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
			<a class="navbar-brand" href="home.php">
				<h3 class="font-weight-bold">RAR RENTAL</h3>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-item nav-link" href="home.php">
						<h5 class="font-weight-bold">Home</h5>
					</a>
					<a class="nav-item nav-link" href="mobil.php">
						<h5 class="font-weight-bold">Kendaraan</h5>
					</a>
					<a class="nav-item nav-link" href="rental.php">
						<h5 class="active font-weight-bold">Rental</h5>
					</a>
					<a class="nav-item nav-link" href="transaksi.php">
						<h5 class="font-weight-bold">Transaksi</h5>
					</a>
					<a class="nav-item nav-link" href="about_us.php">
						<h5 class="font-weight-bold">About Us</h5>
					</a>
				</div>
			</div>
		</nav>
	</div>

	<div class="container col-7 rounded">
		<p class="rental font-weight-bold mt-4" align="center">RENTAL RAR</p>

		<form action="konfirmasi_sewa.php" method="POST">
			<?php if (empty($_GET['no_plat'])) { ?>
				<table class="table table-striped">
					<thead>
						<tr>
							<th class="text-center" colspan="5">Informasi Kendaraan</th>
						</tr>
						<tr class="text-center">
							<th scope="col">No Plat</th>
							<th scope="col">Jenis</th>
							<th scope="col">Merk</th>
							<th scope="col">Harga Perhari</th>
							<th scope="col">Pilih</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$query2 = mysqli_query($link, "SELECT * FROM kendaraan WHERE status = 'Sedia'");
							while ($data = mysqli_fetch_array($query2)) {	?>
							<tr class="text-center">
								<td><?php echo $data['no_plat']; ?></td>
								<td><?php echo $data['jenis_kendaraan'] ?></td>
								<td><?php echo $data['merk_kendaraan'] ?></td>
								<td><?php echo $data['harga_sewa'] ?></td>
								<td>
									<input class="form-check-input" type="radio" name="sewa" value="<?php echo $data['no_plat']; ?>">
									<label class="form-check-label">
										ingin menyewa
									</label>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			<?php } else {
				$query = mysqli_query($link, "SELECT * FROM kendaraan WHERE no_plat = '$no_plat'");
				$data = mysqli_fetch_array($query); ?>
				<table class="table table-striped">
					<thead>
						<tr class="text-center">
							<th colspan="2">Informasi Kendaraan</th>
							<input type="hidden" name="no_plat" value="<?php echo $data['no_plat']; ?>">
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>No. Plat</th>
							<td><?php echo $data['no_plat']; ?></td>
						</tr>
						<tr>
							<th>Jenis</th>
							<td><?php echo $data['jenis_kendaraan'] ?></td>
						</tr>
						<tr>
							<th>Brand</th>
							<td><?php echo $data['merk_kendaraan'] ?></td>
						</tr>
						<tr>
							<th>Harga Sewa (per hari)</th>
							<td><?php echo $data['harga_sewa'] ?></td>
						</tr>
					</tbody>
				</table>
			<?php	} ?>

			<br>

			<table class="table table-striped">
				<thead>
					<tr>
						<th class="text-center">Informasi Penyewa</th>
					</tr>
				</thead>
			</table>
			<br>

			<div class="form-row">
				<div class="form-group col-md-8">
					<label>No. KTP</label>
					<input type="text" class="form-control" placeholder="Nomor KTP" name="ktp_baru">
					<small class="form-text text-muted">Jika pernah menyewa maka pilih nama terdaftar</small>
				</div>
				<div class="form-group col-md-4">
					<label>Nama Terdaftar</label>
					<select class="form-control" name="ktp_lama">
						<option selected>Pilih</option>
						<?php
						$query3 = mysqli_query($link, "SELECT * FROM penyewa");
						while ($data3 = mysqli_fetch_array($query3)) { ?>
							<option value="<?php echo $data3['ktp']; ?>"><?php echo $data3['pnama']; ?></option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label>Nama</label>
				<input type="text" class="form-control" placeholder="Nama" name="nama">
			</div>
			<div class="form-row">
				<div class="form-group col-7">
					<label>Alamat</label>
					<input type="text" class="form-control" placeholder="Alamat" name="alamat">
				</div>
				<div class="form-group col-5">
					<label>No. Telepon</label>
					<input type="text" class="form-control" placeholder="Nomor Telepon Aktif" name="no_telp">
				</div>
			</div>
			<div class="text-right">
				<button type="submit" class="btn">Submit</button>
			</div>

		</form>
	</div>

	<footer class="footer">
		<p>copypaste ® rental-RAR</p>
	</footer>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
</body>

</html>