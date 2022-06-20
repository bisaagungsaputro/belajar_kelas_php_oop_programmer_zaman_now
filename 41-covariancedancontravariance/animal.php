<?php

namespace Data;

require_once "food.php";

abstract class Animals {
    public string $name;

    abstract public function run(): void;

    // *** Kode : Invariance (1) ***
    public abstract function eat(AnimalFood $food);
}

class Cat extends Animals {
    public function run(): void
    {
        echo "Cat $this->name Is Running" . PHP_EOL;
    }

    public function eat(AnimalFood $food): void
    {
        echo "Cat Is Eating" . PHP_EOL;
    }
}

class Dog extends Animals
{
    public function run(): void
    {
        echo "Dog $this->name Is Running" . PHP_EOL;
    }

    //* Contravariance / Kebalikan
    public function eat(Food $food)
    {
        echo "Dog Is Eating" . PHP_EOL;
    }
}

?>