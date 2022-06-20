<?php


// *** Kode : Trait Conflict (1) ***
    // trait A & B Memiliki Nama function Yang Sama
    trait A {
        function doA () {
            echo "a" . PHP_EOL;
        }

        function doB () {
            echo "b" . PHP_EOL;
        }
    }

    trait B {
        function doA () {
            echo "A" . PHP_EOL;
        }

        function doB () {
            echo "B" . PHP_EOL;
        }
    }

    // class Sample {
    //     use A, B;
    // }

    // Bentroknya Karena Ada function Yang Sama Di 2 trait // Error
    // $sample = new Sample();
    // $sample->doA();
    // $sample->doB();

// *** Kode : Trait Conflict (2) ***
    // PHP Ada Cara Untuk Mengatasi Conflict
    class TraitConflict {
    use A, B {
        //* Pakai trait A Daripada Yang B
        A::doA insteadof B; // a
        //* Pakai trait B Daripada Yang A
        B::doB insteadof A; // B
        // JAWABAN Mana Yang Lebih Di Prioritaskan
        }
    }

    $traitconflict = new TraitConflict();
    $traitconflict->doA();
    $traitconflict->doB();


// ---


// *** Trait Conflict ***


// *** Trait Conflict ***
// *** Kode : Trait Conflict (1) ***
// *** Kode : Trait Conflict (2) ***


// *** Trait Conflict ***
/*
    Trait Conflict
    - Jika Kita Menggunakan Lebih Dari Satu trait, Lalu Terdapat function Yang Sama Di trait Tersebut
    - Maka Hal Tersebut Akan Menyebabkan Konflik
    - Jika Terjadi Konflik Seperti Ini, Kita Bisa Mengatasinya Dengan Menggunakan Kata Kunci insteadof
*/

// *** Kode : Trait Conflict (1) ***
/*
    Kode : Trait Conflict (1)
    trait A {
        function doA () {
            echo "a" . PHP_EOL;
        }

        function doB () {
            echo "b" . PHP_EOL;
        }
    }

    trait B {
        function doA () {
            echo "A" . PHP_EOL;
        }

        function doB () {
            echo "B" . PHP_EOL;
        }
    }
*/

// *** Kode : Trait Conflict (2) ***
/*
    Kode : Trait Conflict (2)
    class TraitConflict {
        use A, B {
            //* Pakai trait A Daripada Yang B
            A::doA insteadof B;
            //* Pakai trait B Daripada Yang A
            B::doB insteadof A;
        }
    }

    $traitconflict = new TraitConflict();
    $traitconflict->doA();
    $traitconflict->doB();
*/



?>