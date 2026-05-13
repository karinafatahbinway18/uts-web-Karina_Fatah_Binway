<!DOCTYPE html>
<html>
    <head>
        <title>Tambah buku</title>
        <link rel="stylesheet" href="../assets/style.css">
    </head>
    <body>
        <div class="container">

            <div class="card">

                <h2>Tambah buku</h2>

                <form action="proses_tambah.php" method="POST">
                    <input type="text" name="judul" placeholder="Judul Buku"required> <br><br>
                    <input type="text" name="penulis" placeholder="Penulis" required><br><br>
                    <input type="text" name="penerbit" placeholder="Penerbit" required><br><br>
                    <input type="text" name="tahun_terbit" placeholder="Tahun Terbit" required><br><br>
                    <input type="text" name="kategori" placeholder="Kategori"required><br><br>

                    <button type="submit">Simpan</button>
                </form>

            </div>

        </div>
    </body>
</html>