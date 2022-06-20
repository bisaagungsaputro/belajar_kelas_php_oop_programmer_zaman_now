<?php

// *** Kode : Inheritance ***
class Programmer {
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class FrontEndProgrammer extends Programmer {

}

class BackendProgrammer extends Programmer {

}

// *** Kode : Polymorphism ***
class Company {
    public Programmer $programmer;
}

// *** Kode : Function Argument Polymorphism ***
function sayHello(Programmer $programmer)
{
    echo "Hello $programmer->name" . PHP_EOL;
}


// ---


// *** Polymorphism ***


// *** Polymorphism ***
// *** Kode : Inheritance ***
// *** Kode : Polymorphism ***
// *** Kode : Function Argument Polymorphism ***


// *** Polymorphism ***
/*
    Polymorphism
    - Polymorphism Berasal Dari Bahasa Yunani Yang Berarti Banyak Bentuk
    - Dalam OOP, Polymorphism Adalah Kemampuan Sebuah Object Berubah Bentuk Menjadi Bentuk Object Lain
    - Polymorphism Erat Hubungannya Dengan Inheritance / Pewarisan
*/

// *** Kode : Inheritance ***
/*
    Kode : Inheritance
    class Programmer {
        public string $name;
        public function __construct(string $name) {
            $this->name = $name;
        }

        class FrontEndProgrammer extends Programmer {
        }

        class BackEndProgrammer extends Programmer {

        }
    }
*/

// *** Kode : Polymorphism ***
/*
    Kode : Polymorphism
    class Company {
        var Programmer $programmer;

        $company = new Company();
        $company->programmer = new Programmer("Eko");
        $company->programmer = new FrontEndProgrammer("Budi");
        $company->programmer = new BackEndProgrammer("Bambang");
    }
*/

// *** Kode : Function Argument Polymorphism ***
/*
    Kode : Function Argument Polymorphism
    function sayHello (Programmer $programmer) {
        echo "Hello $programmer->programmer" . PHP_EOL;
    }

    sayHello (new Programmer("AIO Tsukasa"));
    sayHello (new FrontEndProgrammer("Fukada Eimi"));
    sayHello (new BackEndProgrammer("Maria Ozawa"));
*/



?>