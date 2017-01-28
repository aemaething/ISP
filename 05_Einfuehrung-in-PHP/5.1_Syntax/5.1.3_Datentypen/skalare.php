<?php

// boolean
$a = false;
var_dump($a);
// bool(false)


// int
$maxInt = PHP_INT_MAX;
var_dump($maxInt);
// int(9223372036854775807)
echo PHP_INT_MIN, " <= Integer <= ", PHP_INT_MAX, "\n";
// -9223372036854775808 <= Integer <= 9223372036854775807


// float | double
$pi = 3.141592653589;
var_dump($pi);
// float(3.141592653589)

$floatB = 2.51e3;   // alternative Schreibweise
var_dump($floatB);
// float(2510)

$floatC = 3E-5;     // alternative Schreibweise
var_dump($floatC);
// float(3.0E-5)


// string
$cat = "Katze";
var_dump($cat);
// string(5) "Katze"