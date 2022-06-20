<?php


// *** Kode : Validation Tanpa Reflection ***
class ValidationUtil
{
    static function validate(LoginRequest $request)
    {
        if (!isset($request->username)) {
            throw new ValidationException("username is not set");
        } else if (!isset($request->password)) {
            throw new ValidationException("password is not set");
        } else if (is_null($request->username)) {
            throw new ValidationException("username is null");
        } else if (is_null($request->password)) {
            throw new ValidationException("password is null");
        }
    }

    static function validateReflection($request)
    {
        $reflection = new ReflectionClass($request);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($properties as $property) {
            if (!$property->isInitialized($request)) {
                throw new ValidationException("$property->name is not set");
            } else if (is_null($property->getValue($request))) {
                throw new ValidationException("$property->name is null");
            }
        }
    }
}


// ---


// *** Reflection ***


// *** Reflection ***


// *** Reflection ***
/*
    Reflection
    - Reflection Adalah Membaca Struktur Kode Pada Saat Aplikasi Sedang Berjalan
    - Reflection Adalah Materi Yang Sangat Panjang Dan Banyak, Sehingga Disini Kita Hanya Akan Membahas
      Perkenalannya Saja
    - Reflection Adalah Fitur Yang Biasanya Digunakan Saat Kita Membuat Framework, Library
      Karena Sangat Cocok Untuk Membuatnya Dengan Menggunakann Fitur Reflection
    - https://www.php.net/manuel/en/book.reflection.php
*/

// *** Studi Kasus : Membuat Validation Framework ***
/*
    Studi Kasus : Membuat Validation Framework
    - Sekarang Kita Akan Coba Melakukan Studi Kasus Menggunakan Reflection
    - Kita Akan Membuat Validation Framework Menggunakan Reflection
    - Validation Framework Nya Cukup Sederhana, Kita Hanya Akan Mengecek Apakah Properties Bernilai
      null Atau Tidak, Kalau null Atau Belum Di Set, Kita Akan throw ValidationException
    - Tanpa Reflection, Biasanya Untuk Melakukan Hal Ini, Kita Butuh Pengecekan Secara Manual
*/

// *** Kode : Validation Tanpa Reflection ***
/*
    Kode : Validation Tanpa Reflection
    class ValidationUtil {
        static function validate(LoginRequest $loginRequest) {
            if (!isset($loginRequest->username)) {
                throw new ValidationException("Username Is Null");
            }
            else if (!isset($loginRequest->password)) {
                throw new ValidationException("Password Is Null");
            }
        }
    }
*/

// *** Kode : Validation Menggunakan Reflection ***
/*
    Kode : Validation Menggunakan Reflection
        static function validateReflection($request)
    {
        //* class Bawaan PHP Menggunakan Reflection
        $reflection = new ReflectionClass($request);
        //* getProperties => Untuk Mengambil Semua Properties, Jika Public Maka Semua Properties Public Diambil
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($properties as $property) {
            if (!$property->isInitialized($request)) {
                throw new ValidationException("$property->name is not set");
            } else if (is_null($property->getValue($request))) {
                throw new ValidationException("$property->name is null");
            }
        }
    }
*/





















?>