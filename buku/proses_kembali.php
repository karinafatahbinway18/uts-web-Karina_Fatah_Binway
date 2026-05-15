<?php
include '../config/koneksi.php';
/** @var mysqli $conn */

$id = $_GET['id'];
$id_buku = $_GET['id_buku'];

mysqli_query($conn,
"UPDATE peminjaman
SET status='Dikembalikan'
WHERE id='$id'");

mysqli_query($conn,
"UPDATE buku
SET status='Tersedia'
WHERE id='$id_buku'");

header("Location:data_peminjaman.php");
?>