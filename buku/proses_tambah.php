<?php 

include '../config/koneksi.php';
/** @var mysqli $conn */

$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun'];

mysqli_query($conn, "INSERT INTO buku VALUES(NULL,'$judul','$penulis','$penerbit','$tahun')");

header("Location: data_buku.php");

?>