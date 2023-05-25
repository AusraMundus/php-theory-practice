<?php

// FAILU ITERPIMAS I KITA FAILA

// 1 budas - include
echo '<h1>MAIN START</h1>';

include __DIR__ . '/file1.php';

include __DIR__ . '/file2.php';

include __DIR__ . '/file3.php'; // neegzistuojantis failas - pyksta narsykle, bet kodas veikia

include __DIR__ . '/file1.php';

include __DIR__ . '/file2.php';

echo '<h1>MAIN END</h1>';

echo '<br><br>';

// 2 budas - require - NAUDOJAMAS DABAR
echo '<h1>MAIN START</h1>';

require __DIR__ . '/file1.php';

require __DIR__ . '/file2.php';

require __DIR__ . '/file3.php'; // neegzistuojantis failas, todel kodas toliau nebeveikia

require __DIR__ . '/file1.php';

require __DIR__ . '/file2.php';

echo '<h1>MAIN END</h1>';

echo '<br><br>';

// 3 budas - include_once - tikrina, ar failas buvo includintas, jei taip, jo nededa antra karta. Klaidu nemeta. 
echo '<h1>MAIN START</h1>';

include_once __DIR__ . '/file1.php';

include_once __DIR__ . '/file2.php';

include_once __DIR__ . '/file1.php';

include_once __DIR__ . '/file2.php';

echo '<h1>MAIN END</h1>';

echo '<br><br>';

// 4 budas - require_once - tikrina, ar failas buvo includintas, jei taip, jo nededa antra karta. Klaidu nemeta. Reikalauja, kad failas tikrai butu idetas.
echo '<h1>MAIN START</h1>';

require_once __DIR__ . '/file1.php';

require_once __DIR__ . '/file2.php';

require_once __DIR__ . '/file1.php';

require_once __DIR__ . '/file2.php';

echo '<h1>MAIN END</h1>';

echo '<br><br>';