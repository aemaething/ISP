<?php

// Ausgabe eines Int
$val = 42;
var_dump($val);
// int(42)

// Ausgabe eines Float
$val = 3.142;
var_dump($val);
// float(3.142)

// Ausgabe mehrerer Ausdrücke
var_dump("Eine", "Katze");
// string(4) "Eine"
// string(5) "Katze"

// Ausgabe eines Array
var_dump(["nun", "ein", "Array"]);
/*
array(3) {
    [0]=>
  string(3) "nun"
    [1]=>
  string(3) "ein"
    [2]=>
  string(5) "Array"
}
*/

// Abschliessend ein Objekt
$d = new \DateTime("now");
var_dump($d);
/*
object(DateTime)#1 (3) {
["date"]=>
  string(26) "2016-12-30 19:11:23.077576"
["timezone_type"]=>
  int(3)
  ["timezone"]=>
  string(13) "Europe/Berlin"
}
*/