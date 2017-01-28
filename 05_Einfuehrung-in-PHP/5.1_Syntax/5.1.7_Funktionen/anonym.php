<?php

// sortierte Daten
$data = [1, 2, 3, 4, 5, 6, 7, 8, 9];

// php-interne funktion usort
// nutzt anonyme funktion zum 'sortieren'
usort($data, function ($a, $b) {
return rand(-1, 1);
});

print_r($data);
/*
Array
(
[0] => 1
[1] => 3
[2] => 2
[3] => 9
[4] => 4
[5] => 5
[6] => 6
[7] => 7
[8] => 8
)
*/