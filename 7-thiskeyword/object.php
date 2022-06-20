<?php

require_once "thiskeyword-7.php";

$thiskeyword = new SayKeyword();
$thiskeyword->name = "Eko";

$thiskeyword->ThisKeyword("Bambang");

$kosong = new SayKeyword();
$kosong->name = "Eko";

$kosong->ThisKeyword(null);

?>