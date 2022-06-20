<?php


namespace Helper;

// *** Kode : Static Properties ***
    class MathHelper {
      //* Properties static
      static public string $name = "Agung Saputro";

      //* Kode : Static Function
    static public function sum (int ...$number): int {
      $total = 0;

      foreach ($number as $number) {
        $total += $number;
      }

      return $total;
    }
    }

    //* Akses static Dengan MathHelper::$name
    echo MathHelper::$name . PHP_EOL;

    //* Kode : Static Function
  $total = MathHelper::sum(10, 10, 10, 10, 10);
  echo "Total $total" . PHP_EOL;


// ---


// *** Static Keyword ***


// *** Static Keyword ***
// *** Kode : Static Properties ***
// *** Kode : Static Function ***


// *** Static Keyword ***
/*
    Static keyword
    - Kata Kunci static, static Adalah Keyword Yang Bisa Kita Gunakan Untuk Membuat Properties Atau function
      Di class Bisa Diakses Secara Langsung Tanpa Mengintansiasi class Terlebih Dahulu
    - Namun Ingat, Saat Kita Buat static Properties Atau function, Secara Otomatis Hal Itu Tidak Akan
      Berhubungan Lagi Dengan class instance Yang Kita Buat
    - Untuk Cara Mengakses static Properties Dan function Sama Seperti Mengakses constant,
      Kita Bisa Menggunakan Operator ::
    - static function Tidak Bisa Mengakses function Biasa, Karena function Biasa Menempel Pada class
      instance Sedangkan static function Tidak
*/

// *** Kode : Static Properties ***
/*
    Kode : Static Properties
    class MathHelper {
      //* Properties static
      static public string $name = "MathHelper";
    }

    //* Akses static Dengan MathHelper::$name
    echo MathHelper::$name . PHP_EOL;
*/

// *** Kode : Static Function ***
/*
    Kode : Static Function
    static public function sum (int ...$number): int {
      $total = 0;

      foreach ($number as $number) {
        $total += $number;
      }

      return $total;
    }

    $total = MathHelper::sum (10, 10, 10, 10, 10);
    echo "Total $total" . PHP_EOL;
*/



?>