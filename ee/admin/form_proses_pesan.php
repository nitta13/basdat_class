<html>
    <head>
        <title>Proses Pengiriman</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="box-tambah">
            <h1>Memproses Pengiriman</h1>

            <?php
            include '../koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"select * from orders where id = '$id'");
            // Data yang sudah di cocokan dengan id_buku, di MELEDAK menggunakan fetch array sehingga bisa di taro satu-satu di forennya
            while($meledak = mysqli_fetch_array($data)){
            ?>

            <form action="proses_pesan.php" method="post">
                <!-- ID BUKU -->
                <input type="hidden" name="id" value="<?php echo $meledak['id']; ?>">
                <!-- ID BUKU -->
                <div class="lapisInput">
                    <label>Status</label>
                    <input type="number" name="status"  value="<?php echo $meledak['status']; ?>">
                    <br>
            </div>
            <div class="tombol-login">
                <input type="submit" value="submit">
            </div>
            </div>
            </form>
            <?php
            }
            ?>
        </body>
</html>