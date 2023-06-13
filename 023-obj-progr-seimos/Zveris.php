<?php

// extends - tevines klases priskyrimas
class Zveris extends Miskas {

    // $name, $age - kintamuju savybes
    public $name, $age;
    
    // $name, $age - argumentai, kurie ateina i funkcija
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function run() : void
    {
        echo '<h1>' . $this->name . ' Skrenda skrenda ' . $this->color . '</h1>';
    }

}
