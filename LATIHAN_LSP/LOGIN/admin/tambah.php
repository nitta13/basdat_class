<html>
    <head>
        <title>Tambah Data</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div claas="box-tambah">
            <h1>Tambah Data</h1>
            <form action="proses_tambah.php" method="post">
                <div class="lapisInput">
                    <label>Masukkan Katalog</label>
                    <input type="number" name="katalog" placeholder="Masukkan Katalog">
                    <br>
                <label>Masukkan Judul Buku</label>
                <input type="text" name="judul_buku" placeholder="Masukkan Judul Buku">
                <br>
                <label>Masukkan Pengarang</label>
                <input type="text" name="pengarang" placeholder="Masukkan Pengarang">
                <br>
                <label>Masukkan Tahun Terbit</label>
                <input type="date" name="thn_terbit">
                <br>
                <label>Masukkan Penerbit</label>
                <input type="text" name="penerbit" placeholder="Masukkan Penerbit">
                <br>
            </div>

            <div class="button">

                <input type="submit" value="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="reset" value="reset">
            </div>
            </div>
            </form>
        </body>
</html>