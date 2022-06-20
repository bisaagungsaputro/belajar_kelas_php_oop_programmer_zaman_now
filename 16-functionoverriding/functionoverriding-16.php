<?php


// *** Kode : Method Overriding ***
    class Manager {
        var string $name;

        function sayHello (string $name): void {
            echo "Hi $name, My Name Is Manager $this->name" . PHP_EOL;
        }
    }

    class VicePresident extends Manager {
        /*
        function sayHello Di class Manager Ketimpa Dengan class VicePresident,
        Sehingga Saat Ditampilkan Seperti Ini : Hi $name, My Name Is VP
        */
        function sayHello (string $name): void {
            echo "Hi $name, My Name Is VP $this->name" . PHP_EOL;
        }
    }


// ---


// *** Function Overriding ***


// *** Function Overriding ***
// *** Kode : Method Overriding ***


// *** Function Overriding ***
/*
    Function Overriding
    - function Overriding Adalah Kemampuan Mendeklarasikan Ulang function Di child class,
      Yang Sudah Ada Di parent class
    - Saat Kita Melakukan Proses Overriding Tersebut, Secara Otomatis Ketika Kita Membuat Object
      Dari class child, function Yang Di class parent Tidak Bisa Diakses Lagi / Tertimpa Oleh class child

    => Boleh Mendeklarasikan Ulang function Di class Sebelumnya / child
*/

// *** Kode : Method Overriding ***
/*
    Kode : Method Overriding
    class Manager {
        var string $name;

        function sayHello (string $name): void {
            echo "Hi $name, My Name Is Manager $this->name" . PHP_EOL;
        }
    }

    class VicePresident extends Manager {
        function sayHello (string $name): void {
            echo "Hi $name, My Name Is VP $this->name" . PHP_EOL;
        }
    }
*/



?>