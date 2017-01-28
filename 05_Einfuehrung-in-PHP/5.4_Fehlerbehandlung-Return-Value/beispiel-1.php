<?php

function isEven($number)
{
    if (! is_int($number)) {
        return null;
    }

    if ($number % 2 == 0) {
        return true;
    } else {
        return false;
    }
}

$r = isEven(1);
var_dump($r);

$r = isEven(2);
var_dump($r);

$r = isEven("Katze");
var_dump($r);


$value = "Katze";
if (null === isEven($value)) {
    printf("Ein Fehler ist aufgetreten!");
} else {
    printf("%d ist %seine gerade Zahl!", $value, isEven($value) ? "k" : "");
}