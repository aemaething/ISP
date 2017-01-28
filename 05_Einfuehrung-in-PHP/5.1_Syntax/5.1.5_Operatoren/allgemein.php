<?php

// Zuweisung
$a = "Eine ";
$b = "Konkatenation";

// Konkatenation zweier Variablen mit Zuweisung
$c = $a . $b;
echo $c, "\n";
// Eine Konkatenation

// Konkatenation dreier statischer Zeichenketten
echo "Zwei " . "Konkatenationen" . "\n";
// Zwei Konkatenationen



// Fehler-Kontrolloperator
function divisionByZero(int $a, int $b) : float
{
    return $a / $b;
}

@divisionByZero(10, 0);
// kein Fehler - keine Ausgabe

divisionByZero(10, 0);
// PHP Warning:  Division by zero in ...



// Variadische-Funktionen-Operator
function variadicFunction(
    string $paramA, string $paramB, string ...$paramsC
) : void
{
    var_dump($paramA);
    var_dump($paramB);
    var_dump($paramsC);
}

variadicFunction("a", "b", "c", "d", "e");

/*
string(1) "a"
string(1) "b"
array(3) {
    [0]=>
  string(1) "c"
    [1]=>
  string(1) "d"
    [2]=>
  string(1) "e"
}
*/