<?php

$a = 4;     // int
$b = 2;     // int
$c = 4.0;   // float

// ==
if ($a == $c) {
    echo "a == c\n";
} else {
    echo "a != c\n";
}

// ===
if ($a === $c) {
    echo "a == c\n";
} else {
    echo "a != c\n";
}

// >
if ($a > $c) {
    echo "a > c\n";
} else {
    echo "a <= c\n";
}

// <=>
switch ($a <=> $b) {
    case -1:
        echo "a < b\n";
        break;
    case 1:
        echo "a > b\n";
        break;
    case 0:
        echo "a == b\n";
        break;
}