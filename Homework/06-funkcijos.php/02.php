<?php

echo '<pre>';

echo '____2 užduotis___<br><br>';

// 2. Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;

$text = 'Labas!';
$tagNumber = rand(1, 6);

function someText($textInside, $number) { 
    echo "<h$number>$textInside</h$number>";
}

someText($text, $tagNumber);

// someText('Labas!', 1);