<?php

echo '<pre>';

echo '____6 užduotis___<br><br>';

// 6. Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 333 iki 777. Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius.

$array = [];

for ($i = 0; $i < 100; $i++) {
    $randNumber = rand(333, 777);
    $array[] = $randNumber;
}
print_r($array);

function countDivisors($number) {
  if(is_int($number)) {
      $count = 0;
      if ($number < 0) {
        $count = 1;
        return $count;
      }
        for($i = 2; $i < $number; $i++) {
          if($number % $i == 2) {
            $count++;
          }
        }
      return $count;
  } else {
      echo 'Number is not an integer';
  }
}

$newArray = array_filter($array, fn($a) => countDivisors($a) > 0);
print_r(array_values($newArray));