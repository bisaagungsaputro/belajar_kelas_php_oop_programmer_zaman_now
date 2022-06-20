<?php

require_once "exception-43.php";
require_once "validation.php";
require_once "loginrequest.php";

// *** Kode : Finally ***
    $loginRequest = new LoginRequest();
    $loginRequest->username = "Eko";
    $loginRequest->password = "Rahasia";

    try {
        // Muncul Valid Ketika Username Dan Password Di Isi
        ValidationLoginRequest($loginRequest);
        echo "VALID" . PHP_EOL;
    }
    // Muncul Error Ketika Salah Satu Username Atau Password Tidak Di Isi
    catch (ValidationException | Exception $exception) {
        echo "Error : {$exception->getMessage()}" . PHP_EOL;
    }
    // Cocok Banget Bikin Kode Program Yang Tidak Peduli Error Atau Gak, Pokoknya Tetap Dieksekusi
    finally {
        echo "Error Gak Error, Tetap Bakal Dipanggil" . PHP_EOL;
    }

?>