<?php


// *** Kode : Membuat Namespace ***
//* Membuat Sub Namespace Berada Dalam 1 File
namespace Data\Satu {
  class Konflik
  {
  }
}

namespace Data\Dua {
  class Konflik
  {
  }
}

// *** Kode : Group Use Declaration ***
namespace Data\Tiga {
   class Konflik {

   }

   class Sample {

   }

   class Dummy {

   }
}

// *** Kode : Function Dan Constant Di Namespace ***
namespace Helper {

  const APPLICATION = "Belajar Namespace" . PHP_EOL;

  function HelpMe()
  {
    echo "Tolong Saya" . PHP_EOL;
  }
}


// ---


// *** Use Keyword ***


// *** Use Keyword ***
// *** Kode : Use Keyword ***
// *** Alias ***
// *** Kode : Alias ***
// *** Group Use Declaration ***
// *** Kode : Group Use Declaration ***


// *** Use Keyword ***
/*
    Use Keyword
    - Sebelumnya Kita Sudah Tahu Bahwa Untuk Menggunakan class, function Atau constant
      Di namespace Kita Perlu Menyebutkan Nama namespace Nya Di Awal
    - Jika Terlalu Sering Menggunakan class, function Atau constant Yang Sama,
      Maka Terlalu Banyak Duplikasi Dengan Menyebut namespace Yang Sama Berkali - Kali
    - Hal Ini Bisa Kita Hindari Dengan Cara Mengimport class, function Atau constant
      Tersebut Dengan Menggunakan Kata Kunci use
*/

// *** Kode : Use Keyword ***
/*
    Kode : Use Keyword
    use Data\Satu\Konflik;
    use function Helper\helpMe;
    use const Helper\APPLICATION;

    $konflik1 = new Konflik();
    $konflik2 = new Konflik();

    HelpMe();
    echo APPLICATION . PHP_EOL;
*/

// *** Alias ***
/*
    Alias
    - Saat Kita Menggunakan use, Artinya Kita Tidak Perlu Lagi Menggunakan Nama namespace
      Diawal class Ketika Kita Ingin Membuat class Tersebut
    - Namun Bagaimana Jika Kita Ternyata Nama class Nya Sama?
    - Untungnya PHP Memiliki Fitur Yang Namanya Alias
    - Alias Adalah Kemampuan Membuat Nama Lain Dari class, function Atau constant Yang Ada
    - Kita Bisa Menggunakan Kata Kunci as Setelah Melakukan use
*/

// *** Kode : Alias ***
/*
    Kode : Alias
    use Data\Satu\Konflik as Perang1;
    use Data\Dua\Konflik as Perang2;
    use function Helper\HelpMe as Tolong;
    use const Helper\APPLCATION as App;

    $konflik1 = new Perang1();
    $konflik2 = new Perang2();

    Tolong();
    echo APP . PHP_EOL;
*/

// *** Group Use Declaration ***
/*
    Group Use Declaration
    - Kadang Kita Butuh Melakukan Import Banyak Hal Di Satu namespace Yang Sama
    - PHP Memiliki Fitur Group use, Dimana Kita Bisa Import Beberapa class,
      function Atau constant Dalam Satu Perintah use
    - Untuk Melakukan Itu, Kita Bisa Menggunakan Kurung {}
*/

// *** Kode : Group Use Declaration ***
/*
    Kode : Group Use Declaration
    use Data\Tiga\{Konflik as Perang1, Konflik as Perang2};
    use function Helper\{HelpMe as Tolong};
    use const Helper\{APPLICATION as APP};

    $konflik1 = new Perang1();
    $konflik2 = new Perang2();

    tolong();

    echo APP . PHP_EOL;
*/



?>