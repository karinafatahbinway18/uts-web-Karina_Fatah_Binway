<!DOCTYPE html>
<html>
<head>

<title>Tambah Buku</title>

<link rel="stylesheet"href="../assets/CSS/style.css">

</head>
<body>

<div class="container">

    <div class="edit-card">

        <!-- HEADER -->
        <div class="form-header">

            <h2>Tambah Buku</h2>

            <a href="data_buku.php"
            class="btn-close">

                ✖

            </a>

        </div>

        <form action="proses_tambah.php"
        method="POST"
        enctype="multipart/form-data">

            <input type="text"
            name="judul"
            placeholder="Judul Buku"
            required>

            <input type="text"
            name="penulis"
            placeholder="Penulis"
            required>

            <input type="text"
            name="penerbit"
            placeholder="Penerbit"
            required>

            <input type="text"
            name="tahun_terbit"
            placeholder="Tahun Terbit"
            required>

            <select name="kategori" required>

                <option value="">
                    -- Pilih Kategori --
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

            <input type="file"
            name="gambar"
            required>

            <button type="submit">
                Simpan
            </button>

        </form>

    </div>

</div>

</body>
</html>