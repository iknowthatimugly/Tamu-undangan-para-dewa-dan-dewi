<?php
include 'database.php';
$aksi = $_GET['aksi'];
if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];    
    $agama = $_POST['agama'];
    $tgl= date('Y',  strtotime( $tgl_lahir ));
    $umur = date('Y')-$tgl; 
}
if ($aksi == "tambah") {
    $biodata->create($nama, $alamat, $tgl_lahir,$jenis_kelamin,$agama,$umur);
    header("location:data.php");
} elseif ($aksi == "update") {
    $biodata->update($id,$nama, $alamat, $tgl_lahir,$jenis_kelamin,$agama,$umur);
    header("location:data.php");
} elseif ($aksi == "delete") {
    $id = $_GET['id'];
    $biodata->delete($id);
    header("location:data.php");
}