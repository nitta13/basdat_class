<?php
// Pewarisan atau inheritance 

// Class induk
class komputer {
    // property
    public $merk;
    public $prosesor;
    public $memory;
    
    // fungsi / operasi membuat beli komputer
    public function beli_komputer(){
        return "Beli komputer baru";
    }
}

// kelas turunan / extends dari class komputer ke class laptop
class laptop extends komputer {
    public function lihat_spek(){
        return "merk: $this->merk, prosesor: $this->prosesor, memory: $this->memory";
    }
}
// membuat objek baru dari class lapotop (ckelas turunan)
$laptop_baru = new laptop();

// isi propertynya
$laptop_baru->merk = "Asus";
$laptop_baru->prosesor = "AMD Ryzn 9X";
$laptop_baru->memory = "1 Peta8yte";

//panggil functionnya
echo $laptop_baru->beli_komputer();
echo "<br />";
echo $laptop_baru->lihat_spek();



?>