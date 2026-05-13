<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: ../auth/login.php");
}

include '../config/koneksi.php';
/** @var mysqli $conn */

$cari = '';

if(isset($_GET['cari'])){

    $cari = $_GET['cari'];

    $query = mysqli_query($conn,
    "SELECT * FROM buku 
    WHERE judul LIKE '%$cari%'");

}else{

    $query = mysqli_query($conn,
    "SELECT * FROM buku");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
    <link rel="stylesheet" href="../assets/CSS/style.css">
</head>

<body>

<div class="navbar">
    <a href="../dashboard.php">Dashboard</a>
    <a href="data_buku.php">Data Buku</a>
    <a href="../auth/logout.php">Logout</a>
</div>

<div class="container">

<div class="card">

    <h2>Data Buku</h2>

    <form method="GET" class="search-box">
        <input type="text"
        name="cari"
        placeholder="Cari Judul Buku"
        value="<?php echo $cari; ?>">

        <button type="submit">Cari</button>

    </form>

    <br>

    <a href="tambah_buku.php" class="btn-tambah">
    + Tambah Buku
</a>

    <br><br>

    <table border="1" cellpadding="10">

        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;

        while($data = mysqli_fetch_array($query)){
        ?>

        <tr>

    <td><?php echo $no++; ?></td>
    <td><?php echo $data['judul']; ?></td>
    <td><?php echo $data['penulis']; ?></td>
    <td><?php echo $data['penerbit']; ?></td>
    <td><?php echo $data['tahun_terbit']; ?></td>

    <td>

        <a href="edit_buku.php?id=<?php echo $data['id']; ?>">
            Edit
        </a>

        |

        <a href="hapus_buku.php?id=<?php echo $data['id']; ?>"
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