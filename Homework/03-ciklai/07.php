<?php

echo '____7 užduotis___<br><br>';

// 7. Kazys ir Petras žaidžiai Bingo. Petras surenka taškų kiekį nuo 10 iki 20, Kazys surenka taškų kiekį nuo 5 iki 25. Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: ​laimėtojo vardas​”. Taškų kiekį generuokite funkcija ​rand()​. Žaidimą laimi tas, kas greičiau surenka 222 taškus. Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų. Nenaudoti cikle break.

$petrasPoints = 0; // skaiciuojam taskus nuo 0
$kazysPoints = 0;

do {
    $petrasRoll = rand(10, 20); // random ismesti taskai
    $kazysRoll = rand(5, 25);

    if ($petrasRoll > $kazysRoll) { // skaiciuojam ismestus Petro taskus
        $petrasPoints += $petrasRoll;
    } else if ($petrasRoll < $kazysRoll) { //skaiciuojam ismestus Kazio taskus
        $kazysPoints += $kazysRoll;
    } 
} while ($petrasPoints <= 222 && $kazysPoints <= 222); // salyga, tikrina, ar dar kartoti cikla. jei nesurinko 222 ar daugiau, sukti iki kol vienas is ju surenka 222

if ($petrasPoints > $kazysPoints) { // ispausdinam laimetoja, palygine surinktus taskus
    echo "Partiją laimėjo: Petras, surinkęs $petrasPoints taškus(ų).<br/>";
} else {
    echo "Partiją laimėjo: Kazys, surinkęs $kazysPoints taškus(ų).<br/>";
}