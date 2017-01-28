<?php

$b = 2;

// Addition
$a = 4;
$a += $b;
echo $a, "\n";
// 6

// Subtraktion
$a = 4;
$a -= $b;
echo $a, "\n";
// 2

// Multiplikation
$a = 4;
$a *= $b;
echo $a, "\n";
// 8

// Division
$a = 4;
$a /= $b;
echo $a, "\n";
// 2

// Potenzierung
$a = 4;
$a **= $b;
echo $a, "\n";
// 16

// Modulo
$a = 4;
$a %= $b;
echo $a, "\n";
// 0

// Konkatenation
// Achtung: implizierter Cast von int => string
$a = 4;
$a .= $b;
echo $a, "\n";
// 42

// Bitweise-AND
$a = 4;
$a &= $b;
echo $a, "\n";
// 0

// Bitweise-OR
$a = 4;
$a |= $b;
echo $a, "\n";
// 6

// Bitweise-XOR
$a = 4;
$a ^= $b;
echo $a, "\n";
// 6

// Left-Shift
$a = 4;
$a <<= $b;
echo $a, "\n";
// 16

// Right-Shift
$a = 4;
$a >>= $b;
echo $a, "\n";
// 1