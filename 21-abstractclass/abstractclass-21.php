<?php


//*** Kode : Abstract Class ***
    namespace Data;

    abstract class Location {
        public string $name;
    }

    class City extends Location {

    }

    class Country extends Location {

    }

    class Province extends Location {

    }


// ---


// *** Abstract Class ***


// *** Abstract Class ***
// *** Kode : Abstract Class ***
// *** Kode : Membuat Abstract Class ***


// *** Abstract Class ***
/*
    Abstract Class
    - Saat Kita Membuat class, Kita Bisa Menjadikan Sebuah class Sebagai Abstract class
    - abstract class Artinya class Tersebut Tidak Bisa Dibuat Sebagai Object Secara Langsung,
      Hanya Bisa Diturunkan
    - Untuk Membuat Sebuah class Menjadi abstract, Kita Bisa Menggunakan Kata Kunci abstract,
      Sebelum Kata Kunci class
    - Sehingga abstract class Bisa Kita Gunakan Sebagai Kontrak child class
*/

// *** Kode : Abstract Class ***
/*
    Kode : Abstract Class
    namespace Data;

    abstract class Location {
        public string $name;
    }

    class City extends Location {

    }
*/

// *** Kode : Membuat Abstract Class ***
/*
    Kode : Membuat Abstract Class
    require_once "abstractclass-21.php";

    use Data\{Location, City};

    $location = new Location(); // Error
    $city = new City();
*/



?>