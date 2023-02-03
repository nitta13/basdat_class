<html>
    <head>
        <title>Update Data</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="box-tambah">
            <h1>Ubah Data Buku</h1>

            <?php
            include '../koneksi.php';
            $id_buku = $_GET['id_buku'];
            $data = mysqli_query($koneksi,"select * from buku where id_buku = '$id_buku'");
            // Data yang sudah di cocokan dengan id_buku, di MELEDAK menggunakan fetch array sehingga bisa di taro satu-satu di forennya
            while($meledak = mysqli_fetch_array($data)){
            ?>

            <form action="proses_update.php" method="post">
                <!-- ID BUKU -->
                <input type="hidden" name="id_buku" value="<?php echo $meledak['id_buku']; ?>">
                <!-- ID BUKU -->
                <div class="lapisInput">
                    <label>ID Katalog</label>
                    <input type="number" name="id_katalog"  value="<?php echo $meledak['id_katalog']; ?>">
                    <br>
                    <label>Masukkan Judul Buku</label>
                    <input type="text" name="judul_buku" value="<?php echo $meledak['judul_buku']; ?>">
                    <br>
                    <label>Masukkan Pengarang</label>
                    <input type="text" name="pengarang" value="<?php echo $meledak['pengarang']; ?>">
                    <br>
                <label>Masukkan Tahun Terbit</label>
                <input type="date" name="thn_terbit"value="<?php echo $meledak['thn_terbit']; ?>">
                <br>
                <label>Masukkan Penerbit</label>
                <input type="text" name="penerbit" value="<?php echo $meledak['penerbit']; ?>">
                <br>
                <label>Masukkan Harga</label>
                <input type="number" name="harga" value="<?php echo $meledak['harga']; ?>">
                <br>
            </div>

            <div class="tombol-login">
                <input type="submit" value="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="reset" value="reset">
            </div>
            </div>
            </form>
            <?php
            }
            ?>
        </body>
</html>