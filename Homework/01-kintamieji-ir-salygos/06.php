<?php

echo '<pre>';

// Uždavinių sprendimui nenaudoti, masyvų, ciklų ir savo parašytų funkcijų. PHP funkcijas žinoma naudokite (pageidautina).

// 6. Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>

echo '____6 užduotis___<br><br>';

$number = rand(1, 6);

if ($number == 1) echo "<h1>$number</h1>";
else if ($number == 2) echo "<h2>$number</h2>";
else if ($number == 3) echo "<h3>$number</h3>";
else if ($number == 4) echo "<h4>$number</h4>";
else if ($number == 5) echo "<h5>$number</h5>";
else if ($number == 6) echo "<h6>$number</h6>";