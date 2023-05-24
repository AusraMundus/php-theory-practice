<?php

echo "<pre>";

// 1. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.

echo '____1 užduotis___<br><br>';

$name = 'Ryan';
$last_name = 'Reynolds';

if (strlen($name) < strlen($last_name)) {
    echo $name;
} else {
    echo $last_name;
};

echo '<br><br>';

// Ternary
$shorter_name = strlen($name) < strlen($last_name) ? $name : $last_name;
echo $shorter_name;