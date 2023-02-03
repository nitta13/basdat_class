<html>
    <head>
        <title>Admin Page</title>
    </head>
    <body>
        
    <?php
        session_start();
        if($_SESSION['status']!='login'){
            header('location:../login_admin.php?pesan=belum_login');
        }
        
        ?>

        <!-- end -->
        <h4> Welcome <?php echo $_SESSION['admin']?> anda telah login</h4> 

        <h1>Selamat Datang</h1>
        <h3>Halaman Admin</h3>
        
        <!-- Cek halaman apakah sudah Login atau belum -->
        
        <h3>Data Buku</h3>
        <table border="2">
        <tr>
            <th>ID_Buku</th>
            <th>Katalog</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
            <th>Aksi</th>
        </tr>

        <form action="tambah.php">
            <button>Tambah Data Disini!</button>
        </form>

        <!-- menampilkan data table -->
        <?php
        include '../koneksi.php';
        $buku = mysqli_query($koneksi, "select * from buku");
        foreach ($buku as $row){
            echo "<tr>";
            echo "<td>".$id_buku = $row['id_buku']."</td>";
            echo "<td>".$katalog = $row['id_katalog']."</td>";
            echo "<td>".$judul_buku = $row['judul_buku']."</td>";
            echo "<td>".$pengarang = $row['pengarang']."</td>";
            echo "<td>".$thn_terbit = $row['thn_terbit']."</td>";
            echo "<td>".$penerbit = $row['penerbit']."</td>";
            ?>
            <td><a href="hapus.php?id_buku=<?php echo $row['id_buku'] ?>">HAPUS</a></td>
        <?php
            echo "</tr>";
        }
        ?>  
        </table>
        <a href="../logout.php">LOGOUT</a>
    </body>
    </html>