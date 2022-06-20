<?php


    // Waktu Saat Ini => Tahun, Bulan, Tanggal, Jam, Menit, Detik
    $dates = new DateTime();
    var_dump($dates);

    $date = new DateTime();
    // Bisa Di Set Tahun, Bulan, Tanggal (Mengubah Tanggal)
    $date->setDate(2020, 12, 30);
    // Bisa Di Set Jam, Menit, Detik (Mengubah Waktu)
    $date->setTime(12, 12, 12);

    var_dump($date);

// *** Kode : DateInterval ***
    $dateinterval = new DateTime();
    $dateinterval->setDate(2020, 12, 30);
    $dateinterval->setTime(12, 12, 12);

    // P => Period , 1 => Bilangan , Y => Tahun (Sehingga Menjadi Menambah 1 Tahun)
    $dateinterval->add(new DateInterval("P1Y"));

    var_dump($dateinterval);

    // P => Period , 1 => Bilangan , M => Minggu (Sehingga Menjadi Menambah 1 Minggu)
    $dateminus = new DateInterval("P1M");
    // invert => Untuk Mengurangi, 1 / true
    $dateminus->invert = 1;
    // $dateinterval => Data Ini Ditambah Dengan Data Dari $dateminus
    $dateinterval->add($dateminus);

    // Eksekusi Data Dari $dateinterval
    var_dump($dateinterval);

// *** Kode : DateTimeZone ***
    $datetimezone = new DateTime();
    $datetimezone->setTimeZone(new DateTimeZone("America/Toronto"));

    var_dump($datetimezone);

// *** Kode : Format DateTime ***
    $formatdatetime = new DateTime();
    $formatdatetime->setTimeZone(new DateTimeZone("Asia/Jakarta"));

    /*
        Ada Banyak Karakter DateTime
        Y => Tahun      - 4 Digits
        m => Bulan      - 2 Digits
        d => Tanggal    - 2 Digits
        H => Jam        - 2 Digits
        i => Menit      - 2 Digits
        s => Detik      - 2 Digits
    */
    echo $formatdatetime->format("Y-m-d H:i:s") . PHP_EOL;

    $now =new DateTime();
    $now->setTimezone(new DateTimeZone("America/Toronto"));

    $string = $now->format("Y-m-d H:i:s");

    echo "Waktu Saat Ini : $string" . PHP_EOL;

// *** Kode : Parse DateTime (1) ***
    $parsesatu = DateTime::createFromFormat("Y-m-d H:i:s", "1992-12-29 10:10:10",
    new DateTimeZone("Asia/Jakarta"));

    var_dump($parsesatu );

// *** Kode : Parse DateTime (2) bool ***
    $parsedua = DateTime::createFromFormat(
    "Y-m-d H:i:s",
    "Salah",
    new DateTimeZone("Asia/Jakarta")
    );

    var_dump($parsedua);

// *** Kode : Parse DateTime (3) if ***
$parsetiga = DateTime::createFromFormat(
    "Y-m-d H:i:s",
    "Tiga",
    new DateTimeZone("Asia/Jakarta")
);
if ($parsetiga) {
    var_dump($parsetiga);
}
else {
    echo "Format Anda Salah";
}


// ---


// *** DateTime ***


// *** DateTime ***
// *** DateTime Function ***
// *** Kode : DateTime ***
// *** DateInterval ***
// *** Kode : DateInterval ***
// *** Kode : Duration Period Designators ***
// *** DateTimeZone ***
// *** Kode : DateTimeZone ***
// *** Format DateTime ***
// *** Kode : Format DateTime ***
// *** Parse DateTime ***
// *** Kode : Parse DateTime ***


// *** DateTime ***
/*
    DateTime
    - Biasanya Dalam Bahasa Pemprograman Sudah Disediakan Cara Untuk Manipulasi Data Waktu
      Termasuk Di PHP
    - Di PHP, Kita Bisa Menggunakan class DateTime Untuk Manipulasi Data Waktu
    - Ada Banyak Sekali function Di class DateTime Yang Bisa Kita Gunakan Untuk Memanipulasi Data Waktu

    => Kalau Teman - Teman Berurusan Dengan Waktu Entah Tanggal, Jam, Teman - Teman Bisa Gunakan DateTime
    => Bahas Beberapa Saja, Sebenarnya Ada Banyak Sekali, Teman - Teman Tinggal Baca Di Halaman
       Dokumentasi Untuk DateTime Itu Sendiri
*/

// *** DateTime Function ***
/*
    DateTime Function
    DateTime Function                           Keterangan
    setTime($hour, $minute, $second)            Mengubah Waktu DateTime
    setDate($year, $mounth, $day)               Mengubah Tanggal DateTime
    setTimestamp($unixTimestamp)                Mengubah unix timestamp DateTime
*/

// *** Kode : DateTime ***
/*
    $date = new DateTime();
    $date->setDate(2020, 12, 30);
    $date->setTime(12, 12, 12);

    var_dump($date);

    => Membuat Waktu Dan Tanggal Saat Ini Dibuat
    => DateTime() => Ini Bawaan PHP, Jadi class Sudah Ada, Tinggal Langsung Pakai Saja
    => Ada Namanya TimeZone, Default PHP, Jika Teman - Teman Ingin Mengubahnya Bisa Pakai
       Pertama Buka Folder Di XAMPP, Kalau Di Windows Di PHP
       Kalau Di Mac Atau Linux Di etc
       Terus Cara File php.ini Dan Buka File php.ini
       Lalu Cari timezone=Europe/Berlin
       Lalu Ganti timezone=Asia/Jakarta
       
       Untuk Melihat Detail timezone Bisa Buka Di Link :
       php.net/manual/en/timezones.php
*/

// *** DateInterval ***
/*
    DateInterval
    - Kadang Kita Hanya Ingin Memanipulasi Waktu Dan Tanggal Sebagian Saja,
      Misal Hanya Menambah 1 Tahun Atau Mengurai Beberapa Hari
    - Hal Ini Bisa Dilakukan Dengan function add Milik DateTime
    - Namun function add Tersebut Menerima Parameter Berupa DateInterval
    - Saat Menggunakan DateInterval Duration, Kita Perlu Menentukan Berapa Banyak Kita
      Menambah Interval
    - Kita Bisa Lihat Detailnya Disini : https://www.php.net/manual/en/dateinterval.construct.php
    - Untuk Pembuatan Duration, Harus Diawali Dengan Karakter P Yang Artinya Period
*/

// *** Kode : DateInterval ***
/*
    Kode : DateInterval
    $dateinterval = new DateTime();
    $dateinterval->setDate(2020, 12, 30);
    $dateinterval->setTime(12, 12, 12);

    $dateinterval->add(new DateInterval("P1Y"));

    $dateinterval2 = new DateInterval("P1M");
    $dateinterval2->invert = 1;

    $dateinterval->add($dateinterval2);

    var_dump($dateinterval);
*/

// *** Kode : Duration Period Designators ***
/*
    Period Designator           Description
    Y                           Years
    M                           Mounth
    D                           Days
    W                           Weeks
    H                           Hours
    M                           Minutes
    S                           Second
*/

// *** DateTimeZone ***
/*
    DateTimeZone
    - Saat Kita Membuat Object DateTime, Dia Akan Secara Otomatis Membuat Waktu Saat Ini Sesuai
      Dengan TimeZone Yang Di Setting Di Konfigurasi date.timezone Di File php.ini
    - Atau Kita Bisa Menggunakan function setTimeZone Untuk Mengubah TimeZone DateTime
*/

// *** Kode : DateTimeZone ***
/*
    Kode : DateTimeZone
    $datetimezone = new DateTime();
    $datetimezone->setTimeZone(new DateTimeZone("Asia/Pontianak"));

    var_dump($datetimezone);
*/

// *** Format DateTime ***
/*
    Format DateTime
    - Kadang Kita Ingin Membuat Representasi string Dari DateTime Yang Sudah Kita Buat
    - Hal Ini Bisa Kita Lakukan Menggunakan function format()
    - function format() Menerima argument Berupa Format string,Ini Bisa Kita Gunakan Untuk
      Memanipulasi Cara Kita Menampilkan string Format Waktu
    - Untuk Detailnya Kita Bisa Lihat Di Halaman Dokumentasi Resminya
    - https://www.php.net/manual/en/datetime.format.php
*/

// *** Kode : Format DateTime ***
/*
    Kode : Format DateTime
    $formatdatetime = new DateTime();
    $formatdatetime->setTimeZone(new DateTimeZone("Asia/Jakarta"));

    echo $formatdatetime->format("Y-m-d H:i:s") . PHP_EOL;
*/

// *** Parse DateTime ***
/*
    Parse DateTime
    - Selain Format DateTime Menjadi string, Di PHP Juga Kita Bisa Melakukan Hal Sebaliknya,
      Yaitu Memparsing string Menjadi DateTime Sesuai Dengan Format Yang Kita Mau
    - Untuk Melakukan Itu, Kita Bisa Menggunakan static function createFromFormat() Dari class DateTime
*/

// *** Kode : Parse DateTime ***
/*
    Kode : Parse DateTime
    $parse = DateTime::createFromFormat("Y-m-d H:i:s", "1992-12-29 10:10:10",
             new DateTimeZone("Asia/Jakarta"));

    var_dump($parse);
*/



?>