<?php


namespace Data;

interface HasBrand {
    function getBrand(): string;
}

interface IsMaintance {
    function isMaintance(): bool;
}

interface Cars extends HasBrand {
    function drive(): void;

    function getTire(): int;
}

/*
Cars extends HasBrand => Otomatis Jadi Error, Error Apa? Kita implements Cars Sedangkan Cars extens HasBrand
Jadi Yang function getBrand Ini Harus Kita implementasikan Dalam class Avanza
*/
// Single implements
// class Avanza implements Cars {

// Multiple implements
class Avanza implements Cars, IsMaintance {
    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }

    // Disini Implementasikan getBrand, Jadi Wajib Di Implementasikan Dari interface Cars
    public function getBrand(): string {
        return "Toyota";
    }

    // Disini Implementasikan isMaintance, Jadi Wajib Di Implementasikan Dari interface IsMaintance
    public function isMaintance(): bool
    {
        return false;
    }
}


// ---


// *** Interface Inheritance ***


// *** Interface Inheritance ***
// *** Kode : Interface Inheritance ***
// *** Kode : Multiple Interface Inheritance ***


// *** Interface Inheritance ***
/*
    Interface Inheritance
    - Sebelumnya Kita Sudah Tahu Kalau Di PHP, child class Hanya Bisa Punya 1 class parent
    - Namun Berbeda Dengan interface, Sebuah child class Bisa implement Lebih Dari 1 interface
    - Bahkan interface Pun Bisa implement interface Lain, Bisa Lebih Dari 1, Namun Jika interface
      Ingin Mewarisi interface Lain, Kita Menggunakan Kata Kunci extends, Bukan implements

    => extends Sesama interface Itu Boleh, Bahkan Bisa Lebih Dari 1
       interface Cars extends HasBrand, isMaintance {
*/

// *** Kode : Interface Inheritance ***
/*
    Kode : Interface Inheritance
    interface  HasBrand{
        function getBrand(): string;
    }

    interface IsMaintance {
        function isMaintance (): bool;
    }

    interface Cars extends HasBrand {

    }
*/

// *** Kode : Multiple Interface Inheritance ***
/*
    Kode : Multiple Interface Inheritance
    class Avanza implements Cars, IsMaintace {
        function getBrand(): string {
            return "Toyota";
        }
    }

        function isMaintance(): bool
    {
        return false;
    }
    public function drive(): void {
    }
}
*/



?>