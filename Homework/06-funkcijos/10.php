<?php

echo '<pre>';

echo '____10 užduotis___<br><br>';

// 10. Sugeneruokite masyvą iš 10 elementų, kurie yra masyvai iš 10 elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 100. Jeigu tokio didelio masyvo (ne atskirai mažesnių) pirminių skaičių vidurkis mažesnis už 70, suraskite masyve mažiausią skaičių (nebūtinai pirminį) ir prie jo pridėkite 3. Vėl paskaičiuokite masyvo pirminių skaičių vidurkį ir jeigu mažesnis nei 70 viską kartokite. 

$array = [];

for ($i = 0; $i < 10; $i++) {
    $subArray = [];

    for ($s = 0; $s < 10; $s++) {
        $number = rand(1, 100);
        $subArray[] = $number;
    }

    $array[] = $subArray;
}
print_r($array);