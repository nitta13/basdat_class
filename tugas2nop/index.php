<?php
class jpone{
    var $kepsek;    
    var $guru;    
    var $murid;
    
    function lilik(){
        return "Pak lilik";
    }
    function saiful(){
        return "Pak saiful";
    }
    function hasan(){
        return "Hasan";
    }

}

$sekolah = new jpone();
$sekolah->kepsek="kepsek kita adalah";
$sekolah->guru="guru kita adalah";
$sekolah->murid="murid kita adalah";

echo $sekolah->kepsek," ", $sekolah->lilik();
echo "<br />";
echo $sekolah->guru," ", $sekolah->saiful();
echo "<br />";
echo $sekolah->murid," ", $sekolah->hasan();
?>