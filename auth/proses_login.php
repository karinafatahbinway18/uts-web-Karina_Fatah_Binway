<?php

session_start();

include '../config/koneksi.php';
/** @var mysqli $conn */

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn,
"SELECT * FROM users WHERE username='$username'");

$data = mysqli_fetch_assoc($query);

if($data){

    if(password_verify($password, $data['password'])){

        $_SESSION['username'] = $username;

        header("Location: ../dashboard.php");

    }else{

        echo "
        <script>
            alert('Password salah');
            window.location='login.php';
        </script>
        ";

    }

}else{

    echo "
    <script>
        alert('Username tidak ditemukan');
        window.location='login.php';
    </script>
    ";

}

?>