<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="box-tambah">
            <h1>Register Your Account</h1>
            <form action="../admin/proses_tambah_anggota.php" method="post">
                <div class="lapisInput">
                    <label>nama</label>
                    <input type="text" name="nama">
                    <br>
                <label>No telepon</label>
                <input type="number" name="no_telp" >
                <br>
                <label>Alamat</label>
                <input type="text" name="alamat" >
                <br>
                <label>Email</label>
                <input type="email" name="email">
                <br>
                <label>Password</label>
                <input type="password" name="pass">
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