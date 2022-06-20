<?php


// *** Kode : Properties ***
    class Properties {
        var $name;
        var $adress;
        var $country;
    }

// *** Kode : Properties Dengan Type ***
    class Personal {
        var string $name;
        var string $adress;
        var string $country;
    }

// *** Kode : Properties Default Value ***
    class Identitas {
        var string $name;
        var string $adress;
        var string $country = "Indonesia";
    }

// *** Kode : Nullable Properties ***
    class Nullable {
        var string $name;
        // Boleh Ada Tanda Tanya, Jika Objectnya null, Jika Tidak Dia Tidak Boleh null (Properties Boleh Null)
        var ?string $adress = null;
        // Dia Bakal Error Karena Tidak Dikasih Tanda Tanya / ?
        // $var string $age = null;
        var string $country = "Indonesia";
    }


// ---


// *** Properties ***


// *** Properties ***
// *** Kode : Properties ***
// *** Manipulasi Properties ***
// *** Kode : Manipulasi Properties ***
// *** Properties Type Declaration ***
// *** Kode : Properties Dengan Type ***
// *** Default Properties Value ***
// *** Kode : Properties Default Value ***
// *** Nullable Properties ***
// *** Kode : Nullable Properties ***


// *** Properties ***
/*
    Properties
    - Fields / Properties / Attributes Adalah Data Yang Bisa Kita Sisipkan Ke Dalam Object
    - Namun Sebelum Kita Bisa Memasukkan Data Di Fields, Kita Harus Mendeklarasikan Data Apa Saja
      Yang Dimiliki Object Tersebut Di Dalam Deklarasi classs Nya
    - Membuat Fields Sama Seperti Membuat Variable, Namun Ditempatkan Di Block class, Namun Diawali
      Dengan Kata Kunci var
*/

// *** Kode : Properties ***
/*
    Kode : Properties
    class Person {
        var $name;
        var $adress;
        var $country;
    }
*/

// *** Manipulasi Properties ***
/*
    Manipulasi Properties
    - Fields Yang Ada Di Object, Bisa Kita Manipulasi
    - Untuk Manipulasi Data Fields, Sama Seperti Cara Pada Variable
    - Untuk Mengakses Fields, Kita Butuh Kata Kunci ->
      Setelah Nama Object Dan Diikuti Nama Fields Nya
*/

// *** Kode : Manipulasi Properties ***
/*
    Kode : Manipulasi Properties
    $person = new Person();
    $person->name = "Eko";
    $person->adress = "Subang";
    $person->country = "Indonesia";

    echo "Name    : {$person->name}" . PHP_EOL;
    echo "Adress  : {$person->adress}" . PHP_EOL;
    echo "Country : {$person->country}" . PHP_EOL;
*/

// *** Properties Type Declaration ***
/*
    Properties Type Declaration
    - Sama Seperti Di function, Di Properties Pun, Kita Bisa Membuat Type Declaration
    - Ini Membuat PHP Otomatis Mengecek Type Data Yang Sesuai Dengan Type Declaration Yang Telah Ditentukan
    - Jika Kita Mencoba Mengubah Properties Dengan Type Yang Berbeda, Maka Otomatis Akan Error
    - Ingat Bahwa PHP Memiliki Fitur Type Juggling, Yang Secara Otomatis Bisa Mengkonversi Ke Tipe Data Lain
    - Untuk Menambahkan Type Declaration, Kita Bisa Tambahkan Setelah Kata Kunci var Di Properties
*/

// *** Kode : Properties Dengan Type ***
/*
    Kode : Properties Dengan Type
    class Personal {
        var string $name;
        var string $adress;
        var string $country;
    } 
*/

// *** Default Properties Value ***
/*
    Default Properties Value
    - Sama Seperti Variable , Di Properties Juga Kita Bisa Langsung Mengisi Value Nya
    - Ini Mirip Seperti Default Value, Jadi Jika Tidak Diubah Di Object,
      Maka Properties Akan Memiliki Value Tersebut
*/

// *** Kode : Properties Default Value ***
/*
    Kode : Properties Default Value
    class Default {
        var string $name;
        var string $adress;
        var string $country = "Indonesia";
    }
*/

// *** Nullable Properties ***
/*
    Nullable Properties
    - Saat Kita Menambah Type Declaration Di Properties Atau Di function Argument, Maka Secara
      Otomatis Kita Tidak Bisa Mengirim Data null Ke Dalam Properties Atau function Argument Tersebut
    - Di PHP 7.4, Dikenalkan Nullable Type, Jadi Kita Bisa Mengirim Data null Ke Properties Atau function Arguments
    - Caranya Sebelum Type Declaration Nya, Kita Bisa Tambahkan Tanda ?
*/

// *** Kode : Nullable Properties ***
/*
    Kode : Nullable Properties
    class Nullable {
        var string $name;
        var ?string $adress = null;
        var string $country = "Indonesia";
    }
*/



?>