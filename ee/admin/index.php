<html>
    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <center><h6 style="margin-top: 20px; text-shadow: 2px 2px 2px lightgray;">[Halaman Admin]</h6></center> 
<?php 
session_start();
if($_SESSION['status']!='login'){
    header('location:login_admin.php?pesan=belum_login');
}

include '../koneksi.php';
        // ambil data semua dari table buku
        $buku = mysqli_query($koneksi, "select*from buku");
        $anggota = mysqli_query($koneksi, "select*from anggota");

        // jumlahkan data yang ada di table
        $jumlah_buku = mysqli_num_rows($buku);
        $jumlah_anggota = mysqli_num_rows($anggota);

?>

<center><h1 style="text-shadow: 2px 2px 2px lightgray;">Selamat Datang di BUKUSTORE!</h1></center>

<center></h4></center>
<div class="container" style="margin: 70px auto;">
<div class="row">
    <div class="col-md-11" style="margin-left: 60px;">
        <div class="card">
            <div class="card-header">
                <marquee direction="right"><h3 style="text-shadow: 2px 2px 2px lightgray;">~ Welcome <?php echo $_SESSION['admin']?> anda telah login ~</h3></marquee>
            </div>
            <div class="card-body" style="margin-right:20px">
<div class="margin" style="margin-left: 20px;">
    <h1 style="text-shadow: 2px 2px 2px lightgray; margin-bottom: 30px;">Data Buku</h1>
    <button><a href="sandbox.php">Sandbox</a></button>
    <button><a href="pesan.php">Paket</a></button>
    <h3>Total Buku Tersedia : <?php echo $jumlah_buku; ?></h3>
    <h3> Total Semua Harga Buku :
<?php
$db = mysqli_query($koneksi, "SELECT * FROM buku;");
while ($r = mysqli_fetch_array($db)) {
$harga[] = $r['harga'];
}
$totalHarga = array_sum($harga);
echo "Rp. " . number_format($totalHarga) . " ,-";

?>
</h3>
    <a href="tambah.php" class="btn btn-md btn-primary" style="margin-bottom: 10px; box-shadow: 2px 2px 2px lightgray;">Tambah Data Buku</a>
    <a href="cetak_buku.php" class="btn btn-md btn-primary" style="margin-bottom: 10px; box-shadow: 2px 2px 2px lightgray;">Cetak Buku</a>
    <table class="table" border="1" cellpadding="8" cellspacing="0" style="box-shadow: 2px 2px 2px lightgray;">
    <thead class="thead-dark">
        <tr>
            <th style="text-align:center;">ID Buku</th>
            <th style="text-align:center;">Katalog</th>
            <th style="text-align:center;">Judul Buku</th>
            <th style="text-align:center;">Pengarang</th>
            <th style="text-align:center;">Tahun terbit</th>
            <th style="text-align:center;">Penerbit</th>
            <th style="text-align:center;">Harga</th>
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
            echo "<td>".$harga = $row['harga']."</td>";
            ?>
            <td>
                <a href="update.php?id_buku=<?php echo $row['id_buku']; ?>" class="btn btn-warning" style="box-shadow: 2px 2px 2px lightgray;">Edit</a>
                <a href="hapus.php?id_buku=<?php echo $row['id_buku']; ?>" class="btn btn-danger" style="box-shadow: 2px 2px 2px lightgray;">Hapus</a>
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

<hr>
<h1 style="text-shadow: 2px 2px 2px lightgray; margin-bottom: 30px;">Data Anggota</h1>
    <h3>Total Anggota Tersedia : <?php echo $jumlah_anggota; ?></h3>
    <a href="add_anggota.php" class="btn btn-md btn-success" style="margin-bottom: 10px; box-shadow: 2px 2px 2px lightgray;">Tambah Anggota</a>
    <a href="cetak_anggota.php" class="btn btn-md btn-success" style="margin-bottom: 10px; box-shadow: 2px 2px 2px lightgray;">Cetak</a>
    <table class="table" border="1" cellpadding="8" cellspacing="0" style="box-shadow: 2px 2px 2px lightgray;">
    <thead class="thead-dark">
        <tr>
            <th style="text-align:center;">ID Anggota</th>
            <th style="text-align:center;">Nama</th>
            <th style="text-align:center;">No Telepon</th>
            <th style="text-align:center;">Alamat</th>
            <th style="text-align:center;">Email</th>
            <th style="text-align:center;">Password</th>
        </tr>
        </thead>
            <?php 
        include '../koneksi.php';
        $anggota = mysqli_query($koneksi, "select*from anggota");
        foreach($anggota as $row){
            echo "<tr>";
            echo "<td>".$id = $row['id_anggota'] ."</td>";
            echo "<td>".$nama = $row['nama']."</td>";
            echo "<td>".$no_telp = $row['no_telp']."</td>";
            echo "<td>".$alamat = $row['alamat']."</td>";
            echo "<td>".$email = $row['email']."</td>";
            echo "<td>".$pass = $row['password']."</td>";
            ?>
            
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

<a href="../logout.php" class="btn btn-dark" style="margin-top: 10px; box-shadow: 2px 2px 2px lightgray; margin-bottom:10px;">LOGOUT</a>
</div>
</body>
</html>