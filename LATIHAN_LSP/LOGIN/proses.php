<?php
session_start();
include 'koneksi.php';

// Menangkap data yang dikirim dari Login
$username = $_POST['user'];
$password = $_POST['pass'];

// Menyeleksi data dan dicocokan table admin xampp
$data = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");


// Menghitung jumlah data yang di temukan
$cek_data = mysqli_num_rows($data);

if($cek_data > 0) {
    $_SESSION['user']=$username;
    $_SESSION['status']='login';
    header("location:user/index.php");
}else{
    header("location:login.php?pesan=gagal");
}

?>
