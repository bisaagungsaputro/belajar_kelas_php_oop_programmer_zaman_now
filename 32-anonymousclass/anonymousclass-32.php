<?php


// *** Kode : Anonymous Class ***
    interface HelloWorld {
        function SayHello(): void;
    }

    // Biasanya Kita Bikin class Terlebih Dahulu, Agak Ribet, Alangkah Baiknya Untuk Bikin Yang Simple Menggunakan Anonymous class
    // class SampleHelloWorld implements HelloWorld {
    //     public function SayHello (): void {
    //         echo "Hello Anonymous Class" . PHP_EOL;
    //     }
    // }

    // $helloworld = new SampleHelloWorld();
    // $helloworld->SayHello();

    //* Menggunakan Anonymous class, Biasanya Digunakan Untuk Object interface Atau abstract class
    $helloworld = new class implements HelloWorld {
        function SayHello(): void {
            echo "Hello Anonymous Class" . PHP_EOL;
        }
    };

    $helloworld->SayHello();

// *** Kode : Constructor Di Anonymous Class ***
    $helloconstruct = new class ("Agung Saputro") implements HelloWorld {
        public string $name;

        public function __construct(string $name) {
            $this->name = $name;
        }

        function SayHello (): void {
            echo "Hello $this->name" . PHP_EOL;
        }
    };

    $helloconstruct->SayHello();


// ---


// *** Anonymous Class ***


// *** Anonymous Class ***
// *** Kode : Anonymous Class ***
// *** Constructor Di Anonymous Class ***
// *** Kode : Constructor Di Anonymous Class ***


// *** Anonymous Class ***
/*
    Anonymous Class
    - Anonymous class Atau class Tanpa Nama
    - Adalah Kemampuan Mendeklarasikan class, Sekaligus Meng-Instansiasi Object Nya Secara Langsung
    - Anonymous class Sangat Cocok Ketika Kita Berhadapan Dengan Kasus Membuat implementasi
      interface Atau abstract class Sederhana, Tanpa Harus Membuat implementasi class Nya

    => Untuk Kompleks Banget Disarankan Bikin class Yang Tidak abstract / Opsional
    => Anonymous Support constructor, desctructor Dll, Semuanya Di Dukung Oleh Anonymous class
*/

// *** Kode : Anonymous Class ***
/*
    Kode : Anonymous Class
    interface HelloWorld {
        function Hello(): void;
    }

    $helloworld = new class implements HelloWorld {
        function SayHello(): void {
            echo "Hello Anonymous Class" . PHP_EOL;
        }
    };

    $helloworld->SayHello();
*/

// *** Constructor Di Anonymous Class ***
/*
    Constructor Di Anonymous Class
    - Anonymous class Juga Mendukung constructor
    - Jadi Kita Bisa Menambahkan constructor Jika Kita Mau
*/

// *** Kode : Constructor Di Anonymous Class ***
/*
    Kode : Constructor Di Anonymous Class
    $helloworld = new class ("Anonymous Class") implements HelloWorld {
        private string $name;

        public function __construct(string $name) {
            $this->name = $name;
        }

        function SayHello (): void {
            echo "Hello $this->name" . PHP_EOL;
        }
    }
*/



?>