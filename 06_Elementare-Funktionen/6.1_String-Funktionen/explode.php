<?php

$csvData = "firstname;lastname;zip;city;country";
$data = explode(";", $csvData);
print_r($data);
/*
Array
(
    [0] => firstname
    [1] => lastname
    [2] => zip
    [3] => city
    [4] => country
)
*/

$str = "1,2,3,4,5,6,7,8,9,0";
$data = explode(",", $str, 5);
/*
print_r($data);
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5,6,7,8,9,0
)
*/

print_r(explode(",", $str, -4));
/*
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
    [5] => 6
)
*/