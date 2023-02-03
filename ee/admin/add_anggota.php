<html>
    <head>
        <title>Tambah Data Anggota</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="box-anggota">
            <h1>Tambah Data Anggota</h1>
            <form action="proses_tambah_anggota.php" method="post">
                <div class="lapisInput">
                    <label>Nama</label>
                    <input type="text" name="nama">
                    <br>
                    <label>No Telp</label>
                    <input type="number" name="telp">
                    <br>
                    <label>Alamat</label>
                    <input type="text" name="alamat">
                    <br>
                    <label>Email</label>
                    <input type="email" name="email">
                    <br>
                    <label>Password</label>
                    <input type="text" name="password">
                    <br>
                </div>
                    <div class="tombol-login">
                        <input type="submit" value="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="reset" value="reset">
                    </div>
                </form>
        </div>
        </body>
</html>