<?php

require_once "reflection-45.php";
require_once "validation.php";
require_once "loginrequest.php";

$request = new LoginRequest();
$request->username = "aa";
$request->password = "aa";

// Cara Manual - Dan TidaK Efisien
// ValidationUtil::validate($request);

// Menggunakan Reflection - Dan Efisien
ValidationUtil::validateReflection($request);

?>