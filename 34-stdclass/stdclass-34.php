<?php


// *** Kode : Konversi Array Ke STDClass ***
    $array = [
        "firstName" => "Agung",
        "middleName" => "Saputro",
        "lastName" => "Risky"
    ];

    //* Konversi Menggunakan (object), Maka Secara Otomatis Semua Array Ini Akan Dijadikan Object
    $object = (object) $array;

    // Otomatis Dibikin stdClass
    // var_dump($object);

    // Sudah Menjadi Object Dari Array / (Sudah Di Konversi)
    echo "First Name $object->firstName" . PHP_EOL;
    echo "Middle Name $object->middleName" . PHP_EOL;
    echo "Last Name $object->lastName" . PHP_EOL;

    // Otomatis Dibikin Array Dari Object
    $arrayLagi = (array) $object;

    var_dump ($arrayLagi);

    // include Dari Materi-8/constant-8.php
    require_once "../materi-8/constant-8.php";

    // Membuat Object
    $person = new Personal ("Eko", "Subang");
    var_dump($person);

    // Konversi Object Ke Array
    $arrayPerson = (array) $person;
    var_dump($arrayPerson);


// ---


// *** STDClass ***


// *** STDClass ***
// *** Kode : Konversi Array Ke STDClass ***


// *** STDClass ***
/*
    STDClass
    - stdclass Adalah class Kosong Bawaan Dari PHP
    - stdclass Biasanya Digunakan Ketika Kita Melakukan Konversi Dari Tipe Lain Menjadi Tipe Object
    - stdclass Sangat Berguna Ketika Misal Kita Ingin Melakukan Konversi Dari Tipe Data Array Ke Object
      Secara Otomatis
*/

// *** Kode : Konversi Array Ke STDClass ***
/*
        $array = [
        "firstName" => "Agung",
        "middleName" => "Saputro",
        "lastName" => "Risky"
    ];

    //* Konversi Menggunakan (object), Maka Secara Otomatis Semua Array Ini Akan Dijadikan Object
    $object = (object) $array;

    //* Otomatis Dibikin stdClass
    //* var_dump($object);

    //* Sudah Menjadi Object Dari Array / (Sudah Di Konversi)
    echo "First Name $object->firstName" . PHP_EOL;
    echo "Middle Name $object->middleName" . PHP_EOL;
    echo "Last Name $object->lastName" . PHP_EOL;
*/



?>