<?php
// include koneksi
include 'koneksi.php';

// menangkap data yang ada di form
$katalog = $_POST['id_katalog'];
$judul_buku = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$thn_terbit = $_POST['thn_terbit'];
$penerbit = $_POST['penerbit'];

// menginput database
$input = mysqli_query($koneksi,"insert into buku values('','$katalog','$judul_buku','$pengarang','$thn_terbit','$penerbit')");


if($input){
    ?>
    <script>
        alert('Data berhasil Ditambahkan!!');
        window.location = "tambah.php";
    </script>
    <?php
}else{
    ?>
    <script>
        alert('Data Gagal Ditambahkan');
        window.location = "tambah.php"
    </script>
    <?php
}

?>