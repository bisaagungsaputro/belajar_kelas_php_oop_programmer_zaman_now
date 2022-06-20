<?php


// *** Kode : Membuat Constructor ***
class Personal {
    const AUTHOR = "Programmer Zaman Now";

    var string $name = "Vira Agistasari";
    var ?string $adress = null;
    var string $country = "Bandung";

    function __construct(string $name, ?string $adress)
    {
        echo "Hai Bambang Indo" . PHP_EOL;
        $this->name = $name;
        $this->adress = $adress;
        
    }
}

$person = new Personal("Budi", "Japan");
$person->name = "Bambang";
$person->adress = "Indonesia";

var_dump($person);


// ---


// *** Constructor ***


// *** Constructor ***
// *** Kode : Membuat Constructor ***
// *** Kode : Menggunakan Constructor ***


// *** Constructor ***
/*
    Constructor
    - Saat Kita Membuat Object, Maka Kita Seperti Memanggil Sebuah function,
      Karena Kita Menggunakan Kurung ()
    - Di Dalam class PHP, Kita Bisa Membuat constructor, constructor Adalah function Yang Akan
      Dipanggil Saat Pertama Kali Object Dibuat
    - Mirip Seperti Di function, Kita Bisa Memberi Parameter Pada constructor
    - Nama constructor Di PHP Yaitu __construct()

    => Tidak Ada return Value Di constructor
*/

// *** Kode : Membuat Constructor ***
/*
    Kode : Membuat Constructor
    class Personal {
        const AUTHOR = "Programmer Zaman Now";

        var string $name;
        var ?string $adress = null;
        var string $country = "Indonesia;

        //* Bisa Bikin Parameter, Artinya Masukkin Parameter Yaitu
        //* Saat Nanti Kita Membuat Object Personal, Teman - Teman Harus Menambahkan 2 Parameter
        public function __constructor(string $name, ?string $adress) {
            $this->name = $name;
            $this->adress = $adress;
        }
    }
*/

// *** Kode : Menggunakan Constructor ***
/*
    Kode : Menggunakan Constructor
    //* Menggunakan Parameter Wajib Ada Valuenya, Jika Tidak Dia Bakal Error / () => Value Kosong
    $person = new Personal ("Eko", "Subang");
    #person->country = "Indonesia";

    $person->name = ("Budi");
    $person->adress= (null);
*/



?>