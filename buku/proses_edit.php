<?php

include '../config/koneksi.php';
/** @var mysqli $conn */

$id = $_POST['id'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];
$kategori = $_POST['kategori'];

$query = mysqli_query($conn, "UPDATE buku SET
    judul='$judul',
    penulis='$penulis',
    penerbit='$penerbit',
    tahun_terbit='$tahun_terbit',
    kategori='$kategori'
    WHERE id='$id'
");

if($query){
    header("Location: data_buku.php");
}else{
    echo "Data gagal diupdate";
}
?>
