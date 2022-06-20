<?php


// *** Kode : Final Class ***
    class SocialMedia {
        public string $name;
    }

    final class Facebook extends SocialMedia {

    }

    // Contoh include Yang Bukan final
    class FakeSocialMedia extends SocialMedia {

    }

    //* Error
    // class FakeFacebook extends Facebook {

    // }


// ---


// *** Final Class ***


// *** Final Class ***
// *** Kode : Final Class ***


// *** Final Class ***
/*
    Final Class
    - Kata Kunci final Bisa Digunakan Di class, Dimana Jika Kita Menggunakan Kata Kunci final
      Sebelum class, Kita Menandakan Bahwa class Tersebut Tidak Bisa Diwariskan Lagi
    - Secara Otomatis Semua class child Nya Akan Error
*/

// *** Kode : Final Class ***
/*
    Kode : Final Class
    class SocialMedia {
        public string $name;
    }

    final class Facebook extends SocialMedia {

    }

    //* Error
    class FakeFacebook extends Facebook {

    }

    => Artinya final Adalah class Facebook Tidak Bisa Diturunkan Lagi, Jika Diturunkan Maka Dia Akan Error
*/



?>