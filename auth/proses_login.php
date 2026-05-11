<?php

session_start();

include '../config/koneksi.php';

$username = $_POST['username'];
$password = md5 ($_POST['password']);

$query = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' AND password='$password'");

$cek  = mysqli_num_rows($query);

if ($cek > 0) {
    $_SESSION['username'] = $username;

    header("Location: ../dashboard.php");
}else{
    echo "
    <script>
    alert('Login gagal');
    window.location = 'login.php';
    </script>
    ";
}

?>