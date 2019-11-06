<?php
session_start();
if (isset($_SESSION['login'])) {
    ?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rumah Sakit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- End CSS -->
    <script src="main.js"></script>
</head> 
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="halawal.php">Rumah Sakit</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline my-2 my-lg-0">
        <a href="logout.php" name="logout" class="btn btn-outline-success my-2 my-sm-0">Logout</a>
        </form>
    </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="padding:25px;">
                <div class="card">
                    <div class="card-header" align="center">Index Utama</div>
                    <div class="card-body">
                    <div class="form-group"><br>
                        <a href="DataDokter/index.php"><button type="submit" class="btn btn-outline-primary btn-block my-2 my-sm-0">Dokter</button></a><br><br>
                        <a href="DataPerawat/index.php"><button type="submit" class="btn btn-outline-info btn-block my-2 my-sm-0">Perawat</button></a><br><br>
                        <a href="DataPasien/index.php"><button type="submit" class="btn btn-outline-warning btn-block my-2 my-sm-0">Pasien</button></a><br><br>
                        <a href="DataObat/index.php"><button type="submit" class="btn btn-outline-danger btn-block my-2 my-sm-0">Obat</button></a><br><br>
                        <a href="DataKematian/index.php"><button type="submit" class="btn btn-outline-success btn-block my-2 my-sm-0">Riawayat kematian Pasien</button></a><br>
                    </div>
                    </form>
                    <!-- End Isi -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- JQuery Pertama, Selanjutnya bebas.js-->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <!-- End Js -->
</body>
</html>
<?php
} else {
    // Redirect(pindah halaman)
    // ke login.php
    header("location: login.php");
    // die("Silahkan Login Terlebih dahuli");
} ?>
