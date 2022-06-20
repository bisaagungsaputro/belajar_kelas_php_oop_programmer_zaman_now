<?php


// *** Kode : Tanpa Namespace ***
    //* Dia Bakal Error Karena Nama class Sama
    // class Atika {

    // }

    // class Atika {

    // }

// *** Kode : Membuat Namespace ***
    //* Membuat Sub Namespace Berada Dalam 1 File
    namespace Data\Satu {
        class Konflik {

        }
    }

    namespace Data\Dua {
        class Konflik {

        }
    }

// *** Kode : Function Dan Constant Di Namespace ***
    namespace Helper {
        function HelpMe () {
            echo "Tolong Saya" . PHP_EOL;
        }

        const APPLICATION = "Belajar Namespace" . PHP_EOL;
    }


// ---


// *** Namespace ***


// *** Namespace ***
// *** Kode : Tanpa Namespace ***
// *** Membuat Namespace ***
// *** Kode : Membuat Namespace ***
// *** Kode : Membuat Object Dari Namespace ***
// *** Function Dan Constant Di Namespace ***
// *** Kode : Function Dan Constant Di Namespace ***
// *** Global Namespace ***
// *** Kode : Global Namespace ***


// *** Namespace ***
/*
    Namespace
    - Saat Kita Membuat Aplikasi, Bisa Dipastikan Kita Akan Banyak Sekali Membuat class
    - Jika class Terlalu Banyak, Kadang Akan Menyulitkan Kita Untuk Mencari Atau Mengklasifikasikan Jenis - Jenis class
    - PHP Memiliki Fitur namespace, Dimana Kita Bisa Menyimnpan class - class Kita Di Dalam namespace
    - namespace Bisa Nested Dan Jika Kita Ingin Mengakses class Yang Terdapat namnespace,
      Kita Perlu Menyebutkan Nama namespace Nya
    - namespace Bagus Ketika Kita Punya Beberapa class Yang Sama,
      Dengan Menggunakan namespace Nama class Sama Tidak Akan Menjadikan Error Di PHP

    => Nested => Nested Itu Kayak Tempat Untuk Menyimpan class
    => Didalam namespace Ada namespace Lagi
    => Nama namespace Tidak Boleh Sama
*/

// *** Kode : Tanpa Namespace ***
/*
    Kode : Tanpa Namespace
    //* Dia Bakal Error Karena Nama class Sama
    class Atika {

    }

    class Atika {

    }
*/

// *** Membuat Namespace ***
/*
    Membuat Namespace
    - Untuk Membuat namespace, Kita Bisa Menggunakan Kata Kunci namespace
    - Jika Kita Ingin Membuat Sub namespace, Kita Cukup Gunakan Karakter \ Setelah namespace Sebelumnya
*/

// *** Kode : Membuat Namespace ***
/*
    Kode : Membuat Namespace
    //* Membuat Sub Namespace Berada Dalam 1 File
    namespace Data\Satu {
        class Konflik {

        }
    }

    namespace Data\Dua {
        class Konflik {

        }
    }
*/

// *** Kode : Membuat Object Dari Namespace ***
/*
    Kode : Membuat Object Dari Namespace
    require_once "namespace-13.php";

    $konflik1 = new \Data\Satu\Konflik();
    //* Depan new Data, Boleh Pakai Back Slash Atau Tidak, Itu Opsional
    //* Akhir Konflik, Boleh Pakai Buka Kurung Atau Tidak, Itu Opsional
    $konflik2 = new Data\Dua\Konflik;
*/

// *** Function Dan Constant Di Namespace ***
/*
    Function Dan Constant Di Namespace
    - Selain class, Kita Juga Bisa Menggunakan function Dan constant Di namespace
    - Dan Jika Kita Ingin Menggunakan function Atau constant Tersebut,
      Kita Bisa Menggunakannya Dengan Diawali Dengan Nama namespacenya
*/

// *** Kode : Function Dan Constant Di Namespace ***
/*
    Kode : Function Dan Constant Di Namespace
    namespace Helper {
        function HelpMe () {
            echo "Tolong Saya" . PHP_EOL;
        }

        const APPLICATION = "Belajar Namespace" . PHP_EOL;
    }
*/

// *** Global Namespace ***
/*
    Global Namespace
    - Secara Default Saat Kita Membuat Kode Di PHP Sebenarnya Itu Disimpan Di Global namespace
    - Global namespace Adalah namespace Yang Tidak Memiliki Nama namespace

    => Jarang Sekali Orang Menggunakan Global Namespace
*/

// *** Kode : Global Namespace ***
/*
    Kode : Global Namespace
    namespace {
        echo "Hello Ini Adalah Global Namespace" . PHP_EOL;
    }
*/



?>