<?php

echo '<pre>';

echo '____1 užduotis___<br><br>';

// 1. Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;

$text = 'Labas!';

function someText($textInside) {
    echo "<h1>$textInside</h1>";
}

someText($text);