<?php

// 9. (STATIC) Sukurkite klasę MarsoPalydovas.  Kontroliuokite objekto kūrimą iš klasės naudodami statinį metodą. Padarykite taip, kad iš viso būtų galima sukurti tik du objektus iš šitos klasės. Pirmam sukuriamam objektui įrašykite privačią savybę vardas lygią stringui “Deimas”, o antram tokią pat savybę tik lygią stringui “Fobas”. Bandant sukurti trečią objektą, turėtų būti grąžinamas vienas iš anksčiau sukurtų objektų parinktas atsitiktine tvarka.

echo '<pre>';

require __DIR__.'/MarsoPalydovas.php';


$palydovas1 = MarsoPalydovas::getMarsoPalydovas();
$palydovas2 = MarsoPalydovas::getMarsoPalydovas();
$palydovas3 = MarsoPalydovas::getMarsoPalydovas();
$palydovas4 = MarsoPalydovas::getMarsoPalydovas();
$palydovas5 = MarsoPalydovas::getMarsoPalydovas();

var_dump($palydovas1);
var_dump($palydovas2);
var_dump($palydovas3);
var_dump($palydovas4);
var_dump($palydovas5);