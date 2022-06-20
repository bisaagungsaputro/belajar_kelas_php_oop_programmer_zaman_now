<?php


// *** Kode : Self Keyword ***
    class Keywords {
      const AUTHOR = "Bisa Agung Saputro";

      function Info () {
        // Menggunakan Nama Class
        // Cara 1- Menggunakan Nama Class
        echo "AUTHORNYA : " . Keywords::AUTHOR . PHP_EOL;
        // Cara 2 - Menggunakan Self
        echo "AUTHORNYA : " . self::AUTHOR . PHP_EOL;
      }
    }

    $contoh = new Keywords();

    $contoh->Info();


// ---


// *** Self Keyword ***


// *** Properties VS Constant ***
// *** Self Keyword ***
// *** Kode : Self Keyword ***


// *** Properties VS Constant ***
/*
    Properties VS Constant
    - Saat Kita Membuat Object, Properties Yang Terdapat Di class Akan Secara Otomatis Dibuat Per-Object,
      Oleh Karena Itu Untuk Mengakses Properties, Kita Perlu Menggunakan Object Atau Jika Dari Dalam Object Tersebut Sendiri,
      Kita Perlu Menggunakan Kata Kunci this
    - Sedangkan Berbeda Dengan constant, constant Di class Tidak Akan Dibuat Per-Object,
      constant Itu Hidupnya Di class, Bukan Di Object, Oleh Karena Itu Untuk Mengaksesnya Kita Perlu Menggunakan NamaClass::Nama_Constant
    - Secara Sederhana, Properties Akan Dibuat Satu Per Instance class (Object),
      Sedangkan constant Dibuat Satu Per class
*/

// *** Self Keyword ***
/*
    Self Keyword
    - Jika Di Dalam class (Misal Di function) Kita Ingin Mengakses constant,
      Kita Perlu Mengakses Menggunakan NamaClass::Nama_Constant
    - Namun Jika Di Dalam class Yang Sama, Kita Bisa Menggunakan Kata Kunci self Untuk Mempermudah
*/

// *** Kode : Self Keyword ***
/*
    Kode : Self Keyword
    class Keywords {
      const AUTHOR = "Programmer Zaman Now";

      function Info () {
        echo "AUTHORNYA : " . self::AUTHOR . PHP_EOL;
      }
    }
*/



?>