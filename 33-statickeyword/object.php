<?php

require_once "statickeyword-33.php";

use Helper\MathHelper;

// Cara 1
$mathHelper = new MathHelper();

// Cara 2 - Rekomendasikan
echo MathHelper::$name . PHP_EOL;

// Cara 3 - Bisa Di Ubah Object Nya
MathHelper::$name = "Atika Nur Aini";
echo MathHelper::$name . PHP_EOL;

?>