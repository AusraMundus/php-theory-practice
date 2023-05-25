<?php

$text = 'Bla bla bla. Bla Bla.';

echo __DIR__.'../data/bla.txt'; // magic constant - absoliutus kelias i faila

echo '<br>';

file_put_contents(__DIR__.'../data/bla.txt', $text); // irasyti i faila konkreciame aplanke

echo file_get_contents(__DIR__.'../data/bla.txt'); // skaityti is failo konkreciame aplanke