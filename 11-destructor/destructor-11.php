<?php


// *** Kode : Destructor ***
    class Personal {
    var string $name = "Agung Saputro";

    function __destruct() {
        echo "Object Personal $this->name Is Destroyed" . PHP_EOL;
    }
}


// ---


// *** Destructor ***


// *** Destructor ***
// *** Kode : Destructor ***


// *** Destructor ***
/*
    Destructor
    - Jika constructor Adalah function Yang Akan Dipanggil Ketika Object Dibuat
    - destructor Adalah function Yang Akan Dipanggil Ketika Object Dihapus Dari Memory
    - Biasanya Ketika Object Tersebut Sudah Tidak Lagi Digunakan Atau Ketika Aplikasi Akan Mati
    - Untuk Membuat function destructor Kita Bisa Menggunakan Nama function __destruct()
    - Khusus Untuk destructor, Kita Tidak Boleh Menambahkan function Argument
    - Dalam Penggunaan Sehari - Hari, Misal Ini Cocok Untuk Menutup Koneksi Ke Database
      Atau Menutup Proses Menulis Ke File, Sehingga Tidak Terjadi Memory Leak / Bocor
*/

// *** Kode : Destructor ***
/*
    Kode : Destructor
    function __destruct() {
        echo "Object Personal $this->name Is Destroyed" . PHP_EOL;
    }
*/



?>