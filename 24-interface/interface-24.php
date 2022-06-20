<?php


// *** Kode : Membuat Interface ***
    namespace data;

    //* Baik Default interface Sudah abstract, Bisa Lebih Dari Satu Inheritance
    interface koko
    {
         function drive(): void;

         function getTire(): int;
    }

    // *** Kode : Implement Interface ***
    //* Boleh Di Gabung Implements Dan Interface, Yang Penting Itu Extends Cuma Boleh 1 - Kalau Implements Bisa Lebih Dari 1
    class Avanza implements koko
    {
         public function drive(): void {
            echo "Drive Avanza" . PHP_EOL;
        }

         public function getTire(): int {
            return 4;
        }
    }


// ---


// *** Interface ***


// *** Interface ***
// *** Kode : Membuat Interface ***
// *** Kode : Implement Interface ***


// *** Interface ***
/*
    Interface
    - Sebelumnya Kita Sudah Tahu Bahwa abstract class Kita Gunakan Sebagai Kontrak Untuk class child Nya
    - Namun Sebenarnya Yang Lebih Tepat Untuk Kontrak Adalah interface
    - Jangan Salah Sangka Bahwa interface Disini Bukanlah (User interface)
    - interface Mirip Seperti abstract class, Yang Membedakan Adalah Di interface, Semua Method
      Otomatis abstract, Tidak Memiliki Block
    - Di interface Kita Tidak Boleh Memiliki Properties, Kita Hanya Boleh Memiliki constant
    - Untuk Mewariskan interface, Kita Tidak Menggunakan Kata Kunci extends, Melainkan implements
    - Dan Berbeda Dengan class, Kita Bisa implements Lebih Dari Satu interface
*/

// *** Kode : Membuat Interface ***
/*
    Kode : Membuat Interface
    namespace Data;

    //* Baik Default interface Sudah abstract
    interface Car {
        function Drive (): void;

        function getTire(): int;
    }
*/

// *** Kode : Implement Interface ***
/*
    Kode : Implement Interface
    //* Boleh Di Gabung Implements Dan Interface, Yang Penting Itu Extends Cuma Boleh 1 - Kalau Implements Bisa Lebih Dari 1
    class Avanza implements Car {
        function Drive (): void {
            echo "Drive Avanza" . PHP_EOL;
        }

        function getTire (): int {
            return 4;
        }
    }

*/



?>