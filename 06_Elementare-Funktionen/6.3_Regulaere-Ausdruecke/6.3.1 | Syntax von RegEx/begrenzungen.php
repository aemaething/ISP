<?php

// ohne begrenzungen - das Pattern kann überall in der Menge stehen
$regex = "/suchwort/";
var_dump(preg_match($regex, "wo ist denn das suchwort hingekommen?"));
// int(1)



// nun muss suchwort am Anfang der Menge stehen
$regex = "/^suchwort/";

// wird kein Treffer
var_dump(preg_match($regex, "wo ist denn das suchwort hingekommen?"));
// int(0)

// hier geht's
var_dump(preg_match($regex, "suchwort ist hier!"));
// int(1)



// nun muss das suchwort am Ende stehen
$regex = "/suchwort$/";

// wird kein Treffer
var_dump(preg_match($regex, "wo ist denn das suchwort hingekommen?"));
// int(0)

// hier geht's
var_dump(preg_match($regex, "hier ist das suchwort"));
// int(1)



// nun muss das Pattern der gesamten Zeichenmenge entsprechen
$regex = "/^suchwort$/";

// wird kein Treffer
var_dump(preg_match($regex, "wo ist denn das suchwort hingekommen?"));
// int(0)

// wird kein Treffer
var_dump(preg_match($regex, "wo ist denn das suchwort hingekommen?"));
// int(0)

// endlich!
var_dump(preg_match($regex, "suchwort"));
// int(1)