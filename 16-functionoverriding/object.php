<?php

require_once "functionoverriding-16.php";

$manager = new Manager();
$manager->name = "Atika Nur Aini";
$manager->sayHello("Budi");

$vp = new VicePresident();
$vp->name = "Agung Saputro";
$vp->sayHello("Bambang");

?>