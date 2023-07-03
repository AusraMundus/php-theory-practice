<?php

// https://www.codewars.com/kata/57cebe1dc6fdc20c57000ac9/train/php

function findShort($str){

    $w = explode(" ",$str);

    usort($w, function($a, $b) {
        if(strlen($a) > strlen($b)) {
            return 1;
        }
        elseif(strlen($a) < strlen($b)) {
            return -1;
        }
        else {
            return 0;
        };
      });
        return strlen($w[0]);
}

echo findShort("bitcoin take over the world maybe who knows perhaps");