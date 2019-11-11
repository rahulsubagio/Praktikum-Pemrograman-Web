<?php
include "koneksi.php";
$kode_sewa = $_GET['kode_sewa'];
$query = mysqli_query($link, "SELECT * FROM sewa WHERE sid = '$kode_sewa'");
$data = mysqli_fetch_array($query);
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

	<div class="container col-10 rounded">
		<p class="rental font-weight-bold mt-4">RENTAL RAR</p>

		<form action="konfirmasi_sewa.php" method="POST">
			<table class="table table-bordered">
				<?php
				$no_ktp = $data['ktp'];
				$query2 = mysqli_query($link, "SELECT * FROM penyewa WHERE ktp = '$no_ktp'");
				$data2 = mysqli_fetch_array($query2);

				$no_plat = $data['no_plat'];
				$query3 = mysqli_query($link, "SELECT * FROM kendaraan WHERE no_plat = '$no_plat'");
				$data3 = mysqli_fetch_array($query3);

				$kid = $data['kid'];
				$query4 = mysqli_query($link, "SELECT * FROM karyawan WHERE kid = '$kid'");
				$data4 = mysqli_fetch_array($query4);
				?>
				<thead>
					<tr>
						<th class="text-center" colspan="6">Laporan Transaksi SID</th>
					</tr>
					<tr class="text-center">
						<th colspan="2">Penyewa</th>
						<th colspan="2">Kenderaan</th>
						<th colspan="2">Transaksi</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>No KTP</td>
						<td><?= $data2['ktp']; ?></td>
						<td>No Plat</td>
						<td><?= $data3['no_plat']; ?></td>
						<td>Tanggal Sewa</td>
						<td><?php
								$tgl_s = $data['waktu_sewa'];
								$tgl_sewa = date("d M Y", strtotime($tgl_s));
								echo $tgl_sewa; ?></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td><?= $data2['pnama']; ?></td>
						<td>Jenis Kendaraan</td>
						<td><?= $data3['jenis_kendaraan']; ?></td>
						<td>Lama Sewa</td>
						<td><?= $data['lama_sewa'] . " hari"; ?></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><?= $data2['palamat']; ?></td>
						<td>Brand (Warna)</td>
						<td><?= $data3['merk_kendaraan']; ?></td>
						<td>Tanggal Harus Kembali</td>
						<td>
							<?php
							$tgl_hk = $data['kembali_seharusnya'];
							$tgl_hrs_k = date("d M Y", strtotime($tgl_hk));
							echo $tgl_hrs_k;
							?>
						</td>
					</tr>
					<tr>
						<td>No. Telp</td>
						<td><?= $data2['pno_hp']; ?></td>
						<td>Harga Sewa (per hari)</td>
						<td><?= $data3['harga_sewa']; ?></td>
						<td>Tanggal Kembali</td>
						<td>
							<?php
							if ($data['tgl_kembali'] != '0000-00-00 00:00:00') {
								$tgl_k = $data['tgl_kembali'];
								$tgl_back = date("d M Y", strtotime($tgl_k));
								echo $tgl_back;
							} else {
								echo "Belum Kembali";
							}
							?>
						</td>
					</tr>
					<tr>
						<td align="center" colspan="4">Karyawan</td>
						<td>Total Biaya</td>
						<td><?= $data['biaya']; ?></td>
					</tr>
					<tr>
						<td colspan="2">ID Karyawan</td>
						<td colspan="2"><?= $data['kid']; ?></td>
						<td rowspan="2" style="padding-top: 35px;" align="center">Status Transaksi</td>
						<?php
						if ($data['tgl_kembali'] != '0000-00-00 00:00:00') { ?>
							<td rowspan="2" class="text-center text-white font-weight-bold" style="background: #e5a321; padding-top: 35px;">
								Selesai
							</td>
						<?php	
						} else {
						?>
							<td rowspan="2" class="text-center text-white font-weight-bold" style="background: #eb3838; padding-top: 35px;">
								Belum Selesai
							</td>
						<?php
						}
						?>
						
					</tr>
					<tr>
						<td colspan="2">Nama Karyawaan</td>
						<td colspan="2"><?= $data4['knama']; ?></td>
					</tr>
				</tbody>
			</table>
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