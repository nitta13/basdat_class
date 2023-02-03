<?php
// variabel Lokal hanya bisa di akses dari scape dimana dia di definiskan
$nama = "ganteng bingits";

function halodunia(){
    $nama = "Pak Saiful";
    echo $nama;
}
halodunia();// objek

echo $nama;

?>