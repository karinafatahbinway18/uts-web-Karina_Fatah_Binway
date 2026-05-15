<?php

include '../config/koneksi.php';
/** @var mysqli $conn */

$id = $_GET['id'];

mysqli_query($conn,
"UPDATE peminjaman SET
status='Dikembalikan'
WHERE id='$id'");

header("Location: data_peminjaman.php");

?>