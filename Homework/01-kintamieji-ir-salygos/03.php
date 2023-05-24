<?php

echo '<pre>';

// Uždavinių sprendimui nenaudoti, masyvų, ciklų ir savo parašytų funkcijų. PHP funkcijas žinoma naudokite (pageidautina).

// 3. Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.

echo '____3 užduotis___<br><br>';

$a = rand(0, 25);
$b = rand(0, 25);
$c = rand(0, 25);

echo "Kintamasis a: $a, kintamasis b: $b, kintamasis c: $c";
echo '<br><br>';

if (($a < $b && $b < $c) || ($a > $b && $b > $c)) { // b vidurinis
    $middle = $b;
    $middle = 'b';
    echo "Kintamasis, turintis vidurinę reikšmę, yra $middle.";
} else if (($b < $c && $c < $a) || ($b > $c && $c > $a)) { // c vidurinis
    $middle = $c;
    $middle = 'c';
    echo "Kintamasis, turintis vidurinę reikšmę, yra $middle.";
} else if (($c < $a && $a < $b) || ($c > $a && $a > $b)) { // a vidurinis
    $middle = $a;
    $middle = 'a';
    echo "Kintamasis, turintis vidurinę reikšmę, yra $middle.";
} else if (($a == $b || $a == $c || $b == $c) || ($a == $b && $a == $c && $b == $c)){ // visi arba du yra lygūs
    echo "Nėra kintamojo, turinčio vidurinę reikšmę.";
}