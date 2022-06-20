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

trait CanRun {
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

class Person
{
    use SayGoodBye, SayHello, HasName, CanRun;
        // Bisa Di Override
        // use CanRun {
        // }
        // Hello as private;
        // GoodBye as private;

    // Wajib Overriding Dari trait CanRun Supaya Bisa Menjalankan abstract
    public function run(): void {
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


// *** Trait Overriding ***


// *** Trait Overriding ***
// *** Kode : Trait Abstract Function ***
// *** Trait Overriding ***
// *** Kode : Override Trait ***
// *** Trait Visibility Override ***
// *** Kode : Trait Visibility ***


// *** Trait Overriding ***
/*
    Trait Overriding
    - Selain Konkrit function, Di trait Juga Kita Bisa Menambahkan abstract function
    - Jika Terdapat abstract function Di trait, Maka Secara Otomatis function Tersebut Harus Di Override
      Di class Yang Menggunakan trait Tersebut
*/

// *** Kode : Trait Abstract Function ***
/*
    Kode : Trait Abstract Function
    trait CanRun {
        public abstract function run(): void;
    }

    class Person {
        use SayGoodBye, SayHello, HasName, CanRun;

        public function run(): void {
            echo "Person $this->name Is Running" . PHP_EOL;
        }
    }
*/

// *** Trait Overriding ***
/*
    Trait Overriding
    - Jika Sebuah class Memiliki parent class Yang Memiliki function Yang Sama Dengan function Di trait,
      Maka Secara Otomatis trait Akan Meng-Override function Tersebut
    - Namun Jika Kita Membuat function Yang Sama Di class Nya, Maka Secara Otomatis kita Akan
      Meng-Override function Di trait
    - Sehingga Posisinya Seperti Ini ParentClass = override by => Trait = override by => ChildClass
*/

// *** Kode : Override Trait ***
/*
    Kode : Override Trait
    class Person {
        use SayGoodBye, SayHello;

        function GoodBye(?string $name): void {
            echo "Override Trait GoodBye" . PHP_EOL;
        }

        function Hello(?string $name): void {
            echo "Override Trait Hello" . PHP_EOL;
        }
    }
*/

// *** Trait Visibility Override ***
/*
    Trait Visibility Override
    - Selain Melakukan Override function Di class, Kita Juga Bisa Melakukan Override Visibility function
      Yang Terdapat Di trait
    - Namun Untuk Melakukan Ini Tidak Perlu Membuat function Baru Di class, Kita Bisa Gunakan Secara
      Sederhana Ketika Menggunakan trait Nya
*/

// *** Kode : Trait Visibility ***
/*
    Kode : Trait Visibility
    class Person {
        use SayGoodBye, SayHello, HasName, CanRun {
            Hello as private;
            GoodBye as private;
        }
    }
*/



?>