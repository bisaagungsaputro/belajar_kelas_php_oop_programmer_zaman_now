<?php

// *** Kode : Membuat Exception ***
function validationLoginRequest(LoginRequest $request)
{
    // Apabila Usernamenya Kosong, Maka Kita Bilang Username Is Null
    if (!isset($request->username)) {
        throw new ValidationException("Username Is Null");
    // Apabila Passwordnya Kosong, Maka Kita Bilang Password Is Null
    } else if (!isset($request->password)) {
        throw new ValidationException("Password Is Null");
    }
    //* Bawaan PHP Exception (1)
    // Username Tidak Ada
    // else if ($loginRequest->username == "") {
    //     throw new Exception("Username Is Empty");
    // Password Tidak Ada
    // } else if ($loginRequest->password == "") {
    //     throw new Exception("Password Is Empty");
    // }

    //* Bawaan PHP Exception (2)
    // Username Tidak Ada
    else if (trim($request->username) == "") {
        throw new Exception("Username Is Empty");
        // Password Tidak Ada
    } else if (trim($request->password) == "") {
        throw new Exception("Password Is Empty");
    }
}

?>