<?php
include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css" />
    
  </head>
  <body class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="../index.php">Chealdea Hospital</a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item ">
            <a class="nav-link" href="index.php">Home </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="input.php">Input data</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="data.php">Data<span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- isi -->
<div class="container mt-5 mb-5 bg-light" style="Margin-top: 50px;">
    <table class="table mt-3 mb-3" id="pagi">
    <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Pasien</th>
      <th scope="col">Keluhan/Penyakit</th>
      <th scope="col">tanggal Lahir</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Status Kesehatan/Penanganan</th>
      <th scope="col">Umur</th>
      <th scope="col">Aksi</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no=1;
    foreach ($biodata->index() as $data ) {
    ?>
    <tr>
      <th scope="row"><?=$no++?></th>
      <td><?=$data['nama']?></td>
      <td><?=$data['alamat']?></td>
      <td><?=$data['tgl_lahir']?></td>
      <td><?=$data['jenis_kelamin']?></td>
      <td><?=$data['agama']?></td>
      <td><?=$data['umur']?></td>
      <td><a class="btn btn-success btn-sm mr-1" href="biodata.php?id=<?=$data['id']?>"  role="button">lihat</a>|
      <a class="btn btn-warning btn-sm mr-1" href="edit.php?id=<?=$data['id']?>"  role="button">edit</a>|
      <a class="btn btn-danger btn-sm" href="proses.php?id=<?=$data['id']?>&aksi=delete" onclick="return confirm('are u sure senpai :3?');" role="button">hapus</a></td>
    </tr>
    <?php
    }
    ?>
    </tbody>
    </table>
</div>
    <!-- js -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <script>$(document).ready(function() {
      $('#pagi').DataTable();
    } );</script>    
  </body>
</html>