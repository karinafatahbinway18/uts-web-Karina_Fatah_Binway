<?php

include '../config/koneksi.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "INSERT INTO users VALUES 
(NULL, '$nama', '$username', '$password')";


mysqli_query($conn, $query);


header("location: login.php");

?>