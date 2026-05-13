<?php
include '../config/koneksi.php';
/** @var mysqli $conn */

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM buku WHERE id='$id'");
$row = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Buku</title>
        <link rel="stylesheet" href="../assets/style.css">
    </head>
    <body>

    <div class="container">
    <div class="card">

        <h2>Edit Buku</h2>

        <form action="proses_edit.php" method="POST">

            <input type="hidden" name="id" value="<?= $row['id']; ?>">
            <input type="text" name="judul" value="<?= $row['judul']; ?>" required><br><br>
            <input type="text" name="penerbit" value="<?= $row['penerbit']; ?>" required><br><br>
            <input type="text" name="tahun_terbit" value="<?= $row['tahun_terbit']; ?>" required><br><br>
            <input type="text" name="kategori" value="<?= $row['kategori']; ?>" required><br><br>

            <button type="submit">Update</button>

</form>

    </div>
</div>

        
    </body>
</html>