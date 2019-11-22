<?php
include "koneksi.php";
if (!$_SESSION['login']) {
  header("Location: login.php");
} else { ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Hello</title>
  </head>

  <body>
    <div class="container mt-5">
      <h1 class="text-center">PT. BORONGAN BANGSA</h1>
      <!-- Button to Open the Modal -->
      <h3 class="font-weight-bold mt-5">Daftar Pegawai</h3>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
        Tambah Pegawai
      </button>
      <a href="logout.php" class="">
        <button type="button" class="btn btn-danger float-right">
          Logout
        </button>
      </a>

      <!-- The Modal Tambah Pegawai -->
      <div class="modal" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="text-center font-weight-bold mt-2">Tambah Pegawai</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <div class="container">
                <form action="tambah_pegawai.php" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>KTP</label>
                    <input type="text" class="form-control" placeholder="KTP" name="ktp">
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" placeholder="Nama" name="nama">
                  </div>
                  <div class="form-group">
                    <label>Foto</label>
                    <input type="file" class="form-control-file" name="foto" accept="images/*">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <table class="table table-striped mt-4">
        <thead>
          <tr>
            <th scope="col">KTP</th>
            <th scope="col">Nama</th>
            <th scope="col">Foto</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $query = mysqli_query($konek, "SELECT * FROM pegawai");
            while ($data = mysqli_fetch_array($query)) {
              ?>
            <tr>
              <th scope="row"><?= $data['ktp']; ?></th>
              <td><?= $data['nama']; ?></td>
              <td><img src="<?= $data['foto']; ?>" height="70" width="70"></td>
              <td>
                <a href="detail.php?ktp=<?= $data['ktp'] ?>" class="text-decoration-none">
                  <button class="btn btn-primary">Detail</button>
                </a>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal2">Presensi</button>
                <!-- The Modal Presensi -->
                <div class="modal" id="myModal2">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="text-center font-weight-bold mt-2">Presensi</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>

                      <!-- Modal body -->
                      <div class="modal-body">
                        <div class="container">
                          <form action="presensi.php?ktp=<?= $data['ktp'] ?>" method="POST">
                            <div class="form-group">
                              <input type="date" class="form-control" name="date">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <a href="hapus.php?ktp=<?= $data['ktp'] ?>" class="text-decoration-none">
                  <button class="btn btn-danger">Hapus</button>
                </a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </body>

  </html>

<?php } ?>