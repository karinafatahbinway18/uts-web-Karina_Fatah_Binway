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
        <link rel="stylesheet" href="assets"style.css>
    </head>
    <body>
        <div class="navbar">
            <a href="dashboaard.php">Dashboard</a>
            <a href="buku/data_buku.php">Data buku</a>
            <a href="auth/logout.php">Logout</a>
        </div>

        <div class="container">
            <div class="card">
                <h2>Dashboard</h2>
                <p>Selamat datang,
                    <?php echo $_SESSION['username']; ?>
                </p>
                <h3>Total buku: <?php echo $jumlah; ?> </h3>

            </div>

        </div>


    </body>
</html>