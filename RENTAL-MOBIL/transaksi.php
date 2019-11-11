<?php
include "koneksi.php";
$query = mysqli_query($link, "SELECT * FROM sewa");
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
						<h5 class="font-weight-bold">Rental</h5>
					</a>
					<a class="nav-item nav-link" href="transaksi.php">
						<h5 class="active font-weight-bold">Transaksi</h5>
					</a>
					<a class="nav-item nav-link" href="about_us.php">
						<h5 class="font-weight-bold">About Us</h5>
					</a>
				</div>
			</div>
		</nav>
	</div>

	<div class="container col-10 rounded" align="center">
		<p class="rental font-weight-bold mt-4">RENTAL RAR</p>
		<table class="table table-striped table-responsive mt-2">
			<thead>
				<tr>
					<th class="text-center" colspan="12">Daftar Transaksi</th>
				</tr>
				<tr class="text-center">
					<th scope="col">ID Sewa </th>
					<th scope="col">ID Karyawan</th>
					<th scope="col">No. Plat</th>
					<th scope="col">No. KTP</th>
					<th scope="col">Tanggal Sewa</th>
					<th scope="col">Lama Sewa</th>
					<th scope="col">Tanggal Harus Kembali</th>
					<th scope="col">Tanggal Kembali</th>
					<th scope="col">Biaya</th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
				<?php while ($data = mysqli_fetch_array($query)) { ?>
					<tr class="text-center">
						<td><?php echo $data['sid']; ?></td>
						<td><?php echo $data['kid']; ?></td>
						<td><?php echo $data['no_plat']; ?></td>
						<td><?php echo $data['ktp']; ?></td>
						<td>
							<?php
								$tgl_s = $data['waktu_sewa'];
								$tgl_sewa = date("d M Y H:i:s", strtotime($tgl_s));
								echo $tgl_sewa;
								?>
						</td>
						<td><?php echo $data['lama_sewa']; ?></td>
						<td>
							<?php
								$tgl_hk = $data['kembali_seharusnya'];
								$tgl_hrs_k = date("d M Y H:i:s", strtotime($tgl_hk));
								echo $tgl_hrs_k;
								?>
						</td>
						<td>
							<?php
								if ($data['tgl_kembali'] != '0000-00-00 00:00:00') {
									$tgl_k = $data['tgl_kembali'];
									$tgl_back = date("d M Y H:i:s", strtotime($tgl_k));
									echo $tgl_back;
								} else {
									echo "Belum Kembali";
								}
								?>
						</td>
						<td><?php echo $data['biaya']; ?></td>
						<td width="250px">
							<a href="detail_transaksi.php?kode_sewa=<?php echo $data['sid']; ?>"><button class="btn">Detail</button></a>
						
						<?php if ($data['tgl_kembali'] == '0000-00-00 00:00:00') { ?>
							<a href="update_transaksi.php?kode_sewa=<?php echo $data['sid']; ?>"><button class="btn">Bayar</button></a>

							<a href="cancel_transaksi.php?kode_sewa=<?php echo $data['sid']; ?>"><button class="btn">Cancel</button></a>
						</td>
						<?php } ?>

					</tr>
				<?php } ?>
			</tbody>
		</table>
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