<?php

$dt = new DateTime("now");
echo "Referenz-Zeit: ", $dt->format("d.m.Y H:i:s"), "\n";
// Referenz-Zeit: 11.01.2017 16:57:01

// Verwendung eines absoluten Wertes
$dt = new DateTime("now");
$dt->modify("2012-10-10");
echo "2012-10-10 => ", $dt->format("d.m.Y H:i:s"), "\n";
// 2012-10-10 => 10.10.2012 16:57:01


// Verwendung eines relativen Wertes
$dt = new DateTime("now");
$dt->modify("+3 weeks");
echo "+3 weeks => ", $dt->format("d.m.Y H:i:s"), "\n";
// +3 weeks => 01.02.2017 16:57:01


$dt = new DateTime("now");
$dt->modify("-23 hours -59 minutes -59 seconds");
echo "-23 hours -59 minutes -59 seconds => ", $dt->format("d.m.Y H:i:s"), "\n";
// -23 hours -59 minutes -59 seconds => 24.01.2017 20:34:05



$dt = new DateTime("now");
$ival = new DateInterval("P1D");
$dt->add($ival);
echo "P1D => ", $dt->format("d.m.Y H:i:s"), "\n";
// P1D => 12.01.2017 18:11:06