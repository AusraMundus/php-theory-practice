<?php

// extends - tevines klases priskyrimas
class Paukstis extends Miskas {

    // $name, $age - kintamuju savybes
    public $name, $age;
    
    // $name, $age - argumentai, kurie ateina i funkcija
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function fly() : void
    {
        echo '<h1>' . $this->name . ' Skrenda skrenda ' . $this->color . '</h1>';
    }

    // tevo funkcijos overraidinimas - laimi vaiko funkcija
    public function getArea() : string
    {
        return '<h2>Aš karvelis gyvenu mieste</h2>';
    }

}
