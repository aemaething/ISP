<?php

// beliebig oft
$regex = "/^x*$/";
var_dump(preg_match($regex, "xxx")); // beliebig oft
// int(1)

var_dump(preg_match($regex, ""));    // oder gar nicht
// int(1)


// mindestens einmal
$regex = "/^x+$/";
var_dump(preg_match($regex, "xxx")); // beliebig oft
// int(1)

var_dump(preg_match($regex, ""));    // oder mindestens einmal
// int(0)                            // 0 bedeutet: kein Treffer


// optional, also ein- oder keinmal
$regex = "/^x?$/";
var_dump(preg_match($regex, "xxx")); // drei x sind zu viel!
// int(0)

var_dump(preg_match($regex, "x"));   // eins passt
// int(1)

var_dump(preg_match($regex, ""));    // oder eben keins
// int(1)

// eigendefinierte Quantoren, hier 2-4 mal
$regex = "/^x{2,4}$/";
var_dump(preg_match($regex, "x"));  // ein x  ist zu wenig
// int(0)

var_dump(preg_match($regex, "xxx")); // drei passen
// int(1)

var_dump(preg_match($regex, "xxxxx")); // fünf nicht mehr
// int(0)