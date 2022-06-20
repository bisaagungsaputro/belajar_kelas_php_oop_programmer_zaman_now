<?php


// *** Kode : Function Overloading ***
class Zero
{
    public function __call($name, $arguments)
    {
        $join = join(", ", $arguments);
        echo "Call function $name With arguments $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call Static function $name With arguments $join" . PHP_EOL;
    }
}

$zero = new Zero();
$zero->FistName = "Eko";
$zero->MidleName = "Kurniawan";
$zero->LastName = "Khannedy";

// Tidak static
$zero->sayHello("AGUNG", "SAPUTRO", "Kurniawan");

// static
$zero::sayHello("Atika", "Nur", "Aini");


// ---


// *** Overloading ***


// *** Overloading ***
// *** Properties Overloading ***
// *** Magic Function Untuk Properties Overloading ***
// *** Kode : Properties Overloading  ***
// *** Function Overloading ***
// *** Magic Function Untuk Function Overloading ***
// *** Kode : Function Overloading ***


// *** Overloading ***
/*
    Overloading
    - overloading Adalah Kemampuan Secara Dinamis Membuat Properties Atau function
    - Ini Mirip Meta Programming Di Bahasa Pemprograman Lain Seperti Ruby
    - Namun Ini Berbeda Dengan function overloading Di Bahasa Pemprograman Lain Seperti Java
    - overloading Ini Erat Kaitannya Dengan Magic function Yang Sebelumnya Sudah kita Bahas
*/

// *** Properties Overloading ***
/*
    Properties Overloading
    - Saat Kita Mengakses Properties, Maka Secara Otomatis Properties Akan Diakses
    - Namun Jika Ternyata Properties Tersebut Tidak Tersedia Di Objectnya,
      Maka PHP Tidak Secara Otomatis Menjadikan Itu Error
    - PHP Akan Melakukan Fallback Ke Magic function
    - Dengan Demikian Kita Bisa Membuat Properties Secara Dinamis Dengan Memanfaatkan
      Magic function Tersebut
    - Ada Beberapa Magic function Yang Bisa Kita Gunakan Untuk Properties overloading
*/

// *** Magic Function Untuk Properties Overloading ***
/*
    Magic Function Untuk Properties Overloading
    Magic Function                      Keterangan
    __set($name, $value): void          Dieksekusi Ketika Mengubah Properties Yang Tidak Tersedia
    __get($name): mixed                 Dieksekusi Ketika Mengakses Properties Yang Tidak Tersedia
    __isset($name): bool                Dieksekusi Ketika Mengakses isset() Atau empty()
                                        Properties Yang Tidak Tersedia
    __unset($nama): void                Dieksekusi Ketika Menggunakan unset()
                                        Properties Yang Tidak Tersedia

    => ($name) => Nama Propertiesnya
*/

// *** Kode : Properties Overloading  ***
/*
    Kode : Properties Overloading
    class Zero {
        private array $properties = [];

        //* get => Untuk Mengambil Data, Berdasarkan Properties Name Nya
        public function __get($name) {
            return $this->properties[$name];
        }

        //* set => Untuk Mengubah Data Berdasarkan Properties Name Nya
        public function __set($name, $value) {
            $this->properties[$name] = $value;
        }

        //* isset => Untuk Mengecek Apakah Sudah Di Set Berdasarkan Dari Properties Name Nya
        public function __isset($name) {
            return isset($this->properties[$name]);
        }

        //* unset => Untuk Meng-Unset Berdasarkan Dari Properties Name Nya
        public function __unset($name) {
            unset($this->properties[$name]);
        }
    }
*/

// *** Function Overloading ***
/*
    Function Overloading
    - Saat Kita Mengakses function, Maka Secara Otomatis function Akan Diakses
    - Namun Jika Ternyata function Tersebut Tidak Tersedia Di Objectnya, Maka PHP Tidak
      Secara Otomatis Menjadikan Itu Error
    - PHP Akan Melakukan Fallback Ke Magic function
    - Dengan Demikian Kita Bisa Membuat function Secara Dinamis Dengan Memanfaatkan Magic function Tersebut
    - Ada Beberapa Magic function Yang Bisa Kita Gunakan Untuk function Overloading
*/

// *** Magic Function Untuk Function Overloading ***
/*
    Magic Function Untuk Function Overloading
    Magic Function                                  Keterangan
    __call($name, $arguments): mixed                Dieksekusi Ketika Memanggil function Yang
                                                    Tidak Tersedia
    static __callStatic($name, $arguments): mixed   Dieksekusi Ketika Memanggil static function Yang
                                                    Tidak Tersedia

    => $name => Nama function
    => $arguments =>  arguments Dari function Nya, Menjadi Variable arguments, return Terserah
       Mau return Value Atau Tidak (Tidak static)

    => Kalau static function, Maka Dia Akan Fallback Ke static __callStatic , Ini Harus static function
*/

// *** Kode : Function Overloading ***
/*
    Kode : Function Overloading
    class Zero {
        public function __call($name, $arguments) {
            $join = join(",", $arguments);
            echo "Call function $name With arguments $join" . PHP_EOL;
        }

        public static function __callStatic($name, $arguments) {
            $join = join(",", $arguments);
            echo "Call Static function $name With arguments $join" . PHP_EOL;
        }
    }

    //* - Seolah - Olah Teman - Teman Bikin Dinamis, Teman - Teman Tidak Ada function Nya,
    //*   Tapi Teman - Teman Bisa Automatic Bikin function Nya,
    //*   Karena Dia Akan Manggil function call Dan static
*/



?>