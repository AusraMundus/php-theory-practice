<?php

// WEB MECHANIKA - bendrauja serveris ir naršyklė

// Naršyklėje paspaudus ant link'o, Browser'is išsiunčia stringą - Request (susideda iš Header ir Body) į serverį, ir gauna atgal stringą - Response (susideda iš Header ir Body). Puslapis parodomas. 

// Atitikmuo laiškui - tekstas su Headeriu (pavadinimas) ir Body (turinys). Nemaišyti su HTML head, body.

// Naršyklėje galima pasižiūrėti - Inspect > Network > Linkas > Headers : General, Response Headers, Request Headers.

// Pirma tuščia eilutė - skirtumas tarp Header ir Body. Automatiškai sugeneruojama serveryje. Reikia žinoti, kaip spausdinti tinkamai.

// Headeriui spausdinti - funkcija header https://www.php.net/manual/en/function.header.php

// Body spausdinti - echo.

// Header - turi aiškią struktūrą. Header svarbu - Content-Type - būtina nurodyti bodyje, koks failas. Pvz. paveikslėliams, image/jpeg.

// Vienas request skirtas vienam konkrečiam Content-Type. Pvz., puslapis su paveiksliuku, vienas request - HMTL, kitas - paveiksliukui.

// Request header - svarbu: URL, Method GET (duok iš info serverio).

// Prisiloginimas į kažkokį puslapį: Request header - URL, Method POST (išsiųsk info į serverį).

// Request neveiks be: URL, Method, Status Code.



// HTTP response status codes

// https://developer.mozilla.org/en-US/docs/Web/HTTP/Status

// Information responses (100 – 199)

// Successful responses (200 – 299)

// Redirection messages (300 – 399) - 301, 302

// Client error responses (400 – 499) - 400, 401, 403, 404, 405, 418

// Server error responses (500 – 599)