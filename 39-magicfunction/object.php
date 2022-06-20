<?php

require_once "magicfunction-39.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Agung Saputro";
$student1->age = 23;

/*
- Konversi Menjadi string Si $student1
- Jika Mencoba Konversi Menjadi Sebuah string, Maka Yang Akan Dipanggil,
  __toString()
- Jika __toString() Di Hapus, Maka Dia Akan Error
- Cara 1 - Menggunakan (string)
*/
$string = (string) $student1;

// Menjalankan Yang Dipanggil Di __toString()
echo $string . PHP_EOL;

// Cara 2 - Tanpa Menggunakan (string) => Ini Adalah Magic function To string
echo $student1 . PHP_EOL;

// Array Tidak Bisa Di Input - $variable Bisa Dianggap Sebagai Sebuah function, Nanti Yang Akan Dipanggil Yang __invoke()
$student1(2, "Atika Nur Aini", true, 7.7);

// Magic function 
var_dump($student1);

?>