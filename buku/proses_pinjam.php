<?php
include '../config/koneksi.php';
/** @var mysqli $conn */

$id_buku = $_POST['id_buku'];
$nama_peminjam = $_POST['nama_peminjam'];
$tanggal_pinjam = $_POST['tanggal_pinjam'];
$tanggal_kembali = $_POST['tanggal_kembali'];
$status = "Dipinjam";

$query = mysqli_query($conn,
"INSERT INTO peminjaman VALUES
(NULL,
'$id_buku',
'$nama_peminjam',
'$tanggal_pinjam',
'$tanggal_kembali',
'$status')");

mysqli_query($conn,
"UPDATE buku SET status='Dipinjam'
WHERE id='$id_buku'");

if($query){
    header("Location:data_peminjaman.php");
}else{
    echo "Gagal meminjam buku";
}
?>