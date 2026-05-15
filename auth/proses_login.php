<?php
session_start();
include '../config/koneksi.php';
/** @var mysqli $conn */


$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn,
"SELECT * FROM users WHERE username='$username'");

$data = mysqli_fetch_assoc($query);

if($data && password_verify($password, $data['password'])){

    $_SESSION['username'] = $data['username'];
    $_SESSION['role'] = $data['role'];

    header("Location:../dashboard.php");

}else{

    echo "
    <script>
        alert('Login gagal');
        window.location='login.php';
    </script>
    ";
}
?>