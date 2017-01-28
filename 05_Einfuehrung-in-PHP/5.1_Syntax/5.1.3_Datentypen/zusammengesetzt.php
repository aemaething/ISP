<?php

// Deklaration ab PHP 5.4
$a = [];
// alte Variante
$b = array();

// automatisch gepflegter, numerischer Index
$a[] = "Ein Wert";
$a[] = "Ein weiterer Wert";
print_r($a);
/*
Array
(
    [0] => Ein Wert
    [1] => Ein weiterer Wert
)
*/

// Ausgabe eines einzelnen Wertes
echo $a[1], "\n";
// Ein weiterer Wert

// der numerische Index kann auch manuell gesetzt werden
$a[10] = "Noch ein Wert";
print_r($a);
/*
Array
(
    [0] => Ein Wert
    [1] => Ein weiterer Wert
    [10] => Noch ein Wert
)
*/

// mit Hilfe der Funktion unset() lassen sich Elemente entfernen
unset($a[10]);
print_r($a);
/*
Array
(
    [0] => Ein Wert
    [1] => Ein weiterer Wert
)
*/



// nicht numerische Schlüssel
$b["zip"] = 20099;
$b["city"] = "Hamburg";
print_r($b);
/*
Array
(
    [zip] => 20099
    [city] => Hamburg
)
*/

// können mit numerischen gemischt werden
$b[5] = "Numerischer Index";
print_r($b);
/*
Array
(
    [zip] => 20099
    [city] => Hamburg
    [5] => Numerischer Index
)
*/



// Arrays könnenn auch zur Erzeugung befüllt werden
$c = [1, 2, 3];
print_r($c);
/*
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
)
*/

$c = ["zip" => 20099, "city" => "Hamburg"];
print_r($c);
/*
Array
(
    [zip] => 20099
    [city] => Hamburg
)
*/


// mehrdimensionale Arrays
$mda = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
print_r($mda);
/*
Array
(
    [0] => Array
    (
        [0] => 1
        [1] => 2
        [2] => 3
    )
    [1] => Array
    (
        [0] => 4
        [1] => 5
        [2] => 6
    )
    [2] => Array
    (
        [0] => 7
        [1] => 8
        [2] => 9
    )
)
*/

// Einzelausgabe
echo $mda[1][1], "\n";
// 5