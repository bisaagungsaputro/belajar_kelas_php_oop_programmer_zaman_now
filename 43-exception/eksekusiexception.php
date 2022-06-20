<?php

require_once "exception-43.php";
require_once "validation.php";
require_once "loginrequest.php";

// Isi Data
$loginRequest = new LoginRequest();
$loginRequest->username = "Eko";
$loginRequest->password = "";

// Eksekusi
validationLoginRequest($loginRequest);

echo "VALID" . PHP_EOL;

?>