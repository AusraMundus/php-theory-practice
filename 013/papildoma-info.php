<?php

// Konstanta - nekeiciama. Viena karta apsirasai ir nekeiti. Apsiraso su zodziu define() - viduje konstantos vardas, rasomas didelem raidem, ir reiksme. KABUTES

define('BRIEDIS', 'Briedis jau miega');

echo BRIEDIS; // echo'ina reiksme -> Briedis jau miega

var_dump(defined('BRIEDIS')); // boolean TRUE arba FALSE


// Rasymas i faila, skaitymas is failo

file_put_contents('miskas.txt', BRIEDIS . "\n", FILE_APPEND); // file_put_contents -> sukuria faila, kur turi persikelti info