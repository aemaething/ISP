<?php


// instanceof
$dt = new \DateTime("now");
if ($dt instanceof \DateTime) {
    echo "dt ist eine Instanz der Klasse DateTime\n";
} else {
    echo "die Klasse von dt ist unbekannt\n";
}
// dt ist eine Instanz der Klasse DateTime


// cast
$aInt = 3;
var_dump($aInt);
// int(3)

// case int => float
$aFloat = (float) $aInt;
var_dump($aFloat);
// float(3)

// cast int => string
$aString = (string) $aInt;
var_dump($aString);
// string(1) "3"

// cast float => int
$lossFloat = 3.3;
var_dump($lossFloat);
// float(3.3)


$lossInt = (int) $lossFloat;   // hier wird aus der 3.3 eine 3 
var_dump($lossInt);            // => Datenverlust!!
// int(3)