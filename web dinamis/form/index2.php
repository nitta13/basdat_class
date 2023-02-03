<html>
    <head>
        <title>Menggunakan Metode Post</title>
    </head>
    <body>
        <h1>Menggunakan metode Post</h1>
        <form method="POST">
            <!-- Passing data di dalam body request tanpa menampilkan secara url -->
        </form>
        <form>
            <div>
                <label>Email</label>
                <input type="email" name="email">
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <div>
                <button>Login</button>
            </div>
            <?php
            $email = @$_POST['email'];
            $password  = @$_POST['password'];

            echo "Email = {$email} <br>";
            echo "Password = {$password} <br>";
            ?>
        </form>
    </body>
</html>