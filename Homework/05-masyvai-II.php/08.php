<?php

echo '<pre>';

echo '____8 užduotis___<br><br>';

// 8. Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę: generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą. Jeigu reikšmė yra 0 masyvo nekurkite. Antro lygio masyvo reikšmes užpildykite atsitiktiniais skaičiais nuo 0 iki 10. Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai.

for ($i = 0; $i < 10; $i++) {
    $subArraySize = rand(0, 5);
    $subArray = [];

    if ($subArraySize !== 0) {
        for ($s = 0; $s < $subArraySize; $s++) { 
            $number = rand(1, 10);
            $subArray[] = $number;
        }
        $array[] = $subArray;
    } else {
        $array[] = rand(0, 10);
    }
}
print_r($array);