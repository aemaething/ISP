<?php

$data = ["a", "b", "c", "die", "katze", "sitzt", "im", "schnee"];

// die ersten 3 Elemente aus $data
print_r(array_slice($data, 0, 3));
/*
Array
(
    [0] => a
    [1] => b
    [2] => c
)*/

// 2 Elemente ab der 3. Stelle aus $data
print_r(array_slice($data, 3, 2));
/*
Array
(
    [0] => die
    [1] => katze
)
*/

// ab dem 5. bis zum 2. Element vor dem Ende von $data
print_r(array_slice($data, 5, -2));
/*
Array
(
    [0] => sitzt
)
*/

// hier begrenzt die Quelle das Ende
// Auf den neuen Index achten!
print_r(array_slice($data, 5, 20, true));
/*
Array
(
    [5] => sitzt
    [6] => im
    [7] => schnee
)
*/





// Daten aus einer CSV Datei, nur die Ziffern aus der
// Mitte sind für uns relevant
$data = [
    ['x', 'x', 1, 2, 3, 'x', 'x'],
    ['x', 'x', 4, 5, 6, 'x', 'x'],
    ['x', 'x', 7, 8, 9, 'x', 'x']
];
// Extraktion der Nutzdaten
foreach ($data as $row) {
    echo implode(", ", array_slice($row, 2, 3)), "\n";
}
/*
1, 2, 3
4, 5, 6
7, 8, 9
*/