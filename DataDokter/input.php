<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
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
      <a class="navbar-brand" href="../index.php">Chaldea Hospital</a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item ">
            <a class="nav-link" href="index.php">Home </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="input.php">Input data<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="data.php">Data</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- isi -->
<div class="container mt-5 mb-5 bg-light" style="Margin-top: 50px;">
  <form action="proses.php?aksi=tambah" method="post">
    <h1>Input data</h1>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nama</label>
    <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Catatan dokter</label>
    <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3" required></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Tanggal Lahir</label>
    <input type="date" class="form-control" name="tgl_lahir" id="exampleFormControlInput2" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput3">Jenis Kelamin</label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="Laki-laki" checked>
            <label class="form-check-label" for="inlineRadio1" >Laki-laki</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2" value="Perempuan">
            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
        </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Bidang Keahlian Kedokteran</label>
    <select class="form-control" name="agama" id="exampleFormControlSelect1">
      <option>Spesialis Bedah</option>
      <option>Spesialis Kanker</option>
      <option>Dokter anak & bayi</option>
      <option>Dokter Umum</option>
    </select>
  </div>
  <button class="btn btn-primary mb-3" name="save" type="submit">Tambah</button>
  </form>
</div>
    <!-- js -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>