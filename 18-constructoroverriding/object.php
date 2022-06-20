<?php

require_once "constructoroverriding-18.php";

$manager = new Manager();
$manager->name = "Atika Nur Aini";
$manager->sayHello("Vira Agistasari");

/*
Ada WARNING => Seharusnya Compatible Dengan Di Isi Parameter string
function sayHello(string $name): void {} Seharusnya Seperti Ini
Ini Tidak Direkomendasikan
*/
// $vp = new VicePresident();
// $vp->name = "Agung Saputro";
// $vp->sayHello();

?>