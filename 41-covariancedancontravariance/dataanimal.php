<?php

// require_once "";
require_once "food.php";
require_once "animal.php";
require_once "covariancedancontravariance-41.php";

$catShelter = new Data\CatShelter();
$cat = $catShelter->adopt("Luka Cat");

//
$cat->eat(new \Data\AnimalFood());

$dogShelter = new Data\DogShelter();
$dog = $dogShelter->adopt("Luka Dog");

// Jarang Menggunakan Fitur Ini Saat Bikin Aplikasi Dengan Menggunakan Covariance Dan Contravariance
$dog->eat(new \Data\Food());

?>