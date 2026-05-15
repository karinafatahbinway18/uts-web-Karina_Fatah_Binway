<?php
include '../config/koneksi.php';
/** @var mysqli $conn */

$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];
$kategori = $_POST['kategori'];
$status = "Tersedia";

$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

move_uploaded_file($tmp,
"../assets/img/".$gambar);

$query = mysqli_query($conn,
"INSERT INTO buku VALUES
(NULL,
'$judul',
'$penulis',
'$penerbit',
'$tahun_terbit',
'$kategori',
'$gambar',
'$status')");

if($query){
    header("Location: data_buku.php");
}else{
    echo "Data gagal disimpan";
}
?>