<?php


// *** Kode : Constant ***
    define("APPLICATION", "Belajar OOP");
    // Versi 7.4 Untuk Menggunakan const
    const APP_VERSION = 2021;

    echo APPLICATION . PHP_EOL;
    echo APP_VERSION . PHP_EOL;

// *** Kode : Constant Di Class ***
    class Personal {
        /*
        - Bagusnya UPPERCASE (Huruf Besar Semua) => Untuk Menunjukkan Ini Nama const,
        const Valuenya Tidak Bisa Diubah - Ubah Lagi
        - Untuk Memanggil const, Kita Menggunakan classnya
        */
        const AUTHOR = "Programmer Zaman Now";

        var string $name;
        var ?string $adress = null;
        var string $country = "Indonesia";
    }

    echo Personal::AUTHOR . PHP_EOL;

// *** Kode : Mengakses Constant Di Class ***
    define("APPLICATIONS", "Belajar PHP OOP");

    const APP_VERSIONS = 2022;

    echo APPLICATIONS . PHP_EOL;
    echo APP_VERSIONS . PHP_EOL;

    class Akses {

    const APP_VERSIONS = 2023;

    }

    echo Akses::APP_VERSIONS . PHP_EOL;


// ---


// *** Constant ***


// *** Constant ***
// *** Kode : Constant ***
// *** Kode : Constant Di Class ***
// *** Kode : Mengakses Constant Di Class ***


// *** Constant ***
/*
    Constant
    - Properties Di class Bisa Diubah, Mirip Seperti Variable
    - Di class Juga Kita Membuat constant, Data Yang Tidak Bisa Diubah
    - Di Materi PHP Dasar, Kita Belajar Untuk Membuat constant Itu Perlu Menggunakan function define()
    - Namun Sejak PHP 7.4, Kita Bisa Menggunakan Kata Kunci const Untuk Membuat constant, Mirip
      Seperti Variable, Namun Tidak Menggunakan Karakter $
*/

// *** Kode : Constant ***
/*
    Kode : Constant
    define("APPLICATION", "Belajar OOP");
    const APP_VERSION = 2021;

    echo APPLICATION . PHP_EOL;
    echo APP_VERSION . PHP_EOL;
*/

// *** Kode : Constant Di Class ***
/*
    Kode : Constant Di Class
    class Personal {
        const AUTHOR = "Programmer Zaman Now";

        var string $name;
        var ?string $adress = null;
        var string $country = "Indonesia";
    }
*/

// *** Kode : Mengakses Constant Di Class ***
/*
    Kode : Mengakses Constant Di Class
    class Akses {
    define ("APPLICATONS", Belajar PHP OOP");
    const APP_VERSIONS = 2022;

    echo APPLICATIONS . PHP_EOL;
    echo APP_VERSIONS . PHP_EOL;
    }

    echo Akses::APP_VERSIONS . PHP_EOL;
*/



?>