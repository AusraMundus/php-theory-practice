<?php

echo '<pre>';

// Uždavinių sprendimui nenaudoti, masyvų, ciklų ir savo parašytų funkcijų. PHP funkcijas žinoma naudokite (pageidautina).

// 10. Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.

echo '____10 užduotis___<br><br>';

// Skaitmeninis laikrodis
$hours = rand(0, 23);
$minutes = rand(0, 59);
$seconds = rand(0, 59);

// Laikas, prieš pridedant papildomas sekundes
echo "Pradinis laikas: $hours:$minutes:$seconds<br>"; 

// Papildomai sugeneruotos sekundės
$extraSeconds = rand(0, 300); 
$seconds += $extraSeconds; // Prie esamų sekundžių pridedamos papildomos sekundės

// Jei reikia, papildomas sekundes perversti į minutes ir valandas
if ($seconds >= 60) {
    $minutes += floor($seconds / 60); // floor() - PHP funkcija, kuri grąžina didžiausią sveikojo skaičiaus reikšmę, mažesnę arba lygią nurodytam skaičiui. 
    $seconds = $seconds % 60;
}
if ($minutes >= 60) {
    $hours += floor($minutes / 60);
    $minutes = $minutes % 60;
}
if ($hours >= 24) {
    $hours = $hours % 24;
}

// Laikas, pridėjus papildomas sekundes
echo "Koreguotas laikas: $hours:$minutes:$seconds<br>";
// Papildomai pridėtų sekundžių skaičius
echo "Papildomai pridėtos sekundės: $extraSeconds"; 