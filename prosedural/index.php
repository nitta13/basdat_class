<?php

// Prosedural adalah pemograman yang tidak perlu adanya instansiasi, cukup menggunakan fungsi

// contoh dari Prosedural
echo date('d-m-Y');//fungsi tanpa ada objek

// contoh dari pendekatan Objek
$date = new DateTime();//Objek
echo $date->format('d-m-Y');

?>