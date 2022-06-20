<?php

require_once "exception-43.php";
require_once "validation.php";
require_once "loginrequest.php";

// Isi Data
$loginRequest = new LoginRequest();
$loginRequest->username = "";
$loginRequest->password = "";

try {
    validationLoginRequest($loginRequest);
}
/*
- 1 catch Bisa Menangkap Beberapa Jenis class Exception, Sehingga Hasil Outputnya Sama
- Contoh : class ValidationException & class Bawaan PHP (Exception)
*/
catch (ValidationException | Exception $exception) {
    echo "Terjadi Error : {$exception->getMessage()}" . PHP_EOL;
}

echo "VALID" . PHP_EOL;

?>