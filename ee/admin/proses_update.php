<?php
// include koneksi
include '../koneksi.php';

// menangkap data yang ada di form
$id_buku = $_POST['id_buku'];
$katalog = $_POST['id_katalog'];
$judul_buku = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$thn_terbit = $_POST['thn_terbit'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];

// menginput database
$input = mysqli_query($koneksi,"update buku set id_katalog='$katalog',judul_buku='$judul_buku',pengarang='$pengarang',thn_terbit='$thn_terbit',penerbit='$penerbit',harga='$harga' where id_buku='$id_buku'");


if($input){
    ?>
    <script>
        alert('Data berhasil Diubah!!');
        window.location = "index.php";
    </script>
    <?php
}else{
    ?>
    <script>
        alert('Data Gagal Diubah');
        window.location = "tambah.php"
    </script>
    <?php
}

?>