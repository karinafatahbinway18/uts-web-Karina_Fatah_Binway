<?php 

include '../config/koneksi.php';
/** @var mysqli $conn */

$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun_terbit= $_POST['tahun_terbit'];
$kategori = $_POST['kategori'];

$query = mysqli_query($conn, "INSERT INTO buku VALUES(
    NULL,
    '$judul',
    '$penulis',
    '$penerbit',
    '$tahun_terbit'
    '$kategori'
)");

if($query){
    header("Location: data_buku.php");
}else{
    echo "Data gagal disimpan";
}


?>