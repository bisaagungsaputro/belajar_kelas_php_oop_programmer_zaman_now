<?php

require_once "import-14.php";

// use Data\Satu\Konflik;
// use Data\Dua\Konflik;
use function Helper\HelpMe;
use const Helper\APPLICATION;

$konflik1 = new Data\Satu\Konflik;
$konflik2 = new Data\Dua\Konflik;

var_dump($konflik1);

HelpMe();

echo APPLICATION . PHP_EOL;

?>