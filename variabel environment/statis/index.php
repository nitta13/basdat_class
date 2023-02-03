<?php
// statis merupakan mempertahankan nilai aslinya

function test(){
    static $angka = 0; //mengideftifikasikakn variabel
    // variabel Lokal jika sudah melewati scopenya akan kembali ke nilai awal
    // statis mempertahankan nilai diluar scope
    echo "A : {$angka} <br>";
    $angka++; //menambahkan fungsi increment
}
test();
test();
test();

?>