<html>
    <head>
        <title>Form Get dan Post</title>
    </head>
    <body>
        <form>
            <div>
                <label>Nama</label><br>
                <input type="text" name="nama" placeholder="masukin nama">
            </div>      
            <div>
                <label>Email</label><br>
                <input type="email" name="email" placeholder="masukin email">
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
            <?php
                //@ berfungsi untuk mengubah nilai menjadi null jika bertanya tidak di isi 
                $nama = @$_GET['nama'];
                $email = @$_GET['email'];

                echo "Nama = {$nama} <br>";
                echo "Email = {$email}";
            ?>
        </form>
    </body>
</html>