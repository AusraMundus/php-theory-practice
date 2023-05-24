<?php

echo '<pre>';

// Uždavinių sprendimui nenaudoti, masyvų, ciklų ir savo parašytų funkcijų. PHP funkcijas žinoma naudokite (pageidautina).

// 2. Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.

echo '____2 užduotis___<br><br>';

$pirmas = rand(0, 4);
$antras = rand(0, 4);

if ($pirmas > $antras) {
    $rezultatas = ($antras == 0) ? "Dalyba iš nulio negalima." : round($pirmas / $antras, 2); // round( , 2) - PHP funkcija apvalinimui iki 2 po kablelio.
    echo $rezultatas;
  
} else if ($pirmas < $antras) {   
    $rezultatas = ($pirmas == 0) ? "Dalyba iš nulio negalima." : round($antras / $pirmas, 2);
    echo $rezultatas;
  
} else if ($pirmas == $antras) {
    echo "Reikšmės lygios.";
}