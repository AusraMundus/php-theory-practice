<?php

// jei parasome - final class - negalima ekstendinti, tevas - bevaikis
class Miskas
{

    // public savybes - perduodamos vaikams ir klases viduje, ir isoreje - visur
    // protected savybes - perduodamos vaikams tik klases viduje, i isore neperduodamos
    // private savybes - vaikai negali paveldeti 

    public $color = 'Rausvas';

    public function getArea(): string
    {
        return '<h3>Miško dydis yra: ' . rand(10, 99) . '</h3>';
    }
}
