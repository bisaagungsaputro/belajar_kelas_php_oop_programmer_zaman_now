<?php

require_once "traitoverriding-27.php";

use Data\Traits\{Person};

$person = new Person();
$person->GoodBye("Joko");
$person->Hello("Budi");

// Punya Properties Name
$person->name = "Bambang";
var_dump($person);

$person->run();

?>