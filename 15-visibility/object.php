<?php

require "visibility-15.php";

$product = new Product("Apple", 10000);

// Tidak Bisa Mengakses name Karena Di private
// echo $product->name . PHP_EOL;
// echo $product->price . PHP_EOL;

// Kenapa Bisa Diakses? Karena getName Nya Adalah public
echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

// Visibility protected
$productdummy = new ProductDummy("Samsung", 20000);

$productdummy->Info();

?>