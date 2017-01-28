<?php

$a = true;
$b = false;
$c = true;
$d = false;

// AND
var_dump($a && $b);
// bool(false)

if ($a && $c) {
    echo "a und c sind logisch UND: wahr!\n";
}
// a und c sind logisch UND: wahr!


// OR
var_dump($a || $b);
// bool(true)

if ($a || $b) {
    echo "a und b sind logisch ODER: wahr!\n";
}
// a oder b sind logisch UND: wahr!


// XOR
var_dump($a xor $b);
// bool(true)

if ($a xor $b) {
    echo "a und b sind logisch ODER: wahr!\n";
}
// a oder b sind logisch XOR: wahr!


// !
var_dump(! $a);
// bool(false)

if (!$b && !$d) {
    echo "!a und !d sind logisch UND: wahr!\n";
} else {
    echo "!a und !d sind logisch UND: falsch!\n";
}
// !a und !d sind logisch UND: wahr!