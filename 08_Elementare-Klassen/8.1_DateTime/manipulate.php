<?php

// Referenz Zeit
$dt = new DateTime("now");
echo "Referenz-Zeit: ", $dt->format("d.m.Y H:i:s"), "\n";
// Referenz-Zeit: 12.01.2017 11:19:42

// setzen des Datums
$dt->setDate(2010, 10, 31);
echo "setDate(2010, 10, 31) => ", $dt->format("d.m.Y H:i:s"), "\n";
// setDate(2010, 10, 31) => 31.10.2010 11:19:42






// Referenz Zeit
$dt = new DateTime("now");
echo "Referenz-Zeit: ", $dt->format("d.m.Y H:i:s"), "\n";
// Referenz-Zeit: 12.01.2017 11:34:41

$dt->setISODate(2017, 2, 1);
echo "setISODate(2017, 2, 1) => ", $dt->format("d.m.Y H:i:s"), "\n";
// setISODate(2017, 2, 1) => 09.01.2017 11:35:46







// Referenz Zeit
$dt = new DateTime("now");
echo "Referenz-Zeit: ", $dt->format("d.m.Y H:i:s"), "\n";
// Referenz-Zeit: 12.01.2017 12:13:38

$dt->setTimezone(new DateTimeZone("EST"));
echo "setTimezone(EST) => ", $dt->format("d.m.Y H:i:s"), "\n";
// setTimezone(EST) => 12.01.2017 06:13:38