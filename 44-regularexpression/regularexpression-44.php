<?php


// *** Kode : Regular Expression Match ***
    $matches = [];
    /*
    - Mendapatkan Semua Dokumen match Nya
    - i => Case Isensitve, Jadi Kata Besar Maupun Kecil Tidak Masalah
    */
    $result = (bool)preg_match_all("/eko|awan|edy/i", "Eko Kurniawan Khannedy", $matches);

    // true Artinya Dia matches
    var_dump($result);

    // Jika (bool) Dihapus - Hasil Outputnya : int(3) => Berarti Dia matches 3 Data Artinya Ada 3
    // var_dump($result);

    // Data Berupa Jadi array - Dapat Semua Yang Ditampilkan, Jika Ditambah Lagi | Joko => Kata Joko Tidak Ada
    var_dump($matches);

// *** Kode : Regular Expression Replace ***
//* Bikin Aplikasi Ada Review Atau Komentar,
//* Kita Pengen Review Kata Kasar, Kita Pengen Di Replace Jadi Bintang ***
$resultreplace = preg_replace("/anjing|bangsat/i", "***", "Dasar Lu Anjing Dan Bangsat");

var_dump($resultreplace);

// *** Kode : Regular Expression Split ***
    /*
    s => Spasi, Tab Dia Bakal Di Replace / Dipotong
    , => Dia Bakal Di Replace / Dipotong
    - => Dia Bakal Di Replace / Dipotong
    => Outputnya    "Eko"
                    "Kurniawan"
                    "Khannedy"
                    "Programmer"
                    "Zaman"
                    "Now"
    */
    $resultsplit = preg_split("/[\s,-]/", "Eko Kurniawan Khannedy,Programmer,Zaman-Now");

    var_dump($resultsplit);

//* - Kita Bisa Bikin Validation Harus Ke Email, Bikin Validation Harus Ke URL DLL,
//*   Itu Semua Bisa Digunakan Di Regular Expression


// ---


// *** Regular Expression ***


// *** Regular Expression ***
// *** Function Regular Expression ***
// *** Kode : Regular Expression Match ***
// *** Kode : Regular Expression Replace ***
// *** Kode : Regular Expression Split ***


// *** Regular Expression ***
/*
    Regular Expression
    - PHP Mendukung Regular expression Yang Kompatibel Dengan Bahasa Pemprograman Perl
    - Regular expression Merupakan Fitur Yang Digunakan Untuk Melakukan Pencarian Di string
      Menggunakan Pola Tertentu
    - Materi Ini Sebenarnya Materi Yang Sangat Panjang, Sehingga Disini Kita Akan Bahas Sedikit
      Pengenalannya
    - Untuk Pembuatan Pattern Di Regular expression, Detailnya Bisa Dibaca Disini :
      https://www.php.net/manual/en/pcre.pattern.php
*/

// *** Function Regular Expression ***
/*
    Function Regular Expression
    Function Regular Expression                         Keterangan
    preg_match ($pattern, $subject)                     Digunakan Untuk Mencari match pattern
    preg_match_all ($pattern, $subject)

    preg_replace ($pattern, $replacement, $subject)     Digunakan Untuk mereplace Semua pattern
                                                        Dengan replacement

    preg_split ($pattern, $subject)                     Digunakan Untuk Memotong Dengan pattern
                                                        Menjadi array
*/

// *** Kode : Regular Expression Match ***
/*
    Kode : Regular Expression Match
    $matches = [];
    $result = (bool)preg_match_all("/eko/awan/edy/i", "Eko Kurniawan Khannedy", $matches);

    var_dump($result);
    var_dump($matches);
*/

// *** Kode : Regular Expression Replace ***
/*
    Kode : Regular Expression Replace
    //* Bikin Aplikasi Ada Review Atau Komentar,
    //* Kita Pengen Review Kata Kasar, Kita Pengen Di Replace Jadi Bintang ***
    $resultreplace = preg_replace("/anjing|bangsat/i", "***", "Dasar Lu Anjing Dan Bangsat");

    var_dump($resultreplace);
*/

// *** Kode : Regular Expression Split ***
/*
    Kode : Regular Expression Split
    $resultsplit = preg_split("/[\s,-]/", "Eko Kurniawan Khannedy Programmer, Zaman-Now");

    var_dump($resultsplit);
*/



?>