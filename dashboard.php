<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: auth/login.php");
}

include 'config/koneksi.php';

/* TOTAL BUKU */

$total = mysqli_query($conn,"SELECT * FROM buku");
$jumlah = mysqli_num_rows($total);

/* TOTAL USER */

$totalUser = mysqli_query($conn,
"SELECT * FROM users");

$jumlahUser = mysqli_num_rows($totalUser);

/* TOTAL PEMINJAMAN */

$totalPinjam = mysqli_query($conn,
"SELECT * FROM peminjaman");

$jumlahPinjam = mysqli_num_rows($totalPinjam);

/* REKOMENDASI BUKU */

$rekomendasi = mysqli_query($conn,

"SELECT * FROM buku
ORDER BY id DESC
LIMIT 3");

/* BUKU TERPOPULER */

$terlaris = mysqli_query($conn,

"SELECT buku.judul,
COUNT(peminjaman.id_buku) AS total

FROM peminjaman

JOIN buku
ON peminjaman.id_buku = buku.id

GROUP BY peminjaman.id_buku

ORDER BY total DESC

LIMIT 5");

?>

<!DOCTYPE html>
<html>
<head>

<title>Dashboard</title>

<link rel="stylesheet"
href="assets/CSS/style.css">

<link rel="stylesheet"

href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

<div class="navbar">

    <div class="logo">
        📚 Magic Library
    </div>

    <div class="menu">

        <a href="dashboard.php">
            Dashboard
        </a>

        <a href="buku/data_buku.php">
            Data Buku
        </a>

        <a href="buku/data_peminjaman.php">
            Peminjaman
        </a>

        <a href="auth/logout.php">
            Logout
        </a>

    </div>

</div>

<!-- HERO -->

<div class="hero">

    <img src="assets/img/dashboard.jpg"
    class="hero-img">

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

            <!-- STATISTIK -->

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

                <div class="info-box">

                    <i class="fa-solid fa-users"></i>

                    <h2>Total User</h2>

                    <p>

                        <?php echo $jumlahUser; ?>

                    </p>

                </div>

                <div class="info-box">

                    <i class="fa-solid fa-book-open"></i>

                    <h2>Peminjaman</h2>

                    <p>

                        <?php echo $jumlahPinjam; ?>

                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- REKOMENDASI BUKU -->

<div class="container">

    <div class="card">

        <h2>Rekomendasi Buku</h2>

        <div class="hero-info">

            <?php
            while($r =
            mysqli_fetch_array($rekomendasi)){
            ?>

            <div class="info-box">

                <img src="assets/img/<?php echo $r['gambar']; ?>"

                width="100%"

                style="border-radius:15px;
                margin-bottom:10px;
                height:250px;
                object-fit:cover;">

                <h3>

                    <?php echo $r['judul']; ?>

                </h3>

                <p>

                    <?php echo $r['kategori']; ?>

                </p>

            </div>

            <?php } ?>

        </div>

    </div>

</div>

<!-- BUKU TERPOPULER -->

<div class="container">

    <div class="card">

        <h2>Buku Terpopuler</h2>

        <table>

            <tr>

                <th>No</th>
                <th>Judul Buku</th>
                <th>Total Dipinjam</th>

            </tr>

            <?php
            $no = 1;

            while($t =
            mysqli_fetch_array($terlaris)){
            ?>

            <tr>

                <td>

                    <?php echo $no++; ?>

                </td>

                <td>

                    <?php echo $t['judul']; ?>

                </td>

                <td>

                    <?php echo $t['total']; ?>

                </td>

            </tr>

            <?php } ?>

        </table>

    </div>

</div>

</body>
</html>