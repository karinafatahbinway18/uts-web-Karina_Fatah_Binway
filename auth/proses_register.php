<?php

include '.. /config/koneksi.php';
/** @var mysqli $conn */

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "INSERT INTO users VALUES 
(NULL,'$nama','$username','$password')";

mysqli_query($conn, $query);

header("Location: login.php");

?>