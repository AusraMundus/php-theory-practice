<?php

echo '<pre>';

// Uždavinių sprendimui nenaudoti, masyvų, ciklų ir savo parašytų funkcijų. PHP funkcijas žinoma naudokite (pageidautina).

// 1. Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį: "Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".

echo '____1 užduotis___<br><br>';

$name = 'Laura';
$lastName = 'Morkutė';
$birthYear = '1990';
$currentYear = '2023';

$age = $currentYear - $birthYear;
echo "As esu $name $lastName. Man yra $age metai(ų).";

echo '<br><br><br>';

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

echo '<br><br><br>';

// 3. Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.

echo '____3 užduotis___<br><br>';

$a = rand(0, 25);
$b = rand(0, 25);
$c = rand(0, 25);

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

echo '<br><br><br>';

// 4. Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų.

echo '____4 užduotis___<br><br>';

$borderA = rand(0, 10);
$borderB = rand(0, 10);
$borderC = rand(0, 10);

// P = a + b + c. Bet kurių dviejų kraštinių suma yra didesnė už trečiosios kraštinės ilgį.
if ((($borderA + $borderB) > $borderC) && (($borderB + $borderC) > $borderA) && (($borderC + $borderA) > $borderB)) echo "Su kraštinėmis $borderA , $borderB ir $borderC trikampį galima sudaryti.";
else echo "Su kraštinėmis $borderA , $borderB ir $borderC trikampio negalima sudaryti.";

echo '<br><br><br>';

// 5. Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).

echo '____5 užduotis___<br><br>';

$numA = rand(0, 2);
$numB = rand(0, 2);
$numC = rand(0, 2);
$numD = rand(0, 2);

$countZero = 0; // Kintamasis, skaičiuoti visus 0.
$countOne = 0; // Kintamasis, skaičiuoti visus 1.
$countTwo = 0; // Kintamasis, skaičiuoti visus 2.

if ($numA == 0) $countZero++;
elseif ($numA == 1) $countOne++;
else $countTwo++;
  
if ($numB == 0) $countZero++;
elseif ($numB == 1) $countOne++;
else $countTwo++;
  
if ($numC == 0) $countZero++;
elseif ($numC == 1) $countOne++;
else $countTwo++;
  
if ($numD == 0) $countZero++;
elseif ($numD == 1) $countOne++;
else $countTwo++;

echo "Nulių yra: $countZero. Vienetų yra: $countOne. Dvejetų yra: $countTwo.";

echo '<br><br><br>';

// 6. Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>

echo '____6 užduotis___<br><br>';

$number = rand(1, 6);

if ($number == 1) echo "<h1>$number</h1>";
else if ($number == 2) echo "<h2>$number</h2>";
else if ($number == 3) echo "<h3>$number</h3>";
else if ($number == 4) echo "<h4>$number</h4>";
else if ($number == 5) echo "<h5>$number</h5>";
else if ($number == 6) echo "<h6>$number</h6>";

echo '<br><br><br>';

// 7. Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni. 

echo '____7 užduotis___<br><br>';

$coloredNumber = rand(-10, 10);

if ($coloredNumber < 0) echo "<span style='color:green'>$coloredNumber</span>";
else if ($coloredNumber  == 0) echo "<span style='color:red'>$coloredNumber</span>";
else echo "<span style='color:blue'>$coloredNumber</span>";

echo '<br><br><br>';

// 8. Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.

echo '____8 užduotis___<br><br>';

$candle = rand(5, 3000);

$priceRegular = $candle * 1; // Kaina, perkant iki 1000 EUR imtinai
$priceDiscount3 = $candle * 0.97; // Kaina su 3 proc. nuolaida, perkant už 1001-2000 EUR imtinai
$priceDiscount4 = $candle * 0.96; // Kaina su 4 proc. nuolaida, perkant už 2001-3000 EUR imtinai

if ($candle <= 1000) echo "Perkama $candle vnt. žvakių už $priceRegular Eur kainą.";
else if ($candle > 1000 && $candle <= 2000) echo "Perkama $candle vnt. žvakių už $priceDiscount3 Eur kainą.";
else echo "Perkama $candle vnt. žvakių už $priceDiscount4 Eur kainą.";

echo '<br><br><br>';

// 9. Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.

echo '____9 užduotis___<br><br>';

$numeroUno = rand(0, 100);
$numeroDos = rand(0, 100);
$numeroTres = rand(0, 100);

// Aritmetinis vidurkis
$regularAverage = round(($numeroUno + $numeroDos + $numeroTres) / 3);
echo $regularAverage;

echo '<br><br>';
// Aritmetinis vidurkis, atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90.

$otherNumeroCount = 0; // Kintamasis, skirtas norint suskaičiuoti įvestų reikšmių kiekį.
$otherNumeroSum = 0; // Kintamasis, skirtas suskaičiuoti reikšmių sumą, kuri reikalinga vidurkiui skaičiuoti.

// Patikrina visus kintamuosius, ar atitinka sąlygą.
if ($numeroUno > 10 && $numeroUno < 90) { // Patikrina, ar $music1 reikšmė yra nuo 10 iki 90.
    $otherNumeroCount++; // Jei taip, ji padidina kintamąjį $otherNumeroCount vienetu...
    $otherNumeroSum += $numeroUno;  // ir prideda $numeroUno reikšmę prie kintamojo $otherNumeroSum.
}
if ($numeroDos > 10 && $numeroDos < 90) {
    $otherNumeroCount++;
    $otherNumeroSum += $numeroDos;
}
if ($numeroTres > 10 && $numeroTres < 90) {
    $otherNumeroCount++;
    $otherNumeroSum += $numeroTres;
}

if($otherNumeroCount == 3) { // Jei visų kintamųjų reikšmės atitinka sąlygą...
    $otherAverage = round($otherNumeroSum / $otherNumeroCount); // dalina reikšmių sumą iš kintamųjų skaičiaus
    echo $otherAverage;
} else {
    echo "Reikšmės neatitinka sąlygos.";
}

echo '<br><br><br>';

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