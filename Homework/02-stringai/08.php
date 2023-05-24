<?php

echo "<pre>";

// 8. Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.

echo '____8 užduotis___<br><br>';

// str_repeat() function repeats a string a specified number of times. Syntax: str_repeat(string,repeat)
// The strpos() function finds the position of the first occurrence of a string inside another string. Syntax: strpos(string,find)
$episode = 'Star Wars: Episode ' . str_repeat(' ', rand(0,5)) . rand(1,9) . ' - A New Hope';

$episode_changed = preg_replace('/[\s]{0,5}/', '', $episode); // pakeista dalis str_repeat(' ', rand(0,5)) į ''
$episode_number = substr($episode_changed, strpos($episode_changed, '') + 16, 1);
echo $episode_number;
