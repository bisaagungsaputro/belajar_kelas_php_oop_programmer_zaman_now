<?php

// *** Kode : Properties Overloading  ***

use Zero as GlobalZero;

class Zero
{
    private array $properties = [];

    public function __get($name)
    {
        return $this->properties[$name];
    }

    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    public function __isset($name)
    {
        return isset($this->properties[$name]);
    }

    public function __unset($name)
    {
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call function $name With arguments $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call Static function $name With arguments $join" . PHP_EOL;
    }
}

$zero = new Zero();
$zero->sayHello("Bagas", "Ramadhan");

class Pahlawan
{
    public string $FirstName = "Agung Saputro";

    public function __get($name)
    {
        echo "Access Property $name" . PHP_EOL;
        return "BEBAS";
    }

    public function __set($name, $value)
    {
        echo "Set Property $name With Value $value" . PHP_EOL;
    }
}

$pahlawan = new Pahlawan();
// DEksekusi function $FirstName
echo $pahlawan->FirstName . PHP_EOL;
// Jika Tidak Ada function $MiddleName, Maka Dia Akan Langsung Eksekusi function __get
echo $pahlawan->MiddleName . PHP_EOL;

class PahlawanSet
{
    public function __set($name, $value)
    {
        echo "Set Property $name With Value $value" . PHP_EOL;
    }
}

$pahlawanset = new PahlawanSet();
// Kalau Tidak Ada Properties Di PahlawanSet
$pahlawanset->FirstNameSet = "Eko";

class PahlawanPendukung
{
    public function __isset($name): bool
    {
        echo "Ini Adalah Isset $name" . PHP_EOL;
        return false;
    }

    public function __unset($name)
    {
        echo "Ini Adalah Unset $name" . PHP_EOL;
    }

}

$pahlawanisset = new PahlawanPendukung();
isset($pahlawanisset->LastName);
unset($pahlawanisset->PahlawanPenolong);

?>