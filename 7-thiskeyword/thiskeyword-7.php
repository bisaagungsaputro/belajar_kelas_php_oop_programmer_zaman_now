<?php


// *** Kode : This Keyword ***
    //* (?string $name) => Bisa NULL Atau Tidak
    class SayKeyword {
    function ThisKeyword (?string $name) {
        if (is_null($name)) {
            // Cara 1
            // echo "Hai Bro $this->name" . PHP_EOL;
            // Cara 2
            echo "Alhamdulillah Baik Bro {$this->name}" . PHP_EOL;
        }
        else {
            echo "Baik Bro $name, Ente Gimana Bro {$this->name}" . PHP_EOL;
        }
    }
}


// ---


// *** This Keyword ***


// *** This Keyword ***
// *** Kode : This Keyword ***


// *** This Keyword ***
/*
    This Keyword
    - Saat Kita Membuat Kode Di Dalam function Di Dalam class, Kita Bisa Menggunakan Kata Kunci this
      Untuk Mengakses Object Saat Ini
    - Misal Kadang Kita Butuh Mengakses Properties Atau function Lain Di classs Yang Sama
*/

// *** Kode : This Keyword ***
/*
    Kode : This Keyword
    //* (?string $name) => Bisa NULL Atau Tidak
    function sayKeyword (?string $name) {
        if (is_null($name)) {
            echo "Hai Bro {$this->name}" . PHP_EOL;
        }
        else {
            echo "Baik Bro $name, Ente Gimana Bro {$this->name}" . PHP_EOL;
        }
    }
*/



?>