<?php

session_start();

if(!isset($_SESSION['username'])){
    header("Location: ../auth/login.php");
}

include '../config/koneksi.php';
/** @var mysqli $conn */

$query = mysqli_query($conn,

"SELECT peminjaman.*,
buku.judul

FROM peminjaman

JOIN buku
ON peminjaman.id_buku = buku.id

ORDER BY peminjaman.id DESC");

?>

<!DOCTYPE html>
<html>
<head>

<title>Data Peminjaman</title>

<link rel="stylesheet"
href="../assets/CSS/style.css">

</head>

<body>

<div class="navbar">

    <div class="logo">
        📚 Magic Library
    </div>

    <div class="menu">

        <a href="../dashboard.php">
            Dashboard
        </a>

        <a href="data_buku.php">
            Data Buku
        </a>

        <a href="data_peminjaman.php">
            Peminjaman
        </a>

        <a href="../auth/logout.php">
            Logout
        </a>

    </div>

</div>

<div class="container">

    <div class="card">

        <h2>Data Peminjaman Buku</h2>

        <table>

            <tr>

                <th>No</th>
                <th>Nama Peminjam</th>
                <th>Judul Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Status</th>

            </tr>

            <?php
            $no = 1;

            while($data =
            mysqli_fetch_array($query)){
            ?>

            <tr>

                <td>
                    <?php echo $no++; ?>
                </td>

                <td>
                    <?php echo $data['nama_peminjam']; ?>
                </td>

                <td>
                    <?php echo $data['judul']; ?>
                </td>

                <td>
                    <?php echo $data['tanggal_pinjam']; ?>
                </td>

                <td>

            <?php
            if($data['status'] == 'Dipinjam'){
            ?>

                <a href="kembalikan_buku.php?id=<?php echo $data['id']; ?>"
                class="btn-kembali">

                    Kembalikan

                </a>

            <?php
            }else{
            ?>

                <span class="status-kembali">
                    Sudah Kembali
                </span>

            <?php } ?>

            </td>

         </tr>

            <?php } ?>

        </table>

    </div>

</div>

</body>
</html>