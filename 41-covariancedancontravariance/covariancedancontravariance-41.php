<?php


namespace Data;

require_once "animal.php";

interface AnimalShelter {
    function adopt(string $name): Animals;
}

class CatShelter implements AnimalShelter {
    public function adopt(string $name): Cat
    {
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}

class DogShelter implements AnimalShelter
{
    public function adopt(string $name): Dog
    {
        $dog = new Dog();
        $dog->name = $name;
        return $dog;
    }
}


// ---


// *** Covariance ***


// *** Covariance ***
// *** Kode : Inheritance ***
// *** Kode : Covariance ***
// *** Contravariance ***
// *** Kode : Inheritance ***
// *** Kode : Invariance (1) ***


// *** Covariance ***
/*
    Covariance
    - Saat Kita Meng-Override function Dari parent class, Biasanya Di child class Kita Akan
      Membuat function Yang Sama Dengan function Yang Di parent
    - Covariance Memungkinkan Kita Meng-Override return function Yang Di parent Dengan
      return Value Yang Lebih Spesifik

    => Melibatkan Inheritance
*/

// *** Kode : Inheritance ***
/*
    Kode : Inheritance
    namespace Data;

    abstract class Animal{...}

    class Cat extends Animal{...}
    class Dog extends Animal{...}
*/

// *** Kode : Covariance ***
/*
    Kode : Covariance
    //* AnimalShelter => Tempat Penampungan Hewan
    interface AnimalShelter {
        //* $name => Nama Hewannya
        //* return Animal => Bisa Lebih Spesifik Misalnya Cat Atau Dog Untuk Mengembalikan Data Yang
        //* Lebih Spesifik
        function adopt(string $name): Animal;
    }

    class CatShelter implements AnimalShelter {
        function adopt(string $name): Cat {
            $cat = new Cat();
            $cat->name = $name;
            return $cat;
        }
    }

    class DogShelter implements AnimalShelter {
        function adopt(string $name): Dog {
            $dog = new Dog();
            $dog->name = $name;
            return $dog;
        }
    }
*/

// *** Contravariance ***
/*
    Contravariance
    - Sedangkan Contravariance Adalah Memperbolehkan Sebuah child class Untuk Membuat function
      argument Yang Lebih Tidak Spesifik Dibandingkan parent Nya
*/

// *** Kode : Inheritance ***
/*
    Kode : Inheritance
    class Food {

    }

    class AnimalFood extends Food {

    }
*/

// *** Kode : Invariance (1) ***
/*
    Kode : Invariance (1)
    abstract class Animals {
        public string $name;
        public abstract function run();
        public abstract function eat(AnimalFood $food);
    }
*/



?>