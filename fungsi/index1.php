<?php 

//cara membuat function
function ngoding(){

}


// function bisa ketargertkan menggunakanpublic, protected, private
class vscode{
    public function coding_php(){

    }


}

// memcoba buat fungsi sapa teman
function sapa_teman(){
    echo "<h1>Hai gais<h1>";
    echo "<h3>Ketemu lagi ni bersama teman<h3>";
}

// mengcoba membuat fungsi yang ada parameter
function teman($temen_gue, $umur){
    echo "<h2>Haiii gias disini gue sama ($temen_gue)<h2>";
    echo "<h2>umur dia segini ($umur)<h2>";
}
// coba panggil fungsi
// tulisakna nama fungsinya bersama()
sapa_teman();

// jika fungsi menggunakan parameter, harus di tulis saat pemanggilannya
teman("rizki", 20);

// mencoba membuat fungsi menggunakakn percobaan
function kasir($nama, $jumlah){
    echo "<h3>hai ($nama), Terima kasih telah berkunjung <h3>";
    echo "<h3>Dan jangan lupa kembali lagi<h3>";

    // membuat perulangan menggunakan if (jika jumlah lebih maka akan dapat hadiah)
    if ($jumlah > 10){
        echo "<h3>Gokil, kamu dapat mobil karena berkunjung sebanyak ($jumlah) kali<h3>";
    }
}
//  panggil fungsi dan diisi parameter
kasir("Akbar", 9);


?>