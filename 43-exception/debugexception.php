<?php

require_once "exception-43.php";
require_once "validation.php";
require_once "loginrequest.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "";
$loginRequest->password = "";

// *** Kode : Debug Exception ***
    try {
        validationLoginRequest($loginRequest);
        echo "VALID" . PHP_EOL;
    }
    catch (ValidationException | Exception $exception) {
        echo "Error : {$exception->getMessage()}" . PHP_EOL;

    //* Dump Trace
    var_dump($exception->getTrace());

    //* Sebagai string
    echo $exception->getTraceAsString() . PHP_EOL;

    }
    finally {
        echo "Error Gak Error, Tetap Dipanggil" . PHP_EOL;
    }

?>