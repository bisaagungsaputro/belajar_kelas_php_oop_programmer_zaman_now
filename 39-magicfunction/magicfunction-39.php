<?php


// *** Kode : __toString() Function ***
class Student {
    public string $id;
    public string $name;
    public int $age;

    public function __toString(): string {
        return "Student ID : $this->id, Name : $this->name, Age : $this->age";
    }

    public function __invoke(...$arguments)
    {
        $join = join(",", $arguments);
        echo "Invoke Student With Arguments $join" . PHP_EOL;
    }

    public function __debugInfo(): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "age" => $this->age,
            // Silahkan Bebas Tambahkan Di Magic function __debugInfo
            "author" => "ProgrammerZamanNow",
            "version" => "7.7.7"
        ];
    }
}


// ---


// *** Magic Function ***


// *** Magic Function ***
// *** __toString() Function ***
// *** Kode : __toString() Function ***
// *** __invoke() Function ***
// *** Kode : __invoke() Function ***
// *** __debugInfo() Function ***
// *** Kode : __debugInfo() Function ***
// *** Dan Masih Banyak Lagi ***


// *** Magic Function ***
/*
    Magic Function
    - Magic function Adalah function - function Yang Sudah Ditentukan Kegunaannya Di PHP
    - Kita Tidak Bisa Membuat function Tersebut, Kecuali Memang Sudah Ditentukan Kegunaannya
    - Sebelumnya Kita Sudah Membahas Beberapa Magic function, Seperti __construct() Sebagai
      constructor, __destruct() Sebagai destructor, Dan __clone() Sebagai object cloning
    - Masih Banyak Magic function Lainnya, Kita Bisa Melihatnya Di Link Berikut :
      https://www.php.net/manual/en/language.oop5.magic.php
    
    => Kita Akan Membahas Beberapa Saja Yang Biasa Kita Gunakan
*/

// *** __toString() Function ***
/*
    __toString() Function
    - __toString() function Merupakan Salah Satu Magic function Yang Digunakan Sebagai Representasi
      string Sebuah Object
    - Jika Misal Kita Ingin Membuat string Dari Object Kita, Kita Bisa Membuat function __toString()
*/

// *** Kode : __toString() Function ***
/*
    Kode : __toString() Function
    public string $id;
    public string $name;
    public int $age;

    public funtion __toString(): void {
        return "Student ID : $this->id, Name : $this->name, Age : $this->age";
    }
*/

// *** __invoke() Function ***
/*
    __invoke() Function
    - __invoke() Merupakan function Yang Dieksekusi Ketika Object Yang Kita Buat Dianggap Sebagai function
    - Misal Ketika Kita Membuat Object $student, Lalu Kita Melakukan $student(),
      Maka Secara Otomatis function __invoke() Yang Akan Dieksekusi
*/


// *** Kode : __invoke() Function ***
/*
    Kode : __invoke() Function
    class Student {
        public string $id;
        public string $name;
        public int $age;

        public function __invoke(...$arguments) {
            $join = join(",", $arguments);
            echo "Invoke Student With Arguments $join" . PHP_EOL;
        }
    }
*/

// *** __debugInfo() Function ***
/*
    __debugInfo() Function
    - Sebelumnya Kita Sering Melakukan Debug Variable Menggunakan function var_dump()
    - function var_dump() Sebenarnya Memanggil function __debugInfo()
    - Jika Kita Ingin Mengubah Isi Dari Debug Info, Kita Bisa Membuat function __debugInfo()

    => Mendapatkan Info Sedetail - Detailnya
*/

// *** Kode : __debugInfo() Function ***
/*
    Kode : __debugInfo() Function
    class Student {
        public string $id;
        public string $name;
        public int $value;

        public function __debugInfo(): array
        {
            return [
                "id" => $this->id,
                "name" => $this->name,
                "value" => $this->value,
                "author" => "ProgrammerZamanNow"
            ];
        }
    }
*/

// *** Dan Masih Banyak Lagi ***
/*
    Dan Masih Banyak Lagi
    https://www.php.net/manual/en/language.oop5.magic.php
*/



?>