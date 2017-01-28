<?php

$cnt = 3;
$result = sprintf("Es wurden %d Tickets verkauft.", $cnt);
echo $result;
// Es wurden 3 Tickets verkauft.

$temperature = 37.42123456;
$result = sprintf("Die Temperatur beträgt %0.2f°C.", $temperature);
echo $result;
// Die Temperatur beträgt 37.42°C.

$percentage = 33.3;
$result = sprintf("1/3 ist etwa %0.2f%%.", $percentage);
echo $result;
// 1/3 ist etwa 33.30%.

$name = "Achim";
$result = sprintf("Hallo %s, wie geht's Dir?", $name);
echo $result;
// Hallo Achim, wie geht's Dir?

$r = 255;
$g = 255;
$b = 255;
$result = sprintf(
    "Weiß, rgb(%d, %d, %d), schreibt man hexadzimal so: %X%X%X.",
    $r, $g, $b, $r, $g, $b
);
echo $result;
// Weiß, rgb(255, 255, 255), schreibt man hexadezimal so: FFFFFF.