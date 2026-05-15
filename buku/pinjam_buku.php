<?php
include '../config/koneksi.php';
/** @var mysqli $conn */

$id = $_GET['id'];

$data = mysqli_query($conn,
"SELECT * FROM buku WHERE id='$id'");

$row = mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html>
<head>
<title>Pinjam Buku</title>
<link rel="stylesheet" href="../assets/CSS/style.css">
</head>
<body>

<div class="container">
<div class="edit-card">

<h2>Pinjam Buku</h2>

<form action="proses_pinjam.php"
method="POST"></form>

<input type="hidden"
name="id_buku"
value="<?php echo $row['id']; ?>">

<input type="text"
value="<?php echo $row['judul']; ?>"
readonly>

<input type="text"
name="nama_peminjam"
placeholder="Nama Peminjam"
required>

<label>Tanggal Pinjam</label>
<input type="date"
name="tanggal_pinjam"
required>

<label>Tanggal Kembali</label>
<input type="date"
name="tanggal_kembali"
required>

<button type="submit">
Pinjam Buku
</button>

</form>
</div>
</div>
</body>
</html>