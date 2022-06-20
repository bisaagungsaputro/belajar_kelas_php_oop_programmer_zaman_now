<?php


// *** Kode : Generator - Ganjil ***
function getGanjil(int $max): Iterator
{

    $array = [];

    for ($i = 1; $i <= $max; $i++) {
        if ($i % 2 == 1) {
            $array[] = $i;
        }
    }

    return new ArrayIterator($array);
}

foreach (getGanjil(100) as $value) {
    echo "Ganjil $value" . PHP_EOL;
}

// *** Kode : Generator - Genap ***
    function getGenap (int $max): Iterator {

        $array = [];

        for ($i = 1; $i <= $max; $i++) {
            if ($i % 2 == 0) {
                $array[] = $i;
            }
        }

        return new ArrayIterator($array);
    }

    foreach (getGenap(100) as $value) {
        echo "Genap $value" . PHP_EOL;
    }

// *** Kode : Generator - Ganjil Menggunakan yield ***
    function getGanjilYield (int $max): Iterator {
        for ($i = 1; $i <= $max; $i++) {
            if ($i % 2 == 1) {
                yield $i;
        }
    }
    }

    foreach (getGanjilYield(100) as $value) {
        echo "Ganjil Yield : $value" . PHP_EOL;
    }

// *** Kode : Generator - Ganjil Menggunakan yield ***
    function getGenapYield(int $max): Iterator {
        for ($i = 1; $i <= $max; $i++) {
            if ($i % 2 == 0) {
                yield $i;
        }
    }
}

    foreach (getGenapYield(100) as $value) {
        echo "Genap Yield : $value" . PHP_EOL;
}

// IteratorAggregate => interface Bawaan Dari PHP, Jadi Otomatis Ada
class Data implements IteratorAggregate
{
    var string $first = "Satu";
    public string $second = "Dua";
    private string $third = "Tiga";
    protected string $fourth = "Empat";

    public function getIterator()
    {
        // Bisa Diakses Meskipun Visibility Nya private, protected Karena Menggunakan getIterator Bawaan PHP
        // Menggunakan array - Materi 35 (Object Iteration)
        $array = [
            // "first" => $this->first,
            // "second" => $this->second,
            // "third" => $this->third,
            // "fourth" => $this->fourth,
        ];

        // $iterator = new ArrayIterator($array);
        // return $iterator;

        // Disingkat Menjadi
        // return new ArrayIterator($array);

        // Menggunakan yield - Materi 36 (Generator)
        yield "first" => $this->first;
        yield "second" => $this->second;
        yield "third" => $this->third;
        yield "fourth" => $this->fourth;
    }
}

$data = new Data();

/*
Saat Perulangan foreach, Maka Otomatis Si PHP Akan Manggil function getIterator,
Dia Bisa Tau Kalau Teman - Teman implements IteratorAggregate Dia Akan Memanggil function getIterator
Nanti $array Yang Ini Kita Balikan Di ArrayIterator Dia Akan Dijadikan Sebagai interasi Dalam foreach
*/
foreach ($data as $properties => $values) {
    echo "$properties : $values" . PHP_EOL;
}


// ---


// *** Generator ***


// *** Generator ***
// *** Kode : Generator ***


// *** Generator ***
/*
    Generator
    - Sebelumnya Kita Tahu Bahwa Untuk Membuat Object Yang Bisa Di Iterasi, Kita Menggunakan Iterator
    - Namun Pembuatan Iterator Secara Manual Sangatlah Ribet / Tidak Di Rekomendasikan
    - Untungnya Di PHP, Terdapat Fitur Generator, Yang Bisa Kita Gunakan Untuk Membuat Iterator
      Secara Otomatis Hanya Dengan Menggunakan Kata Kunci yield

    => Sekarang Bisa Bikin iterator Lebih Simple Ga Perlu Bikin Lagi Pakai Iterator Manual
       Apalagi Bikin Iterator Sendiri Tidak Perlu, Tidak Perlu Bikin Array,
       Teman - Teman Langsung Bikin Menggunakan yield Jadi Nanti Dia Otomatis Akan Menjadi Sebuah iterator
    => Kalau Tidak Perlu Key Langsung Value Saja
    => Kalau Butuh Key Dan Value, Kasih Key Dan Value
    => Inilah Object Generator, Untuk Mengeration Iterator Secara Otomatis
*/

// *** Kode : Generator ***
/*
    Kode : Generator
    function getGanjil (int $max): Iterator {
        for ($i = 0; $i <= $maxl $i++) {
            if ($i % 2 == 1) {
                yield $i;
            }
        }
    }

    $ganjil = getGanjil(100);

    foreach ($ganjil as $value) {
        echo "Ganjil $value" . PHP_EOL;
    }
*/



?>