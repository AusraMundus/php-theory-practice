<?php

echo '<pre>';

echo '____10 užduotis___<br><br>';

// 10. Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų. Antro lygio masyvų reikšmės masyvai su dviem elementais value ir color. Reikšmė value vienas iš atsitiktinai parinktų simbolių: #%+*@裡, o reikšmė color atsitiktinai sugeneruota spalva formatu: #XXXXXX. Pasinaudoję masyvų atspausdinkite “kvadratą” kurį sudarytų masyvo reikšmės nuspalvintos spalva color.

$array = [];
$subArray = [];
$symbols = ['#','%','+','*','@','裡'];
$rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
    
for ($i = 1; $i <= 10; $i++){
    for ($e = 1; $e <= 10; $e++){
        $item["value"] = $symbols[array_rand($symbols, 1)];
        $item["color"] = '#'.$rand[rand(0, 15)].$rand[rand(0, 15)].$rand[rand(0, 15)].$rand[rand(0, 15)].$rand[rand(0, 15)].$rand[rand(0, 15)];
        $subArray[] = ["value"=>$item["value"],"color"=> $item["color"]];
    }
    $array[] = $subArray;
    $subArray = [];
}

foreach ($array as $small){
    echo "<p style='height:8px'>";
    foreach($small as $itm){
        echo "<span style='display: inline-block; width: 20px; height: 20px; color:".$itm['color']."'>".$itm['value']."</span>";
    }
    echo "</p>";
}
