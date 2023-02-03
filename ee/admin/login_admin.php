<html>
    <head>
        <title>Login Ges</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="box">
            <h1>Login Aplikasi</h1>
            <h5>Admin Access</h5>
            <form action="proses_admin.php" method="post">
                    <div class="lapisInput">
                        <labe>Username :</label>
                        <input type="text" name="admin" id="admin">
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
                            <label>user klik <a href="../user/login.php">sini</a></label>
                        </div>
                    </form>
    </div>
    </body>
</html>