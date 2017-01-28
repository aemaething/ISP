<?php

/**
 * Rückgabe eines null.
 * @return null
 */
function doSomethingReturnNull()
{
    return null;
}
var_dump(doSomethingReturnNull());
// NULL


/**
 * Rückgabe eines Strings.
 * @return string
 */
function doSomethingReturnString()
{
    return "Katze";
}
var_dump(doSomethingReturnString());
// string(5) "Katze"


/**
 * Rückgabe des Wertes einer Variablen.
 * @return int
 */
function doSomeThingReturnVariable()
{
    $a = 17;

    return $a;
}
var_dump(doSomeThingReturnVariable());
// int(17)


/**
 * Implizit wird hier null zurückgegeben.
 */
function doSomethingReturnImplicitNull()
{
    // some magic happens
}
// Die IDE beschwert sich ggf. aber in PHP ist das gültig.
var_dump(doSomethingReturnImplicitNull());
// NULL


/**
 * Auch so kommt implizit ein null zurück.
 */
function doSomethingReturnImplicitNullTwo()
{
    return;
}
// Die IDE beschwert sich ggf. aber in PHP ist das gültig.
var_dump(doSomethingReturnImplicitNullTwo());
// NULL


/**
 * Typisierter Parameter und Rückgabewert.
 * @param int $a
 * @return int
 */
function doSomethingWithTypeHints(int $a) : int
{
    return $a + 1;
}
var_dump(doSomethingWithTypeHints(1));
// int(2)


/**
 * Kein Rückgabewert.
 */
function doSomethingWithoutReturnValue() : void
{
    // some magic happens
}
// var_dump() funktioniert hier nicht, wegen void!