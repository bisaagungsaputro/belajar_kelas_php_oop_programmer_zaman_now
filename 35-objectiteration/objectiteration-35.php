<?php


// *** Kode : Object Iteration ***
    class Data {
        // Sudah public Si (var , public) Sehingga Value Muncul
        var string $first = "Satu";
        public string $second = "Dua";

        // Bukan public Untuk (private , protected) Sehingga Value Tidak Muncul
        private string $third = "Tiga";
        protected string $fourth = "Empat";
    }

    $data = new Data();

    // Perulangan Menggunakan foreach
    foreach ($data as $value1) {
        echo "$value1" . PHP_EOL;
    }

    // Perulangan Menggunakan foreach
    foreach ($data as $value2 => $properties2) {
    echo "$value2 : $properties2" . PHP_EOL;
    }


// ---


// *** Object Iteration ***


// *** Object Iteration ***
// *** Kode : Object Iteration ***
// *** Iterator ***
// *** Kode : Iterator ***


// *** Object Iteration ***
/*
    Object Iteration
    - Saat Kita Membuat Object Dari Sebuah class, Kita Bisa Melakukan iterasi Ke Semua Properties
      Yang Terdapat Di Object Tersebut Menggunakan foreach
    - Hal Ini Mempermudah Kita Saat Ingin Mengakses Semua Properties Yang Ada Di Object
    - Secara Default, Hanya Properties Yang Public Yang Bisa Diakses Oleh foreach

    => Perulangan foreach Itu Tidak Hanya Bisa Gunakan Untuk Melakukan Perulangan Terdapat Array
       Tapi Juga Bisa Digunakan Perulangan Terdapat Object

    => Bedanya Jika Kita Melakukan Perulangan foreach Untuk Object Yang Kita Ambil Key Nya Properties Nya
       Dan Value Nya Adalah Value Dari Properties

    => Properties Hanya Cuma Bisa Diakses Dari Luar Artinya Visibility public Saja Yang Bisa Diakses Oleh foreach
*/

// *** Kode : Object Iteration ***
/*
    Kode : Object Iteration
    class Data {
        var string $first = "Satu";
        public string $second = "Dua";
        private string $third = "Tiga";
        protected string $fourth = "Empat";
    }

    $data = new Data();

    foeach ($data as $key => $value) {
        echo "$key : $value" . PHP_EOL;
    }
*/

// *** Iterator ***
/*
    Iterator
    - Sebelumnya Kita Melakukan iterasi Data Di Properties Secara Otomatis Menggunakan foreach
    - Jika Kita Ingin Menangani Hal Ini Secara Manual, Kita Bisa Menggunakan iterator
    - iterator Adalah interface Yang Digunakan Untuk Melakukan iterasi, Namun Membuat iterator
      Secara Manual Lumayan Cukup Ribet, Oleh Karena Itu Sekarang Kita Akan Gunakan arrayiterator,
      Yaitu iterator Yang Menggunakan array Sebagai Data iterasi Nya
    - Dan Agar class Kita Bisa Di iterasi Secara Manual, Kita Bisa Menggunakan interface iteratorAggregate
      Disana Kita Hanya Butuh Meng-Override function getIterator() Yang Mengembalikan Data iterator
*/

// *** Kode : Iterator ***
/*
    Kode : Iterator
    class Data implements IteratorAggregate {
        var string $first = "Satu";
        public string $second = "Dua";
        private string $third = "Tiga";
        protected string $fourth = "Empat";

    public function getIterator () {
        return new ArrayIterator([
            "first" => $this->first,
            "second" => $this->second,
            "third" => $this->third,
            "fourth" => $this->fourth,
        ]);
    }
}
*/



?>