<?php
include '../config/koneksi.php';
/** @var mysqli $conn */

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM buku WHERE id='$id'");
$d = mysqli_fetch_array($data);
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

            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
            <input type="text" name="judul" value="<?php echo $d['judul']; ?>">
            <input type="text" name="penulis" value="<?php echo $d['penulis']; ?>">
            <input type="text" name="penerbit" value="<?php echo $d['penerbit']; ?>">
            <input type="text" name="tahun_terbit" value="<?php echo $d['tahun_terbit']; ?>">
            <button type="submit">Update</button>

</form>

    </div>
</div>

        
    </body>
</html>