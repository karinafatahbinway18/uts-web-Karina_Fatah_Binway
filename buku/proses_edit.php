<?php

include '../config/koneksi.php';
/** @var mysqli $conn */

$id = $_POST['id'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun= $_POST['tahun_terbit'];

mysqli_query($conn, "UPDATE buku SET
judul ='$judul',
penulis= '$penulis',
penerbit='$penerbit',
tahun_terbir='$tahun'
WHERE id='$id'");

header("Location: data_buku.php");

?>
