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
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="../index.php">Chaldea Hospital</a>
      <div class="dropdown">
  <button class="btn btn-group dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
</div>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item ">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="input.php">Input data</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="data.php">Data</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- isi -->
    <div class="container mt-5 mb-5 bg-light" style="Margin-top: 50px;">
    <h1>data</h1>
    <?php
        foreach ($biodata->show($_GET['id']) as $data ) {
    ?>
    <input type="hidden" name="id" value="<?=$data['id']?>">
  <div class="form-group">
    <label for="exampleFormControlInput1">Nama dokter</label>
    <input type="text" class="form-control" readonly value="<?=$data['nama']?>" name="nama" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Catatan dokter</label>
    <textarea class="form-control" readonly name="alamat" id="exampleFormControlTextarea1" rows="3"><?=$data['alamat']?></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Tanggal Lahir</label>
    <input type="date" class="form-control" readonly value="<?=$data['tgl_lahir']?>" name="tgl_lahir" id="exampleFormControlInput2">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput3">Jenis Kelamin</label><br>
        <div class="form-check form-check-inline">
            <?php
            if ($data['jenis_kelamin']=="Laki-laki") {
            ?>
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="Laki-laki" checked disabled>
        <label class="form-check-label" for="inlineRadio1" >Laki-laki</label>
            <?php
            }else {?>
             <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2" value="Perempuan" checked disabled>
            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
            <?php }?>          
        </div>
  </div>
  <div class="form-group ">
    <label for="exampleFormControlSelect1">Bidang keahlian kedokteran</label>
    <select class="form-control" name="agama"  id="exampleFormControlSelect1" disabled>
       <?php if ($data['agama']=="Spesialis Bedah") {?>
          <option >Spesialis Bedah</option>
        <?php }elseif ($data['agama']=="Spesialis Kanker") {?>
          <option>Spesialis Kanker</option>
        <?php }elseif ($data['agama']=="Dokter Anak & Bayi") {?>
          <option>Dokter Anak & Bayi</option>
        <?php }elseif ($data['agama']=="Dokter Umum") {?>
          <option>Dokter Umum</option>
        <?php }?>
    </select>
  </div>
    <a class="btn btn-primary btn-sm mb-3" href="data.php"  role="button">Kembali</a>
  <?php  }?>
    </div>
    <!-- js -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>