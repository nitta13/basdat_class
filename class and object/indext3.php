<?php
//class smkjp1

class smkjp1{
    //property
    var $guru;
    var $murid;

    //function berdiri
    function berdiri(){
        return "berdri dengan tegap";
    }

    function berlari(){
        return "berlari 1000 langkah";
    }
}
//intansiasi 
$sekolah = new smkjp1();

// eksperimen
$smkjpone = new smkjp1();

// isi property
$sekolah->guru = "Pak Saipul";
$sekolah->murid = "Ahmad K";

// tampilkan dari objek $sekolah
echo $sekolah->guru," ",$sekolah->berdiri();
echo "<br />";
echo $sekolah->murid," ",$sekolah->berlari();
echo "<br />";

// tampilkakn dari objek $smkjpone
echo $smkjpone->guru,$smkjpone->berlari();
echo "<br/>";
echo $smkjpone->murid,$smkjpone->berdiri();

?>