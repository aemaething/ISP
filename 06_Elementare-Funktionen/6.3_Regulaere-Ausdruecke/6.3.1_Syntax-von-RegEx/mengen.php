<?php


// Suche nach einem oder mehreren Kleinbuchstaben
$regex = "/[a-z]+/";

var_dump(preg_match($regex, "abcde"));
// int(1)
var_dump(preg_match($regex, "12345"));
// int(0)


// Besteht die Menge nur aus a-c und 1-3?
$regex = "/^[abc123]+$/";
var_dump(preg_match($regex, "abcde"));
// int(0)
var_dump(preg_match($regex, "1a23b"));
// int(1)



// Prüfen, ob die Zeichenmenge eine 1-4stellige Ziffer ist
$regex = '/^\d{1,4}$/';

var_dump(preg_match($regex, "1111"));
// int(1)
var_dump(preg_match($regex, "111a"));
// int(0)
var_dump(preg_match($regex, "abcd"));
// int(0)
var_dump(preg_match($regex, "42"));
// int(1)


$regex = "/[[:upper:]]/";
$data = "alles kleine buchstaben bis auf Einen";
var_dump(preg_match($regex, $data));
// int(1)

$regex = "/[[:digit:]]/";
$data = "alles kleine buchstaben bis auf 1";
var_dump(preg_match($regex, $data));
// int(1)