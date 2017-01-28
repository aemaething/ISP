<?php

$a = 4;
$b = 2;
$c = null;

$d = $a > $b ? $a : $b;
echo $d, "\n";
// 4

$d = $c ?? $a;
echo $d, "\n";
// 4

$d = $b ?? $a;
echo $d, "\n";
// 2