<?php

// Ausgabe eines statischen Wertes
print_r("Eine Katze");
// Eine Katze


// Ausgabe eines String
$value = "Eine andere Katze!";
print_r($value);
// Eine andere Katze!


// Ausgabe einer Zahl
$number = 42;
print_r($number);
// 42


// Aussgabe eines Arrays
$data = ["zip" => 20099, "city" => "Hamburg"];
print_r($data);
/*
Array
(
    [zip] => 20099
    [city] => Hamburg
)
*/


// Ausgabe eines Objektes
$d = new \DateTime("now");
print_r($d);
/*
DateTime Object
(
    [date] => 2016-12-30 17:40:01.701793
    [timezone_type] => 3
    [timezone] => Europe/Berlin
)
*/


// hier eine Version mit Rückgabe
$value = print_r("Zur Abwechslung mal ein Hund!", true);