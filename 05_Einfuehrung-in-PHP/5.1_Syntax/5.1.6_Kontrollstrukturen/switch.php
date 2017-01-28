<?php

// einfaches numerisches Beispiel
$number = 2;

switch ($number) {
    case 1:
        echo "'number' == 1\n";
        break;
    case 2:
        echo "'number' == 2\n";
        break;
    default:
        echo "'number' ist irgendwas anderes\n";
        break;
}
// 'number' == 2

// alternative Schreibweise:
if ($number == 1) {
    echo "'number' == 1\n";
} elseif ($number == 2) {
    echo "'number' == 2\n";
} else {
    echo "'number' ist irgendwas anderes\n";
}
// 'number' == 2

// einfaches Beispiel mit Strings
// diesmal ohne default - denn default ist optional!
$month = "Februar";

switch ($month) {
    case "Januar":
        echo "Es ist Januar!\n";
        break;
    case "Februar":
        echo "Es ist Februar!\n";
        break;
    // ...
    case "Dezember":
        echo "Es ist Dezember!\n";
        break;
}
// Es ist Februar!


// nun fehlt teilweise das break - break ist optional
$number = 1;

switch ($number) {
    case 1:
    case 2:
    case 3:
        echo "'number' ist 1, 2 oder 3!\n";
        break;
    default:
        echo "'number' ist nicht 1, 2 oder 3\n";
        break;
}
// 'number' ist 1, 2 oder 3!


// nun ein kleiner 'Trick':
$expr1 = true;
$expr2 = false;
$expr3 = true;
$expr4 = false;

switch (true) { // durch das true an dieser Stelle
    // verliert der Ausdruck im switch seine Bedeutung
    case $expr1 && $expr2 || $expr3:
        echo "true == (expr1 && expr2 || expr3)\n";
        break;
    case $expr2 && $expr3;
        echo "true == (expr2 && expr3)\n";
        break;
    case $expr1 && $expr3:
        echo "true == (expr1 && expr3)\n";
        break;
    default:
        echo "default\n";
        break;
}
// true == (expr1 && expr2 || expr3)