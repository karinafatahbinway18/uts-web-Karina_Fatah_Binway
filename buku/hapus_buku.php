<?php
include '../config/koneksi.php';
/** @var mysqli $conn */

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM buku WHERE id='$id'");

header("Location: data_buku.php");

?>