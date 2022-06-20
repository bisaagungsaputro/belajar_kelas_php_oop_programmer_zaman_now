<?php


// *** Kode : Super Keyword ***
    namespace Data;

    class Shape{

        // return parent::getCorner(); => Akan Mengakses function Ini
        function getCorner(): int {
            return 7;
        }
    }

    class Rectangle extends Shape {

        // return $this->getCorner(); => Akan Mengakses function Ini
        public function getCorner(): int {
            return 4;
        }

        public function getParentCorner(): int {
            /*
            Untuk mengakses class Rectangle, Di function getCorner
            return $this->getCorner();

            Kata Kunci parent
            return parent::getCorner();
            */
            return parent::getCorner();
        }
    }


// ---


// *** Parent Keyword ***


// *** Parent Keyword ***
// *** Kode : Super Keyword ***


// *** Parent Keyword ***
/*
    Parent Keyword
    - Kadang Kita Ingin Mengakses function Yang Terdapat Di class parent Yang Sudah Terlanjur
      Kita Override Di class child
    - Untuk Mengakses function Milik class Parent, Kita Bisa Menggunakan Kata Kunci parent
    - Sederhananya, parent Digunakan Untuk Mengakses class parent
*/

// *** Kode : Super Keyword ***
/*
    Kode : Super Keyword
    namespace Data;

    class Shape{
        function getCorner(): int {
            return 0;
        }
    }

    class Rectangle extends Shape {
        public function getCorner(): int {
            return 4;
        }

        public function getParentCorner(): int {
            return parent::getCorner();
        }
    }
*/



?>