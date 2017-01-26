<?php

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// eine anonyme Funktion wird verwendet, um alle
// ungeraden Zahlen aus dem Array zu filtern
print_r(array_filter($data, function ($value) {
	return ($value % 2 == 0);
}));

/*
(
    [1] => 2
    [3] => 4
    [5] => 6
    [7] => 8
    [9] => 10
)
*/

// dito - hier wird aber auf einen geraden Index geprüft
print_r(array_filter($data, function ($key) {
	return ($key % 2 == 0);
}, ARRAY_FILTER_USE_KEY));

/*
Array
(
    [0] => 1
    [2] => 3
    [4] => 5
    [6] => 7
    [8] => 9
)
*/


$data = [
	"a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5, 
	"f" => 6, "g" => 7, "h" => 8, "i" => 9, "j" => 10
]; 
$vocale = ["a", "e", "i", "o", "u"];

// filtert alle geraden Werte und Indize, die ein Vokal sind
print_r(array_filter($data, function ($value, $key) use ($vocale) {
	return in_array($key, $vocale) || ($value % 2 == 0);
}, ARRAY_FILTER_USE_BOTH));
/*
(
    [a] => 1
    [b] => 2
    [d] => 4
    [e] => 5
    [f] => 6
    [h] => 8
    [i] => 9
    [j] => 10
)
*/


// alles, was als false interpretiert wird, wird herausgefiltert
$data = ["", null, 0.0, 0, false, "x", 1];
print_r(array_filter($data));
/*
Array
(
    [5] => x
    [6] => 1
)
*/