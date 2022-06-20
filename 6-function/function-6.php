<?php


// *** Kode : Function ***
    class Personal {
        var string $name;

        function sayGoodBye (string $name) {
            echo "Selamat Tinggal $name" . PHP_EOL;
        }
    }


// ---


// *** Function ***


// *** Function ***
// *** Kode : Function ***
// *** Kode : Memanggil Function ***


// *** Function ***
/*
    Function
    - Selain Menambahkan Properties, Kita Juga Bisa Menambahkan function Ke Object
    - Cara Dengan Mendeklarasikan function Tersebut Di Dalam Block class
    - Sama Seperti function Biasanya, Kita Juga Bisa Menambahkan return Value Dan Parameter
    - Untuk Mengakses function Tersebut, Kita Bisa Menggunakan Tanda -> Dan Diikuti Dengan Nama
      Methodnya, Sama Seperti Mengakses Properties
*/

// *** Kode : Function ***
/*
    Kode : Function
    class Personal {
        var string $name;
        var string $adress;
        var string $country;

        function sayGoodBye (string $name) {
            echo "Selamat Tinggal $name" . PHP_EOL;
        }
    }
*/

// *** Kode : Memanggil Function ***
/*
    Kode : Memanggil Function
    $personal = new Personal();
    $personal->name ="Eko";
    $personal->adress = "Jakarta Timur";
    $personal->country = "Indonesia";

    $personal->Personal();
*/



?>