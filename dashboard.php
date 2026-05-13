<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: auth/login.php");
}

include 'config/koneksi.php';

$total = mysqli_query($conn,"SELECT * FROM buku");
$jumlah = mysqli_num_rows($total);
?>

<!DOCTYPE html>
<html>
<head>

<title>Dashboard</title>

<link rel="stylesheet" href="assets/CSS/style.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

<div class="navbar">

    <div class="logo">
        📚 Magic Library
    </div>

    <div class="menu">

        <a href="dashboard.php">Dashboard</a>

        <a href="buku/data_buku.php">Data Buku</a>

        <a href="auth/logout.php">Logout</a>

    </div>

</div>

<div class="hero">

    <img src="assets/img/dashboard.jpg" class="hero-img">

    <div class="overlay">

        <div class="hero-text">

            <h1>Magic Books</h1>

            <p>
                Kelola data perpustakaan
                dengan mudah dan modern.
            </p>

            <a href="buku/data_buku.php"
            class="btn-hero">
                Lihat Buku
            </a>

            <div class="hero-info">

                <div class="info-box">

                    <i class="fa-solid fa-book"></i>

                    <h2>Total Buku</h2>

                    <p>
                        <?php echo $jumlah; ?>
                    </p>

                </div>

                <div class="info-box">

                    <i class="fa-solid fa-user"></i>

                    <h2>User Login</h2>

                    <p>
                        <?php echo $_SESSION['username']; ?>
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>