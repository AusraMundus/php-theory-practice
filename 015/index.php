<?php

// FUNKCIJOS PHP`e

// Parametras - kintamojo vardas. Argumentas - kintamojo reikšmė.

$hello = 'Labas'; // funkcijos isoreje

function fun () 
{
    // global $hello; // globalus kintamasis, bet taip nedaroma jau 
    
    echo "<br> 1 $hello"; // neapibrėžtas
    
    $hello = 'Hi'; // funkcijos viduje

    echo "<br> 2 $hello";
}

fun();

echo "<br> 3 $hello"; 

echo '<br><br>';


function sudeti($vienas = 10, $du = 20) // parametrai. Jei tik vienas default'inis parametras $du = 20, dėti į pabaigą, pirmasis negali būti. Jei visi, OK
{
   return $vienas + $du;
}
echo sudeti().'<br>'; // jei nėra argumentų, atspaudins default'inius
echo sudeti(1).'<br>'; // 
echo sudeti(1, 2).'<br>'; // argumentai, perrašys default'inius


// rest'inimas - visi likę. naudojama plačiai PHP`e

// function sudeti2($vienas, $du, $a1 = 0, $a2 = 0, $a3 = 0)
function sudeti2($vienas, $du, ...$rest) // $rest - indeksas 0, surenka visus likusius parametrus
{
   return $vienas + $du + array_sum($rest);
}
echo sudeti2(1, 2, 10, 10, 10, 10).'<br>';

echo '<br><br>';

// spread'inimas (išsiskleidimas). Turi būti taisyklingas masyvas. Nelabai naudojamas PHP'e
$m = [7, 8, 9];

[$a, $b, $c] = [...$m];

echo $b;

echo '<br><br>';

// static deklaracija funkcijos viduje - funkcinis programavimas, iš senesnių laikų

function add1()
{
    // static $c = 0; // priskiria statinę reikšmę - matysim 1 2 3 4
    $c = 0;
    return ++$c;
}
echo '<br>' . add1();
echo '<br>' . add1();
echo '<br>' . add1();
echo '<br>' . add1();
// spausdina 4 kartus funkciją - ats. 1 1 1 1 

echo '<br><br>';

// recursive - Rekursinė funkcija, rekursija.
function recursive($num) {

    echo $num, 'START<br>';
    if ($num < 3) {
        recursive($num + 1);
    }
    echo $num, 'END<br>';
}
$startNum = 1;
recursive($startNum);

$mas = [
    1,
    1,
    [
        1,
        [
            1,
            1,
            [
                1
            ],
            1,
            1,
        ],
        1,
        [
            1,
            1,
        ],
        1,

    ],
];
echo '<pre>';
print_r($mas);

function countSum($array)
{
    $sum = 0;
    foreach ($array as $value) {
        if (!is_array($value)) {
            $sum += $value;
        } else {
            $sum += countSum($value);
        }
    }
    return $sum;
}
echo '<h1>' . countSum($mas) . '</h1>';

echo '<br><br>';

// anonimous function - anoniminė funkcijas. Jos dažniausiai įdėtos į kintamąjį

$anonim = function() {
    echo '<h1>ANONIM</h1>';
};

function blaBla()
{
    echo '<h1>BLA BLA BLA</h1>';
}

// $anonim();

echo '<br><br>';

// callback - jei turim funkciją, kai vienas iš argumentų turi kitą funkciją.

function saySomething($f) // $f - callback
{
    $f();
}

saySomething($anonim); // anoninimine fukcija, paduodama er kintamajo pavadinimas

saySomething('blaBla'); // tradicinie funkcija, paduodama kaip stringas - funkcijos pavadinimas

saySomething(function() // anonimine inline funkcija
    {
        echo '<h1>INLINE</h1>';
    }
);


// usort - sortinimas su funkcija

$masyvas = [
    ['bebras', 'kietas'],
    ['zuikis', 'trumpas'],
    ['vilkas', 'pilkas'],
    ['dramblys', 'storas'],
];

$sortName = function($a, $b)
{
    return $a[0] <=> $b[0];
};

function sortNameDesc($a, $b)
{
    return $b[0] <=> $a[0];
};

usort($masyvas, $sortName);

$sortType = fn($a, $b) => $a[1] <=> $b[1]; // arrow function PHP'e
usort($masyvas, $sortType);

usort($masyvas, fn($a, $b) => $a[1] <=> $b[1]); // inline funkcija

print_r($masyvas);


$bebras = 'BEBRAS';

$addStars = fn() => '*' . $bebras . '*';

$addMinus = function() use ($bebras) // use - perdavimas pagal reference
{
    return '---' . $bebras . '---';
};

$bebras = $addMinus();

$bebras = $addMinus();

echo '<h2>' . $addStars() . '</h2>';

// echo '<h2>' . $addMinus() . '</h2>';
echo '<h2>' . $bebras . '</h2>';