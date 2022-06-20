<?php

require_once "parentkeyword-17.php";

use Data\{Shape, Rectangle};

$shape = new Shape();
echo $shape->getCorner() . PHP_EOL;

$rectangle = new Rectangle();
echo $rectangle->getCorner() . PHP_EOL;

// Mengakses parent Nya
echo $rectangle->getParentCorner() . PHP_EOL;

?>