<?php


class Student {
    public int $id;
    public string $name;
    public int $age;
}

// *** Kode : Comparing Object ***
    $student1 = new Student();
    $student1->id = "1";
    $student1->name = "Agung Saputro";
    $student1->age = 23;

    $student2 = new Student();
    $student2->id = "1";
    $student2->name = "Agung Saputro";
    $student2->age = 23;

    // true => Karena Semua Value Properties Sama, Jika Diganti Value Properties Maka false
    var_dump($student1 == $student2);
    /*
    - false => Karena Dua Lokasi Memori Berbeda / 2 Object Berbeda, Jika student2 Diubah Maka student1 Tidak Ikut Diubah
    - Membandingkan 2 Object Yang Sama
    */
    var_dump($student1 === $student2);
    // true - indentity
    var_dump($student1 === $student1);


// ---


// *** Comparing Object ***


// *** Comparing Object ***
// *** Kode : Comparing Object ***


// *** Comparing Object ***
/*
    Comparing Object
    - Sama Seperti Tipe Data Yang Lain, Untuk Membandingkan Dua Buah Object, Kita Bisa Menggunakan
      Operator == (equals) Dan === (indentity)
    - Operator == (equals) Membandingkan Semua Properties Yang Terdapat Di Object Tersebut
      Dan Tiap Properties Juga Akan Dibandingkan Menggunakan Operator == (equals)
    - Sedangkan Operator === (indentity), Maka Akan Membandingkan Apakah Object Identik,
      Artinya Mengacu Ke Object Yang Sama
*/

// *** Kode : Comparing Object ***
/*
    Kode : Comparing Object
    $student1 = new Student();
    $student1->id = "1";
    $student1->name = "Agung Saputro";
    $student1->age = 23;

    $student2 = new Student();
    $student2->id = "1";
    $student2->name = "Agung Saputro";
    $student2->age = 23;

    var_dump($student1 == $student2);
    var_dump($student1 === $student2);
*/



?>