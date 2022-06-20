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
catch (ValidationException $exception) {
    echo "Validation Error : {$exception->getMessage()}" . PHP_EOL;
} catch (Exception $exception) {
    echo "Exception Error : {$exception->getMessage()}" . PHP_EOL;
}

echo "VALID" . PHP_EOL;

?>