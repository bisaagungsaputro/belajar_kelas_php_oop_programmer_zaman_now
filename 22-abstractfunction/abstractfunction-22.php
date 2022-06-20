<?php


// *** Kode : Abstract Function ***
    namespace Data;

    abstract class Suka {
        public string $name;

         abstract public function run(): void;
    }

    class Cat extends Suka {
        public function run(): void {
            echo "Cat $this->name Sedang Lari" . PHP_EOL;
        }
    }

    class Dog extends Suka {
    public function run(): void
    {
        echo "Dog $this->name Sedang Lari" . PHP_EOL;
        }
    }


// ---


// *** Abstract Function ***


// *** Abstract Function ***
// *** Kode : Abstract Function ***
// *** Kode : Menggunakan Abstract Function ***


// *** Abstract Function ***
/*
    Abstract Function
    - Saat Kita Membuat class Yang abstract, Kita Bisa Membuat abstract function Juga Di Dalam class abstract Tersebut
    - Saat Kita Membuat Sebuah abstract function, Kita Tidak Boleh Membuat Block function Untuk function Tersebut
    - Artinya abstract function Wajib Di Override Di class child
    - abstract function Tidak Boleh Memiliki Access Modifier private

    => : void => Tidak Mengembalikan Data
*/

// *** Kode : Abstract Function ***
/*
    Kode : Abstract Function
    namespace Data;

    abstract class Animal {
        public string $name;

        public abstract function Run(): void;
    }

    class Cat extends Animal {
        public function Run(): void {
            echo "Cat $this->name, Sedang Lari" . PHP_EOL;
        }
    }
*/

// *** Kode : Menggunakan Abstract Function ***
/*
    Kode :  Menggunakan Abstract Funtion
    require_once "abstractfunction-22.php";

    use Data\Cat;

    $cat = new Cat();
    $cat->name = "Luna";
    $cat->run();
*/



?>