<?php

echo '<pre>';

/*
$data = [
    ['name' => 'bebras', 'amount' => 20],
    ['name' => 'briedis', 'amount' => 120],
    ['name' => 'antis', 'amount' => 0]
];

$dataJson = json_encode($data); // kad array rodytu faile, paversti i stringa, su'json'inti

$dataSer = serialize($data); // kitas budas rodyti array - serialize

file_put_contents(__DIR__ . '/data.json', $dataJson);
file_put_contents(__DIR__ . '/data.ser', $dataSer);
*/

$jsonFile = file_get_contents(__DIR__ . '/data.json');
$serFile = file_get_contents(__DIR__ . '/data.ser');


$dataFromJson = json_decode($jsonFile, 1);
$dataFromSer = unserialize($serFile);

print_r($dataFromJson);
print_r($dataFromSer);