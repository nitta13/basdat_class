<?php

session_start();

// menghapus semua sesi
session_destroy();

// mengarahkan halaman dan memberikan pesan logout
header("location:../LOGIN/login.php?pesan=logout");

?>