<?php


class Product {
    // Dia Punya name, Tapi Dia Tidak Bisa Diakses Dari Luar
    protected string $name;
    private int $price;

    public function __construct(string $name, int $price)
    {
        // Masih Bisa Akses Variable $name Dan $price Karena private Masih Didalam class Yang Sama
        $this->name = $name;
        $this->price = $price;
    }

    // Ambil / Get Data
    public function getName(): string {
        return $this->name;
    }

    // Ambil / Get Data
    public function getPrice(): int
    {
        return $this->price;
    }
}

// Ambil Data Di class Product
class ProductDummy extends Product {

    // Gimana Supaya Turunannya Bisa Diakses, Dengan Menggunakan protected Bukan private
    public function Info () {
        echo "Name $this->name" . PHP_EOL;
    }
}


// ---


// *** Visibility ***


// *** Visibility ***
// *** Access Level ***
// *** Kode : Class Product ***
// *** Kode : Menggunakan Product ***


// *** Visibility ***
/*
    Visibility
    - Visibility / Access Modifier Adalah Kemampuan Properties, function Dan Constant
      Dapat Diakses Dari Mana Saja
    - Secara Default, Properties, function Dan Constant Yang Kita Buat Di Dalam class
      Bisa Diakses Dari Mana Saja, Atau Artinya Dia Adalah Public
    - Selain Public, Masih Ada Beberapa Visibility Lainnya
    - Secara Default Kata Kunci var Untuk Properties Adalah Bersifat Public
*/

// *** Access Level ***
/*
    Access Level
    Modifier            Class           Subclass            World
    public              Y               Y                   Y
    protected           Y               Y                   N
    private             Y               N                   N

    => Secara Default, Kalau Teman - Teman Tidak Menyembutkan Kayak Bikin function,
       Tidak Menyembutkan public, Maka Defaultnya Adalah public

    => 1.) public Artinya Misalkan Kita Set Properties, function, Dan Constant Secara public
           Artinya Biasanya Diakses Dari 1. class Yang Sama (Dari Dalam class Sama Bisa Diakses)
           Dan 2. Bisa Diakses Oleh Turunannya Dan 3. Bisa Diakses Oleh Luar class

    => Jika Kita Kecilkan Scopenya Bisa Menggunakan protected

    => 2.) Apa Itu protected => 1. Hanya Bisa Diakses Dalam classnya, 2. Dan Dikelas Turunannya
           Dia Tidak Bisa Diakses Dari Luar class (Bikin Object Tersebut Tidak Diakses Oleh Properties protected)

    => 3.) Apa Itu private => 1. Hanya Bisa Diakses Dari Dalam Classnya Sendiri
*/

// *** Kode : Class Product ***
/*
    Kode : Class Product
    class Product {
        //* Defaultnya var Itu public / Bisa Pakai var Atau public
        private string $name;
        private int $price;

        public function __construct(string $name, int $price) {
            this->name = $name;
            this->price = $price;
        }

        public function getName(): string {
            return $this->name;
        }
    }
*/

// *** Kode : Menggunakan Product ***
/*
    Kode : Menggunakan Product
    require_once "visibility-15.php";

    use Data\Product;

    $product = new Product("Apple", 10000);

    echo $product->getName() . PHP_EOL;

    $product->name = "Orange"; // Error
    $product->price = 20000; // Error

    => Kenapa Error? Karena Mereka private, Jadi Tidak Bisa Diakses Dari Luar class Product
*/



?>