<?php

echo '<pre>';

// Uždavinių sprendimui nenaudoti, masyvų, ciklų ir savo parašytų funkcijų. PHP funkcijas žinoma naudokite (pageidautina).

// 8. Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.

echo '____8 užduotis___<br><br>';

$candle = rand(5, 3000);

$priceRegular = $candle * 1; // Kaina, perkant iki 1000 EUR imtinai
$priceDiscount3 = $candle * 0.97; // Kaina su 3 proc. nuolaida, perkant už 1001-2000 EUR imtinai
$priceDiscount4 = $candle * 0.96; // Kaina su 4 proc. nuolaida, perkant už 2001-3000 EUR imtinai

if ($candle <= 1000) echo "Perkama $candle vnt. žvakių už $priceRegular Eur kainą.";
else if ($candle > 1000 && $candle <= 2000) echo "Perkama $candle vnt. žvakių už $priceDiscount3 Eur kainą.";
else echo "Perkama $candle vnt. žvakių už $priceDiscount4 Eur kainą.";