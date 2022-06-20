<?php


// *** Kode : Membuat Trait ***

namespace Data\Traits;

trait SayGoodBye
{

    public string $name;

    public function GoodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good Joob" . PHP_EOL;
        } else {
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
trait HasName
{
    public string $name;
}

trait CanRun
{
    public abstract function run(): void;
}

// class ParentPerson {
//* ParentPerson Yang TerOverride Sama rait Nya
//     public function GoodBye(?string $name): void
//     {
//         echo "Good Bye In Person" . PHP_EOL;
//     }

//     public function Hello(?string $name): void
//     {
//         echo "Hello In Person" . PHP_EOL;
//     }
// }

// extends class ParentPerson, Bisa Override private
// class Person extends ParentPerson

// Menggunakan trait Inheritance // Pewarisan Dalam trait
trait All {
    use SayGoodBye, SayHello, HasName, CanRun;
}

class Person
{

    // Menggunakan trait Inheritance
    use All;

    // Wajib Overriding Dari trait CanRun Supaya Bisa Menjalankan abstract
    public function run(): void
    {
        echo "Person $this->name Is Running" . PHP_EOL;
    }
    /*
    - include Sebuah trait, Tapi Ternyata functionnya Ada Di Dalam class Person, Maka Diutamakan Yang Ini
    - Tapi Si trait Akan TerOverride Sama child Nya
    */
    public function GoodBye(?string $name): void
    {
        echo "Good Bye In Person" . PHP_EOL;
    }

    public function Hello(?string $name): void
    {
        echo "Hello In Person" . PHP_EOL;
    }
}


// ---


// *** Trait Inheritance ***


// *** Trait Inheritance ***
// *** Kode : Trait Inheritance ***

// *** Trait Inheritance ***
/*
    Trait Inheritance
    - Sebelumnya Kita Sudah Tahu Bahwa class Bisa Menggunakan trait Lebih Dari Satu
    - Lantas Bagaimana Dengan trait Yang Menggunakan trait Lain?
    - trait Bisa Menggunakan trait Lain, Mirip Seperti interface Yang Bisa implement interface Lain
    - Untuk Menggunakan trait Lain Dari trait, Penggunaannya Sama Seperti Dengan Penggunaan
      trait Di class
*/

// *** Kode : Trait Inheritance ***
/*
    Kode : Trait Inheritance
    trait All {
        use SayGoodBye, SayHello, HasName, CanRun;
    }

    class Person {
        use All;
    }

    => Include trait Lain
*/



?>