<?php

require_once "trait-26.php";

use Data\Traits\{Person};

$person = new Person();
$person->GoodBye("Joko");
$person->Hello("Budi");

// Punya Properties Name
$person->name = "Bambang";
var_dump($person);

?>