<?php

echo '<pre>';

echo '____9 užduotis___<br><br>';

// 9. Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 33. Jeigu tarp trijų paskutinių elementų yra nors vienas ne pirminis skaičius, prie masyvo pridėkite dar vieną elementą- atsitiktinį skaičių nuo 1 iki 33. Vėl patikrinkite pradinę sąlygą ir jeigu reikia pridėkite dar vieną elementą. Kartokite, kol sąlyga nereikalaus pridėti elemento. 

function primeCheck($number){
    if ($number == 1) {
        return 0;
    }
    for ($i = 2; $i <= $number/2; $i++){
        if ($number % $i == 0)
            return 0;
    }
    return 1;
}

$array = [];
  
for ($i = 0; $i < 3; $i++) {
    $number = rand(1, 33);
    $array[] = $number;
}
print_r($array);

foreach ($array as $number) {
    $number = rand(1, 33);
    if (primeCheck($number) == 0) {
        $array[] = $number;
    }
}

print_r($array);