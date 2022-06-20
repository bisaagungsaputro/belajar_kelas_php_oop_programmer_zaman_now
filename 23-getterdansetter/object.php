<?php

require_once "getterdansetter-23.php";

$category = new Category();
// Tidak Pakai Validation
$category->setName("Handphone");
// Pakai Validation
$category->setName("");
$category->setExpensive(true);

echo "Name : {$category->getName()}" . PHP_EOL;
echo "Expensive : {$category->isExpensive()}" . PHP_EOL;

// Benefit Membuat Getter Dan Setter => Teman - Teman Bisa Memprotecd Datanya
// Expensive Tidak Boleh Di Export Keluar, Teman - Teman Tinggal Bikin Getter Dan Setternya

?>