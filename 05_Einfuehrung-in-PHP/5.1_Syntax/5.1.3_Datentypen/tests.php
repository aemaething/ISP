<?php

// Boolean
$a = false;
$result = is_bool($a);
var_dump($result);
// bool(true)

// Integer
$a = 10;
$result = is_int($a);
var_dump($result);
// bool(true)

// Float
$a = 3.142;
$result = is_float($a);
var_dump($result);
// bool(true)

// String
$a = "Katze";
$result = is_string($a);
var_dump($result);
// bool(true)

// Numerisch
$a = 10;
$result = is_numeric($a);
var_dump($result);
// bool(true)

// Skalar
$result = is_scalar($a);
var_dump($result);
// bool(true)


// Array
$a = [1, 2, 3];
$result = is_array($a);
var_dump($result);
// bool(true)

// Objekt
$a = new \DateTime("now");  // die in PHP integrierte Klasse DateTime
$result = is_object($a);
var_dump($result);
// bool(true)

// Callable
$a = "is_callable"; // jeder gültige Funktionsname ist u.a. ein Callable
$result = is_callable($a);
var_dump($result);
// bool(true)


$a = null;
$result = is_null($a);
var_dump($result);
// bool(true)

$a = opendir(sys_get_temp_dir()); // öffnet das default TMP-Verzeichnis zum Lesen
$result = is_resource($a);
var_dump($result);
// bool(true)