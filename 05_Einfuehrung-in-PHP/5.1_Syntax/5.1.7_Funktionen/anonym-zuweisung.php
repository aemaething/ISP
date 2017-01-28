<?php
$factor = 3;

// Mathematische Funktion: addieren
// inkl. Multiplikation mit einem globalen Faktor
$add = function (int $a, int $b) use ($factor) : int
{
    return $factor * ($a + $b);
};


// Mathematische Funktion: subtrahieren
// inkl. Multiplikation mit einem globalen Faktor
$sub = function (int $a, int $b) use ($factor) : int
{
    return $factor * ($a - $b);
};


// ein willkürlicher 'Check', ob die Daten
// spezifische Kriterien erfüllen
$checkOne = function (int $a, int $b) : bool
{
    return ($a > $b && $b != 0);
};


// ausführende Funktion
function mathOperation(int $a, int $b, callable $check, callable $callback)
{
    if ($check($a, $b)) {
        return $callback($a, $b);
    }

    return null;
}

var_dump(mathOperation(4, 2, $checkOne, $add));
// int(18)

var_dump(mathOperation(4, 2, $checkOne, $sub));
// int(6)

var_dump(mathOperation(2, 4, $checkOne, $add));
// NULL