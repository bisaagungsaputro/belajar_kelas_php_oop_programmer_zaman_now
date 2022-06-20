<?php


class Student {
    public int $id;
    public string $name;
    public int $age;
    private string $sample;

    public function setSample(string $sample): void {
        $this->sample = $sample;
    }

    // Tidak Menggunakan $sample / Menghapus $sample
    public function __clone()
    {
        unset($this->sample);
    }
}

// *** Kode : Object Cloning ***
    $student1 = new Student();
    $student1->id = "1";
    $student1->name = "Agung Saputro";
    $student1->age = 23;
    $student1->setSample("HOW ARE YOU");

    // Cara Cloning
    $student2 = clone $student1;

    var_dump($student1);

    // Hasil Mengcloning Semua Properties Dan Object
    var_dump($student2);

    // Cara Manual Tanpa Mengcloning
    $student3 = new Student();
    $student3->id = $student1->id;
    $student3->name = $student1->name;
    $student3->age = $student1->age;

    var_dump($student3);


// ---


// *** Object Cloning ***


// *** Object Cloning ***
// *** Kode : Object Cloning ***
// *** __clone() Function ***
// *** Kode : __clone() Function ***


// *** Object Cloning ***
/*
    Object Cloning
    - Kadang Kita Ada Kebutuhan Untuk Menduplikasi Sebuah Object
    - Biasanya Untuk Melakukan Hal Ini, Kita Bisa Membuat Object Baru, Lalu Menyalin Semua Properties
      Di Object Awal Ke Object Baru
    - Untungnya PHP Mendukung Object Cloning
    - Kita Bisa Menggunakan Perintah clone Untuk Membuat Duplikasi Object
    - Secara Otomatis Semua Properties Di Object Awal Akan Di Duplikasi Ke Object Baru
*/

// *** Kode : Object Cloning ***
/*
    Kode : Object Cloning
    $student1 = new Student();
    $student1->id = "1";
    $student1->name = "Agung Saputro";
    $student1->age = 23;

    $student2 = clone $student1;

    var_dump($student1);
    var_dump($student2);
*/

// *** __clone() Function ***
/*
    - Kadang Menyalin Semua Properties Bukanlah Yang Kita Inginkan
    - Misal Saja Kita Hanya Ingin Menyalin Beberapa Properties Saja, Tidak Ingin Semuanya
    - Jika Kita Ingin Memodifikasi Cara PHP Melakukan clone, Kita Bisa Membuat function Di Dalam class Nya
      Dengan Nama function __clone()
    - function __clone() Akan Dipanggil Di Object Hasil Duplikasi Setelah Proses Duplikasi Selesai
    - Jadi Jika Kita Ingin Menghapus Beberapa Properties, Bisa Kita Lakukan Di function __clone()
*/

// *** Kode : __clone() Function ***
/*
    Kode : __clone() Function
        public function __clone()
    {
        unset($this->sample);
    }
*/



?>