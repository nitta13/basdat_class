<html>
    <head>
        <title>
            DATA BUKU
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="kutip">
            <h1>`</h1>
        </div>
        <div class="judul">
            <h1>Menampilkan Data Buku</h1>
        </div>
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
        include 'koneksi.php';
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
            <td><a href="../delete-data/proses.php?id_buku=<?php echo $row['id_buku'] ?>">HAPUS</a></td>
        <?php
            echo "</tr>";
        }
        ?>  

        </table>
    </body>
</html>