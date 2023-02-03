<?php

function tisu($barang, $lembar, $uang){
    echo "<h2> Saat aku menggunakan ($barang) <h2>";
    echo "<h2> aku gunakan ($lembar) satu lembar! <h2>";
    echo "<h2> ($lembar) harganya ($uang) <h2>";
}


tisu("tisu", "satu lembar", 2000);

$a = ['saat','aku','menggunakan','tisu'];
$b = ['aku','gunakan','satu lembar','satu','lembar!'];
$c = ['satu lembar','harganya','dua ribu'];
    
$teks_1 = count($a);
$teks_2 = count($b);
$teks_3 = count($c);

var_dump($teks_1);
echo "<br />";
var_dump($teks_2);
echo "<br />";
var_dump($teks_3);

?>