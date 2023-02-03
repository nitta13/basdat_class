<html>
    <head>
        <title>Update Data</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="box-tambah">
            <h1>Customize Profile</h1>

            <?php
            include '../koneksi.php';
            // ambil dari tombol customize
            $id = $_GET['id_anggota'];
            // arahkan ke id_anggota
            $data = mysqli_query($koneksi,"select * from anggota where id_anggota = '$id'");
            // Data yang sudah di cocokan dengan id_anggota, di MELEDAK menggunakan fetch array sehingga bisa di taro satu-satu di forennya
            while($meledak = mysqli_fetch_array($data)){
            ?>

            <form action="proses-update.php" method="post">
                <!-- ID ANGGOTA -->
                <input type="hidden" name="id" value="<?php echo $meledak['id_anggota']; ?>">
                <!-- ID ANGGOTA -->
                <div class="lapisInput">
                    <label>Nama</label>
                    <input type="text" name="nama"  value="<?php echo $meledak['nama']; ?>">
                    <br>
                    <label>No telepon</label>
                    <input type="number" name="no_telp"  value="<?php echo $meledak['no_telp']; ?>">
                    <br>
                    <label>Alamat</label>
                    <input type="teks" name="alamat"  value="<?php echo $meledak['alamat']; ?>">
                    <br>
                    <label>Email</label>
                    <input type="email" name="email"  value="<?php echo $meledak['email']; ?>"disabled>
                    <br>
                    
                    <label>Password</label>
                    <input type="teks" name="pass"  value="<?php echo $meledak['password']; ?>"disabled>

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