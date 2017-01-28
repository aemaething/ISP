<?php

$a = 4;
$b = 2;

// NEGATION
$c = ~$b;
echo $c, "\n";
// -3

// AND
$c = $a & $b;
echo $c, "\n";
// 0

// OR
$c = $a | $b;
echo $c, "\n";
// 6

// XOR
$c = $a ^ $b;
echo $c, "\n";
// 6

// Left-Shift
$c = $a << $b;
echo $c, "\n";
// 16

// Right-Shift
$c = $a >> $b;
echo $c, "\n";
// 1