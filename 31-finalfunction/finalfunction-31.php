<?php


class SocialMedia {
    public string $username;
    public string $password;
}

// *** Kode : Final Method ***
    class Facebook extends SocialMedia {
        final public function Login (string $username, string $password): bool {
            return true;
        }
    }

    //      class FakeFacebook extends Facebook {
        //* Bakal Error Karena parent Dari class Facebook Di function Login Di Buat Menggunakan final
        // final class Tidak Bisa Diturunkan, Jika final function Tidak Bisa Override
    //     public function Login (string $username, string $password): bool {
    //         return false;
    //     }
    // }


// ---


// *** Final Function ***


// *** Final Function ***
// *** Kode : Final Method ***


// *** Final Function ***
/*
    Final Function
    - Kata Kunci final Juga Bisa Digunakan Di function
    - Jika Sebuah function Kita Tambahkan Kata Kunci final, Maka Artinya function function Tersebut
      Tidak Bisa Di Override Lagi Di class child Nya
    - Ini Sangat Cocok Jika Kita Ingin Mencuci implementasi Dari Sebuah method
*/

// *** Kode : Final Method ***
/*
    Kode : Final Method
    class Facebook extends SocialMedia {
        final public function Login (string $username, string $password): void {

        }
    }

    class FakeFacebook extends Facebook {
        //* Bakal Error Karena parent Dari class Facebook Di function Login Di Buat Menggunakan final
        public function Login (string $username, string $password): void {

        }
    }
*/



?>