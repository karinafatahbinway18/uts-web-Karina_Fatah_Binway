<?php

include '../config/koneksi.php';
/** @var mysqli $conn */

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$query = mysqli_query($conn,
"INSERT INTO users VALUES
(NULL, '$nama', '$username', '$password')");

if($query){

    header("Location: login.php");

}else{

    echo "Register gagal";

}

?>