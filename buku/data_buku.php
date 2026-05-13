<?php

session_start();

if(!isset($_SESSION['username'])){
    header("Location: ../auth/login.php");
}

include '../config/koneksi.php';
/** @var mysqli $conn */

$cari = "";

if(isset($_GET['cari'])){

    $cari = $_GET['cari'];

    $query = mysqli_query($conn,

    "SELECT * FROM buku
    WHERE kategori LIKE '%$cari%'"

    );

}else{

    $query = mysqli_query($conn,
    "SELECT * FROM buku");

}

?>

<!DOCTYPE html>
<html>
<head>

<title>Data Buku</title>

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

        <a href="../auth/logout.php">
            Logout
        </a>

    </div>

</div>

<div class="container">

    <div class="card">

        <h2>Data Buku</h2>

        <!-- FORM CARI -->

        <form method="GET">

            <select name="cari">

                <option value="">
                    Semua Kategori
                </option>

                <option value="Novel">
                    Novel
                </option>

                <option value="Komik">
                    Komik
                </option>

                <option value="Pelajaran">
                    Pelajaran
                </option>

                <option value="Teknologi">
                    Teknologi
                </option>

            </select>

            <button type="submit">
                Cari
            </button>

        </form>

        <br>

        <a href="tambah_buku.php"
        class="btn-tambah">

            Tambah Buku

        </a>

        <br><br>

        <table>

            <tr>

                <th>No</th>
                <th>Cover</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Kategori</th>
                <th>Tahun</th>
                <th>Aksi</th>

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

                    <img
                    src="../assets/img/<?php echo $data['gambar']; ?>"
                    width="80"
                    style="border-radius:10px;">

                </td>

                <td>
                    <?php echo $data['judul']; ?>
                </td>

                <td>
                    <?php echo $data['penulis']; ?>
                </td>

                <td>
                    <?php echo $data['kategori']; ?>
                </td>

                <td>
                    <?php echo $data['tahun_terbit']; ?>
                </td>

                <td>

                    <a href="edit_buku.php?id=<?php echo $data['id']; ?>"
                    class="btn-edit">

                        Edit

                    </a>

                    <a href="hapus_buku.php?id=<?php echo $data['id']; ?>"
                    class="btn-hapus"

                    onclick="return confirm('Yakin hapus data?')">

                        Hapus

                    </a>

                </td>

            </tr>

            <?php } ?>

        </table>

    </div>

</div>

</body>
</html>