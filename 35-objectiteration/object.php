<?php

// IteratorAggregate => interface Bawaan Dari PHP, Jadi Otomatis Ada
class Data implements IteratorAggregate {
    var string $first = "Satu";
    public string $second = "Dua";
    private string $third = "Tiga";
    protected string $fourth = "Empat";

    public function getIterator()
    {
        // Bisa Diakses Meskipun Visibility Nya private, protected Karena Menggunakan getIterator Bawaan PHP
        // Menggunakan array - Materi 35 (Object Iteration)
        $array = [
            "first" => $this->first,
            "second" => $this->second,
            "third" => $this->third,
            "fourth" => $this->fourth,
        ];

        // $iterator = new ArrayIterator($array);
        // return $iterator;

        // Disingkat Menjadi
        return new ArrayIterator($array);

        // Menggunakan yield - Materi 36 (Generator)
        // yield "first" => $this->first;
        // yield "second" => $this->second;
        // yield "third" => $this->third;
        // yield "fourth" => $this->fourth;
    }
}

$data = new Data();

/*
Saat Perulangan foreach, Maka Otomatis Si PHP Akan Manggil function getIterator,
Dia Bisa Tau Kalau Teman - Teman implements IteratorAggregate Dia Akan Memanggil function getIterator
Nanti $array Yang Ini Kita Balikan Di ArrayIterator Dia Akan Dijadikan Sebagai interasi Dalam foreach
*/
foreach ($data as $properties => $values) {
    echo "$properties : $values" . PHP_EOL;
}

?>