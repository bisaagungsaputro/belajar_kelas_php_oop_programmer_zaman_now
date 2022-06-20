<?php

// *** Ambil Data ***
require "polymorphism-19.php";

// *** Kode : Polymorphism ***
$company = new Company();

$company->programmer = new Programmer("Atika Nur Aini");
var_dump($company);
$company->programmer = new BackendProgrammer("Vira Agistasari");
var_dump($company);
$company->programmer = new FrontEndProgrammer("Maria Vania");
var_dump($company);

echo "\n";

// *** Kode : Function Argument Polymorphism ***
sayHello(new Programmer("AIO Tsukasa"));
sayHello(new FrontEndProgrammer("Fukada Eimi"));
sayHello(new BackEndProgrammer("Maria Ozawa"));

?>