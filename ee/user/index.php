<html>
    <head>
        <title>User Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <center><h6 style="margin-top: 20px; text-shadow: 2px 2px 2px lightgray;">[Halaman User]</h6></center> 
<?php 
session_start();
if($_SESSION['status']!='login'){
    header('location:login_admin.php?pesan=belum_login');
}
?>

<center><h1 style="text-shadow: 2px 2px 2px lightgray;">Selamat Datang di BUKUSTORE!</h1></center>
<center></h4></center>


<div class="container" style="margin: 70px auto;">
<div class="row">
    <div class="col-md-10" style="margin-left: 110px;">
        <div class="card">
            <div class="card-header">
                <marquee direction="right"><h3 style="text-shadow: 2px 2px 2px lightgray;">~ Welcome <?php
        include '../koneksi.php';
        $email= $_SESSION['email'];
        $anggota = mysqli_query($koneksi,"select * from anggota where email = '$email'" );
        foreach($anggota as $nama){
            echo $nama['nama'];
        }
        ?> anda telah login ~</h3></marquee>
            </div>
            <div class="card-body" style="margin-right:20px">
<div class="margin" style="margin-left: 20px;">

    <a href="update-anggota.php?id_anggota=<?php echo $nama['id_anggota']?>" class="btn btn-primary" style="margin-top: 10px; box-shadow: 2px 2px 2px lightgray; margin-bottom: 10px;">Customize</a>
    <a href="pesan.php">Pesanan anda</a>

    <table class="table" border="1" cellpadding="8" cellspacing="0" style="box-shadow: 2px 2px 2px lightgray;">
    <thead class="thead-dark">
        <tr>
            <th style="text-align:center;">ID Buku</th>
            <th style="text-align:center;">Katalog</th>
            <th style="text-align:center;">Judul Buku</th>
            <th style="text-align:center;">Pengarang</th>
            <th style="text-align:center;">Tahun terbit</th>
            <th style="text-align:center;">Penerbit</th>
            <th style="text-align:center;">Aksi</th>
        </tr>
        </thead>
            <?php 
        include '../koneksi.php';
        $buku = mysqli_query($koneksi, "select*from buku");
        foreach($buku as $row){
            echo "<tr>";
            echo "<td>".$id = $row['id_buku'] ."</td>";
            echo "<td>".$katalog = $row['id_katalog']."</td>";
            echo "<td>".$judul = $row['judul_buku']."</td>";
            echo "<td>".$pengarang = $row['pengarang']."</td>";
            echo "<td>".$thn_terbit = $row['thn_terbit']."</td>";
            echo "<td>".$penerbit = $row['penerbit']."</td>";
            ?>
            
            <td>
            <a href="keranjang.php?id_buku=<?php echo $row['id_buku']; ?> & action=add" class="btn btn-warning" style="box-shadow: 2px 2px 2px lightgray;">pesan</a>
            </td>

            <?php
            echo "</tr>";
        }
        
        ?>
        </tr>
    </div>
</div>
</div>
</div>
</div>
</table>
<a href="../logout.php" class="btn btn-dark" style="margin-top: 10px; box-shadow: 2px 2px 2px lightgray; margin-bottom: 10px;">LOGOUT</a>
</div>
</body>
</html>