<?php
// include koneksi
include '../koneksi.php';

// Variabel yang menyamakan dari from update ke mysqli query
$id = $_POST['id'];
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];


// menginput database
$input = mysqli_query($koneksi,"update anggota set nama='$nama',no_telp='$no_telp',alamat='$alamat' where id_anggota='$id'");


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