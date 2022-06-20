<?php


class Programmer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class FrontEndProgrammer extends Programmer
{
}

class BackendProgrammer extends Programmer
{
}

class Company
{
    public Programmer $programmer;
}

function sayHelloProgrammer(Programmer $programmer) {

    // Kalau Object Pakai instanceof
    if ($programmer instanceof FrontEndProgrammer) {
        echo "Hello Frontend Programmer $programmer->name" . PHP_EOL;
    }
    else if ($programmer instanceof BackEndProgrammer) {
        echo "Hello Backend Programmer $programmer->name" . PHP_EOL;
    }

    else if ($programmer instanceof Programmer) {
        echo "Hello Programmer $programmer->name" . PHP_EOL;
    }
}


// ---


// *** Type Check & Casts ***


// *** Type Check & Casts ***
// *** Kode : Type Check & Casts ***


// *** Type Check & Casts ***
/*
    Type Check & Casts
    - Sebelumnya Kita Sudah Tahu Cara Melakukan Konversi Tipe Data Bukan class
    - Khusus Untuk Tipe Data Object, Kita Tidak Perlu Melakukan Konversi Secara Exsplisit
    - Namun Agar Aman, Sebelum Melakukan Casts, Pastikan Kita Melakukan Type Check (Pengecekan Tipe Data),
      Dengan Menggunakan Kata Kunci instanceof
    - Hasil Operator instanceof Adalah Boolean, true Jika Tipe Data Sesuai, false Jika Tidak Sesuai
*/

// *** Kode : Type Check & Casts ***
/*
    Kode : Type Check & Casts
    function sayHello(Programmer $programmer) {
        if ($programmer instanceof BackendProgrammer) {
            echo "Hello Backend Programmer $programmer->name" . PHP_EOL;
        }
        else if ($programmer instanceof FrontendProgrammer) {
            echo "Hello Frontend Programmer $programmer->name" . PHP_EOL;
        }

        else if ($programmer instanceof Programmer) {
            echo "Hello Programmer $programmer->name" . PHP_EOL;
        }
    }
*/



?>