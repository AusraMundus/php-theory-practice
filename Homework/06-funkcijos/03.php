<?php

echo '<pre>';

echo '____3 užduotis___<br><br>';

// 3. Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). Visus skaitmenis stringe įdėkite į h1 tagą. Raides palikite. Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio) Keitimui naudokite pirmo patobulintą (jeigu reikia) uždavinio funkciją ir preg_replace_callback();

$stringRandom = md5(time());

function someText($textInside) {
    $textInside = preg_replace_callback('/(\d+)/', fn($matches) => '<h1 style=display:inline;>' . $matches[0] . '</h1>', $textInside);
    echo $textInside;
}

someText($stringRandom);