<?php


class ValidationException extends Exception {

}


// ---


// *** Exception ***


// *** Exception ***
// *** Kode : Membuat Class Exception ***
// *** Membuat Exception ***
// *** Kode : Membuat Exception ***
// *** Try Catch ***
// *** Kode : Try Catch ***
// *** Kode : Multiple Try Catch (1) ***
// *** Kode : Multiple Try Catch (2) ***
// *** Finally Keyword ***
// *** Kode : Finally ***
// *** Debug Exception ***
// *** Kode : Debug Exception ***


// *** Exception ***
/*
    Exception
    - Saat Kita Membuat Aplikasi, Kita Tidak Akan Terhindar Dengan Yang Namanya Error
    - Di PHP, Error Direpresentasikan Dengan Istilah exception Dan Semua Direpresentasikan Dalam
      Bentuk class exception
    - Kita Bisa Menggunakan class exception Sendiri Atau Menggunakan Yang Sudah Disediakan Oleh PHP
    - Jika Kita Ingin Membuat exception, Maka Kita Harus Membuat class Yang implement interface
      Throwable Atau Turunan - Turunannya

    => Jarang Sekali Kita Menggunakan implement interface Throwable, Karena Kalau Kita implement
       interface Throwable Kita Harus implements Semua function - function / Tidak Direkomendasikan

    => Idealnya Teman - Teman Biasanya Akan extends Sebuah class Bernama exception Dan
       Itu Adalah Turunanan Dari Throwable
*/

// *** Kode : Membuat Class Exception ***
/*
    Kode : Membuat Class Exception
    class ValidationException extends Exception {

    }
*/

// *** Membuat Exception ***
/*
    Membuat Exception
    - exception Biasanya Terjadi Di function
    - Di Dalam Kode Program Kita, Untuk Membuat exception Kita Cukup Menggunakan Kata Kunci throw
      Diikuti Dengan Object exception Nya
*/

// *** Kode : Membuat Exception ***
/*
    Kode : Membuat Exception
    function validationLoginRequest(LoginRequest $loginRequest) {
        if (!isset($loginRequest->username)) {
            throw new ValidationException("Username Is Null");
        }
        else if (!isset($loginRequest->password)) {
            throw new ValidationException("Password Is Null");
        }
        //* Bawaan PHP Exception
        else if ($loginRequest->username == "") {
            throw new Exception("Username Is Blank");
        }
        else if ($loginRequest->password == "") {
            throw new Exception("Password Is Blank");
        }
    }
*/

// *** Try Catch ***
/*
    Try Catch
    - Saat Kita Memanggil Sebuah function Yang Bisa Menyebabkan exception, Maka Kita Disarankan
      Menggunakan try-catch expression Di PHP
    - Ini Gunanya Agar Kita Bisa Menangkap exception Yang Terjadi, Karena Jika Tidak Ditangkap,
      Lalu Terjadi exception, Maka Secara Otomatis Program Kita Akan Berhenti
    - Cara Menggunakan try-catch expression Di PHP Sangat Mudah, Di Block try, Kita Tinggal Panggil
      method Yang Bisa Menyebabkan exception, Dan Di Block catch, Kita Bisa Melakukan Sesuatu Jika
      Terjadi exception
*/

// *** Kode : Try Catch ***
/*
    Kode : Try Catch
    $loginRequest = new LoginRequest();
    //* Di try Ada Block try Kita Panggil function Yang Kira - Kira Akan Menyebabkan Error
    //* Setelah Itu Kalau Terjadi Error Kita Akan Tangkap Di catch
    //* catch Ini Akan Dieksekusi Kalau Memang Terjadi Error, Kalau Tidak Terjadi Error
    //* Dia Tidak Akan Ditangkap
    try {
        validationLoginRequest($loginRequest);
    }
    //* ValidationException Error Yang AKan Ditangkap Dan Akan Disimpan Ke Dalam $exception
    catch (ValidationException $exception) {
        echo "Error : {$exception->getMessage()}" . PHP_EOL;
    }
*/

// *** Kode : Multiple Try Catch (1) ***
/*
    Kode : Multiple Try Catch (1)
    $loginRequest = new LoginRequest();
    $loginRequest->username = "";
    $loginRequest->password = "";

    try {
        validationLoginRequest($loginRequest);
    }
    //* Error 1 Untuk class ValidationException
    catch (ValidationException $exception) {
        echo "Validation Error : {$exception->getMessage()}" . PHP_EOL;
    }
    //* Error 2 Untuk class Exception
    catch (Exception $exception) {
        echo "Exception Error : {$exception->getMessage()}" . PHP_EOL;
    }
*/

// *** Kode : Multiple Try Catch (2) ***
/*
    Kode : Multiple Try Catch (2)
    $loginRequest = new LoginRequest();
    $loginRequest->username = "";
    $loginRequest->password = "";

    try {
        validationLoginRequest($loginRequest);
    }
    //* 1 catch Bisa Menangkap Beberapa Jenis class Exception, Sehingga Hasil Outputnya Sama
    catch (ValidationRequest | Exception $exception) {
        echo "Error : {$exception->getMessage()}" . PHP_EOL;
    }
*/

// *** Finally Keyword ***
/*
    Finally Keyword
    - Dalam try-catch, Kita Bisa Menambahkan Block finally
    - Block finally Ini Adalah Block Dimana Akan Selalu Dieksekusi Baik Terjadi Exception Ataupun Tidak
    - Ini Sangat Cocok Ketika Kita Ingin Melakukan Sesuatu, Tidak Peduli Sukses Ataupun Gagal,
      Misal Di Block try Kita Ingin Membaca File, Di Block catch Kita Akan Tangkap Jika Terjadi Error
      Dan Di Block finally Error Ataupun Sukses Membaca File, Kita Wajib Menutup Koneksi Ke FiLe Tersebut
      Biar Tidak Menggantung Di Memory
*/

// *** Kode : Finally ***
/*
    Kode : Finally
    $loginRequest = new LoginRequest();
    $loginRequest->username = "Eko";
    $loginRequest->password = "Rahasia";

    try {
        ValidationLoginRequest($loginRequest);
    }
    catch (ValidationLoginRequest | Exception $exception) {
        echo "Error : {$exception->getMessage()}" . PHP_EOL;
    }
    finally {
        echo "Error Gak Error, Tetap Bakal Dipanggil" . PHP_EOL;
    }
*/

// *** Debug Exception ***
/*
    Debug Exception
    - exceptionn Di PHP Memiliki Sebuah function Bernama getTrace()
    - function getTrace() Berisikan Informasi Dari exception Yang Terjadi, Seperti Lokasi File,
      Baris Ke Berapa, function Mana Sampai argument Yang Dikirim Di function Tersebut Apa
    - Ini Sangat Cocok Untuk Kita Jika Ingin Mendebug Ketika Terjadi exception
*/

// *** Kode : Debug Exception ***
/*
    Kode : Debug Exception
    try {
        validationLoginRequest($loginRequest);
    }
    catch (ValidationException | Exception $exception) {
        echo "Error : {$exception->getMessage()}" . PHP_EOL;

    //* Sebagai string
    echo $exception->getTraceAsString() . PHP_EOL;

    //* Dump Trace
    var_dump($exception->getTrace());
    }
    finally {
        echo "Error Gak Error, Tetap Dipanggil" . PHP_EOL;
    }
*/



?>