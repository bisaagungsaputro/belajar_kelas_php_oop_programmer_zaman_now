<?php

// *** Ambil Data ***
require "typecheckdancasts-20.php";

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
sayHelloProgrammer(new Programmer("AIO Tsukasa"));
sayHelloProgrammer(new FrontEndProgrammer("Fukada Eimi"));
sayHelloProgrammer(new BackEndProgrammer("Maria Ozawa"));

?>