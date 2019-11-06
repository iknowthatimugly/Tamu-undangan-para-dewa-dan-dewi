<?php
class Database
{
    // $host = untuk memberitahu kita menggunakan server lokal yaitu local host
    // $user = username dari database
    // $pass = password untuk ,asuk ke localhost mysql kita, kosongkan jika tidak menggunakan password 
    // $db  = untuk memberi akses kita menggunakan database mana di server local kita(localhost)
    public $host = 'localhost',
        $user = "root",
        $pass = "123",
        $db = "dasarDB",
        $koneksi;
    public function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if ($this->koneksi) {
             return "Koneksi berhasil";
        } else {
            return "Koneksi database Gagal";
        }
    }
}
class Biodata extends Database
{
    // manampilkan semua data
    public function index()
    {
        $datasiswa = mysqli_query($this->koneksi, "SELECT * from biodata");
        // var_dump($datasiswa);
        return $datasiswa;
    }
    // menambah data
    public function create($nama, $alamat, $tgl_lahir,$jenis_kelamin,$agama,$umur)
    {
        mysqli_query($this->koneksi, "INSERT INTO biodata VALUES (null,'$nama','$alamat','$tgl_lahir','$jenis_kelamin','$agama','$umur') ");
    }
    // menampilkan data berdasarkan id
    public function show($id)
    {
        $datasiswa = mysqli_query($this->koneksi, "SELECT * from biodata where id='$id'");
        return $datasiswa;
    }
    // meng update data berdasarkan id
    public function update($id,$nama, $alamat, $tgl_lahir,$jenis_kelamin,$agama,$umur)
    {
        mysqli_query($this->koneksi, "UPDATE biodata SET nama='$nama',alamat='$alamat',tgl_lahir='$tgl_lahir',jenis_kelamin='$jenis_kelamin',agama='$agama',umur='$umur' WHERE id='$id'");
    }
    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "DELETE FROM biodata WHERE id='$id'");
    }
}
// koneksi db
$biodata = new Biodata();
