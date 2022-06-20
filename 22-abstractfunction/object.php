<?php

// *** Kode :  Menggunakan Abstract Funtion ***
    require_once "abstractfunction-22.php";

    use Data\{cat, Dog};

    $cat = new Cat();
    $cat->name = "Luna";
    $cat->run();

    $dog = new Dog();
    $dog->name = "Maya";
    $dog->run();

?>