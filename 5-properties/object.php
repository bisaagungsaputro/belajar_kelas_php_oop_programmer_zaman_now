<?php

require_once "properties-5.php";

// *** Kode : Manipulasi Properties ***
$person = new Properties();
$person->name = "Eko";
$person->adress = "Subang";
$person->country = "Indonesia";

// Tidak Pakai Pembungkus - Cara 1
echo "Name    : $person->name" . PHP_EOL;
// Pakai Pembungkus - Cara 2
echo "Adress  : {$person->adress}" . PHP_EOL;
echo "Country : {$person->country}" . PHP_EOL;

var_dump($person);

// Mengubah Variable $person Menjadi $person2, Tetap Menggunakan Nama class Properties
$person2 = new Properties();
$person2->name = "Agung Saputro";
$person2->adress = "Jakarta Timur";
$person2->country = "Indonesia";

echo "Name    : $person2->name" . PHP_EOL;
echo "Adress  : $person2->adress" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

var_dump($person2);

// Class Menggunakan Type Data String
$personal = new Personal();
$personal->name = "Atika Nur Aini";
$personal->adress = "Jakarta Pusat";
$personal->country = "Bandung";

echo "Name    : $personal->name" . PHP_EOL;
echo "Adress  : $personal->adress" . PHP_EOL;
echo "Country : $personal->country" . PHP_EOL;

var_dump($personal);

$identitas = new Identitas();
$identitas->name = "Atika Nur Aini";
$identitas->adress = "Jakarta Pusat";

echo "Name    : $identitas->name" . PHP_EOL;
echo "Adress  : $identitas->adress" . PHP_EOL;
echo "Adress  : $identitas->country" . PHP_EOL;

var_dump($identitas);

?>