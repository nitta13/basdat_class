<?php

$warnaterang = ['kuning','hijau','pink'];
$warnagelap = ['hitam','abu-abu','cokelat'];

// Gabungkan 2 array tersebut menjadi 1
$warna_warna = array_merge($warnaterang,$warnagelap);

// Array_merge bisa ditambahkan lebih dari 2
$semua_warna = array_merge(
    $warnaterang,
    $warnagelap,
    ['Magenta','Cyan','Hijau Kelabu']
);

// unpacking untuk mengekstra array menggunakan ...
$list_buah_lokal = ['mangga','rambutan'];
$list_buah = ['kurma','anggur', $list_buah_lokal ,'kismis'];

// kurma, anggur, rambutam, mangga, kismis

// Explode array berfungsi memecah-belah string lalu diubah ke dalam array

// Expload ada 2 parameter : delimiter(pemisah), string sasaran (yang kita pecah menjadi array)

$siswa = "andi budi dono kasino indro";
// var_dump(explode(" ", $siswa));

// Empload fungsi kebalikannya expload 
// Empload dia 2 paramete : glue (penggabung), array sasaran (sasaran yang akan kita gabung menjad string)

$siswa_pintar = ['reta','agus','novan'];//array
$siswa_jago = implode(' wkwk ',$siswa_pintar);//string

echo $siswa_jago;

?>