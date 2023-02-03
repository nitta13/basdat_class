<html>
    <head>
        <title>Login Ges</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="box">
            <h1>Login Aplikasi</h1>
            <h6>User Access</h6>

            <form action="proses.php" method="post">
                <div class="lapisInput">
                    <labe>Email :</label>
                    <input type="email" name="email" id="email">
                    <br>
                    <label>Password :</label>
                    <input type="password" name="pass" id="pass">
                    <br>
                </div>
                <div class="tombol-login">                           
                    <input type="submit" value="login">
                </div>
                <br>
                <div class="klik">                          
                    <label>admin klik <a href="../admin/login_admin.php">sini</a></label>
                    <tr>
                        <td>
                            <h4>anda belum punya akun? Daftar <a href="daftar.php">Disini</a></h4>
                        </td>
                    </tr>
                </div>
            </form>
        </div>
    </body>
</html>