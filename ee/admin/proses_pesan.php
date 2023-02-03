<?php
// include koneksi
include '../koneksi.php';

// menangkap data yang ada di form
$id = $_POST['id'];
$status = $_POST['status'];

// menginput database
$proses = "update orders set status='$status' where id='$id'";

$input = mysqli_query($koneksi, $proses);


if($input){
    ?>
    <script>
        alert('Paket Telah Dikirim');
        window.location = "pesan.php";
    </script>
    <?php
}else{
    ?>
    <script>
        alert('Paket Gagal Dikirim');
        window.location = "pesan.php";
    </script>
    <?php
}

?>