<?php


//*** Kode : Getter Dan Setter ***
    class Category {
        /*
        Inilah Kegunaan Getter Dan Setter Supaya Memastikan Datanya Tidak Terekspor Keluar,
        Jika public Tidak Bisa Validasi, Seseorang Bisa Seenaknya Mengubah Datanya
        */
        private string $name;
        private bool $explode;

        public function getName (): string {
            return $this->name;
        }

        // Tidak Menggunakan Validasi
        // public function setName (string $name): void {
        //     $this->name = $name;
        // }

// *** Kode : Validation Di Setter ***
        public function setName (string $name): void {
        if (trim($name) != "") {
            $this->name = $name;
        }
        }

        public function isExpensive(): bool {
            return $this->explode;
        }

        public function setExpensive(bool $explode): void {
            $this->explode = $explode;
        }
    }


// ---


// *** Getter Dan Setter ***


// *** Encapsulation ***
// *** Getter Dan Setter ***
// *** Getter Dan Setter Method ***
// *** Kode : Getter Dan Setter ***
// *** Kode : Menggunakan Getter Dan Setter ***
// *** Kode : Validation Di Setter ***


// *** Encapsulation ***
/*
    Encapsulation
    - Encapsulation Artinya Memastikan Data Sensitif Sebuah Object Tersembunyi Dari Akses Luar
    - Hal Ini Bertujuan Agar Kita Bisa Menjaga Agar Data Sebuah Object Tetap Baik Dan Valid
    - Untuk Mencapai Ini, Biasanya Kita Akan Membuat Semua Properties Menggunakan Access Modifier
      private, Sehingga Tidak Bisa Diakses Atau Diubah Dari Luar
    - Agar Bisa Diubah, Kita Akan Menyediakan function Untuk Mengubah Dan Mendapatkan Properties Tersebut
*/

// *** Getter Dan Setter ***
/*
    Getter Dan Setter
    - Di PHP, Proses Encapsulation Sudah Dibuat Standarisasinya, Dimana Kita Bisa Menggunakan
      Getter Dan Setter Method
    - Getter Adalah function Yang Dibuat Untuk Mengambil Data Field
    - Setter Ada function Untuk Mengubah Data Field

    => Pakai AutoComplete Supaya Mempercepat Coding
*/

// *** Getter Dan Setter Method ***
/*
    Getter Dan Setter Method
    Tipe Data           Getter Method           Setter Method
    Boolean             isXxx(): bool           setXxx(bool value)
    Lainnya             getXxx(): tipeData      setXxx(tipeData value)
*/

// *** Kode : Getter Dan Setter ***
/*
    Kode : Getter Dan Setter
    namespace Data;

    class Category {
        private string $name;
        private bool $expensive;

        public function getName (): string {
            return $this->name;
        }

        public function setName (string $name): void {
            $this->name = $name;
        }

        public function isExpensive(): bool {
            return $this->espensive;
        }

        public function setExpensive(bool $expensive): void {
            $this->expensive = $expensive;
        }
    }
*/

// *** Kode : Menggunakan Getter Dan Setter ***
/*
    Kode : Menggunakan Getter Dan Setter
    require_once "getterdansetter-23.php";

    use Data\Category;

    $category = new Category();
    $category->setName("Handphone");
    $category->setExpensive(true);

    echo "Name : $category->getName()" . PHP_EOL;
    echo "Expensive : $category->getExpensive()" . PHP_EOL;
*/

// *** Kode : Validation Di Setter ***
/*
    Kode : Validation Di Setter
    public function setName (string $name): void {
        if (trim($name) != "") {
            $this->name = $name;
        }
    }
*/



?>