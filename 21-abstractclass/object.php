<?php

// *** Kode : Membuat Abstract Class ***
    require_once "abstractclass-21.php";

    use Data\{Location, City, Province, Country};

    $location = new Location(); // Error
    // Yang Bisa Kita Lakukan, Bisa Bikin Abstract Class, Jadi Memaksa Bikin Objectnya Harus Pakai Child Class Nya
    $city = new City();
    $province = new Province();
    $country = new Country();

?>