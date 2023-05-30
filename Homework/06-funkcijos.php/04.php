<?php

echo '<pre>';

echo '____4 užduotis___<br><br>';

// 4. Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;

function countDivisors($number) {
    if(is_int($number)) {
        $count = 0;
        if ($number < 0) {
          $number = $number * -1;
        }
          for($i = 2; $i < $number; $i++) {
            if($number % $i == 0) {
              $count++;
            }
          }
        return $count;
    } else {
        echo 'Number is not an integer';
    }
}

echo countDivisors(10) . '<br>'; // ATS. 2
echo countDivisors(13) . '<br>'; // ATS. 0
echo countDivisors(1.5) . '<br>'; // Is not integer
echo countDivisors(0) . '<br>'; // 0
echo countDivisors(-15); // ATS. 2