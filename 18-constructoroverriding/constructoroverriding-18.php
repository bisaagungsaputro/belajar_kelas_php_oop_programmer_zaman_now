<?php


class Manager {
    var string $name;

    var string $title;

    public function __construct(string $name = "Maria Vania", string $title = "Artis Indonesia")
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(string $name): void{
        echo "Hi, $name, My Names Is Manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager
{
    public function __construct(string $name = "")
    {
        parent::__construct($name, "VP");
    }

    function sayHello(string $name): void
    {
        echo "Hi, $name, My Names Is VP $this->name" . PHP_EOL;
    }
}

/*
Ada WARNING => Seharusnya Compatible Dengan Di Isi Parameter string
function sayHello(string $name): void {} Seharusnya Seperti Ini
Ini Tidak Direkomendasikan
*/
// class VicePresident extends Manager {
//     function sayHello(): void {
//         echo "Hi, My Names Is VP $this->name" . PHP_EOL;
//     }
// }


// ---


// *** Constructor Overriding ***


// *** Constructor Overriding ***
// *** Kode : Mengubah Arguments Overriding ***
// *** Kode : Mengubah Arguments Overriding (1) ***
// *** Kode : Mengubah Arguments Overriding (2) ***


// *** Constructor Overriding ***
/*
    Constructor Overriding
    - Karena Constructor Sama Seperti function, Maka Constructor Pun Bisa Kita Deklarasikan
      Ulang Di class child Nya
    - Sebenarnya Di PHP, Kita Bisa Meng-Override function Dengan Arguments Yang Berbeda,
      Namun Sangat Tidak Disarankan
    - Jika Kita Melakukan Override function Dengan Arguments Berbeda, Maka PHP Akan Menampilkan WARNING
    - Namun Berbeda Dengan Constructor Overriding, Kita Boleh Meng-Override Dengan Mengubah
      Arguments Nya, Namun Direkomendasikan Untuk Memanggil parent Constructor
*/

// *** Kode : Mengubah Arguments Overriding ***
/*
    class VicePresident extends Manager {
        function sayHello (string $name) {
            echo "Hi $name, My Names Is $this->name" . PHP_EOL;
        }
    }
*/

// *** Kode : Mengubah Arguments Overriding (1) ***
/*
    Kode : Mengubah Arguments Overriding (1)
    class Manager {
        var string $name;
        var string $title;

        public function __construct(string $name, string $title = "Manager") {
            $this->name = $name;
            $this->title = $title;
        }
    }
*/

// *** Kode : Mengubah Arguments Overriding (2) ***
/*
    Kode : Mengubah Arguments Overriding (2)
    class VicePresident extends Manager {
        public function __construct(string $name) {
            parent::__construct($name, "VIP");
        }
    }
*/



?>