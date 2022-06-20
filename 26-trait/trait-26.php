<?php


// *** Kode : Membuat Trait ***

    namespace Data\Traits;

    trait SayGoodBye {

        public string $name;

        public function GoodBye (?string $name): void {
            if (is_null($name)) {
                echo "Good Joob" . PHP_EOL;
            }
            else {
                echo "Good Bye $name" . PHP_EOL;
            }
        }
    }

    trait SayHello
    {

        public string $name;

        public function Hello(?string $name): void
        {
            if (is_null($name)) {
            echo "Hello" . PHP_EOL;
            } else {
            echo "Hello Bro $name" . PHP_EOL;
            }
        }
    }

// *** Kode : Trait Properties ***
    trait HasName {
        public string $name;
    }

class Person
{
    use SayGoodBye, SayHello, HasName;
}


// ---


// *** Trait ***


// *** Trait ***
// *** Kode : Membuat Trait ***
// *** Kode : Menggunakan Trait ***
// *** Trait Properties ***
// *** Kode : Trait Properties ***


// *** Trait ***
/*
    Trait
    - Selain class Dan interface, Di PHP Terdapat Feature Lain Bernama trait
    - trait Mirip Dengan abstract class, Kita Bisa Membuat Konkrit function Atau abstract function
    - Yang Membedakan Adalah, Di trait Bisa Kita Tambahkan Ke Dalam class Lebih Dari Satu
    - trait Mirip Seperti Ekstension, Dimana Kita Bisa Menambahkan Konkrit function Ke Dalam class
      Dengan trait
    - Secara Sederhana trait Adalah Digunakan Untuk Menyimpan function - function Yang Bisa Digunakan
      Ulang Di Beberapa class
    - Untuk Menggunakan trait Di class, Kita Bisa Menggunakan Kata Kunci use
*/

// *** Kode : Membuat Trait ***
/*
    Kode : Membuat Trait
    namespace Data;

    trait SayGoodBye {
        function GoodBye (?string $name): void {
            if (is_null($name)) {
                echo "Good Bye" . PHP_EOL;
            }
            else {
                echo "Good Bye $name" . PHP_EOL;
            }
        }
    }
*/

// *** Kode : Menggunakan Trait ***
/*
    Kode : Menggunakan Trait
    class Person {
        use SayGoodBye, SayHello;
    }

    => Untuk Menggunakan Trait Kalian Bisa Menggunakan use
    => Kita Bikin 2 Trait Pertama SayGoodBye, Kedua SayHello
       Artinya Semua function, Properties, Dan Juga abstract function Yang Ada Di Dalam SayGoodBye
       Itu Akan Di Include Dalam Si class Person, Jadi Ini Mirip Kayak Ekstension
*/

// *** Trait Properties ***
/*
    Trait Properties
    - Berbeda Dengan interface, Di trait Kita Bisa Menambahkan Properties
    - Dengan Menambahkan Properties, Secara Otomatis class Tersebut Akan Memiliki Properties
      Yang Ada Di trait
*/

// *** Kode : Trait Properties ***
/*
    Kode : Trait Properties
    trait HasName {
        public string $name;
    }

    class Person {
        use SayGoodBye, SayHello, HasName;
    }
*/



?>