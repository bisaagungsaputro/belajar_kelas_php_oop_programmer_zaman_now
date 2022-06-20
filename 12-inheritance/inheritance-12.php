<?php


// *** Kode : Inheritance ***
class Manager {
    var string $name;

    //*
    // Cara Lain Kita Kasih Tau Function Ini Tidak Mengembalikan Value Itu Belakangnya Menggunakan : void => Artinya Dia Tidak Mengembalikan Value
    // function sayHello (string $name): void {
    // Jika Tidak Mengembalikan Value Seperti Ini / (Defaultnya)
    function sayHello (string $name) {
        echo "Hi $name, My Name Is $this->name" . PHP_EOL;
    }
}
    class VicePresident extends Manager {

    }

// *** Kode : Mengakses Method Parent ***
    $manager = new Manager();
    $manager->name = "Vira Agistasari";
    $manager->sayHello("Atika Nur Aini");

    $vp = new VicePresident();
    $vp->name = "Agung Saputro";
    $vp->sayHello("Ryan Proto");


// ---


// *** Inheritance ***


// *** Inheritance ***
// *** Kode : Inheritance ***
// *** Kode : Mengakses Method Parent ***


// *** Inheritance ***
/*
    Inheritance
    - Inheritance Atau Pewarisan Adalah Kemampuan Untuk Menurunkan Sebuah class Ke class Lain
    - Dalam Artian, Kita Bisa Membuat class Parent Dan class Child
    - class Child, Hanya Bisa Punya Satu class Parent, Namun Satu class Parent Bisa Punya Banyak class Child
    - Saat Sebuah class Diturunkan, Maka Semua Properties Dan function Yang Ada Di class Parent,
      Secara Otomatis Akan Dimiliki Oleh class Child
    - Untuk Melakukan Pewarisan, Di class Child, Kita Harus Menggunakan Kata Kunci extends Lalu Diikuti Dengan Nama class Parent Nya
*/

// *** Kode : Inheritance ***
/*
    Kode : Inheritance
    class Manager {
        //* Properties Bernama $name
        var string $name;

        //* Punya Function sayHello
        function sayHello (string $name) {
            echo "Hi $name, My Name Is $this->name" . PHP_EOL;
        }
    }

    //* Punya Class VicePresident, Lalu Misalkan Kita Pengen Class VicePresident Sebagai Turunan Dari Class Manager, Maka Kita Bisa Tambahkan Dengan extends
    //* Otomatis Apa Yang Dimiliki Class Manager Akan Di Miliki Juga Sama Class VicePresident Seperti Properties $name Dan Juga Function sayHello Dan Semuanya Yang Ada Di Class Manager Dimiliki Juga Oleh VicePresident
    class VicePresident extends Manager {

    }
*/

// *** Kode : Mengakses Method Parent ***
/*
    Kode : Mengakses Method Parent
    $manager = new Manager();
    $manager->name = "Vira Agistasari";
    $manager->sayHello("Atika Nur Aini");

    $vp = new VicePresident();
    $vp->name = "Agung Saputro";
    $vp->sayHello("Ryan Proto");
*/



?>