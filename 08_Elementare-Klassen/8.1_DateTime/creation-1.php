<?php

// aktueller Zeitstempel, zum Zeitpunkt der Initialisierung
echo "Jetzt ist es:\n";
// Jetzt ist es:

$dt = new DateTime("now");
echo "now => ", $dt->format("d.m.Y H:i:s"), "\n";
// now => 11.01.2017 12:25:38



// Datums-Formate
echo "\n\nDatums-Formate:\n";
// Datums-Formate:

$dt = new DateTime("2010-01-31");
echo "2010-01-31 => ", $dt->format("d.m.Y H:i:s"), "\n";
// 2010-01-31 => 31.01.2010 00:00:00

$dt = new DateTime("Mar-15-2013");
echo "Mar-15-2013 => ", $dt->format("d.m.Y H:i:s"), "\n";
// Mar-15-2013 => 15.03.2013 00:00:00

$dt = new DateTime("2017");
echo "2017 => ", $dt->format("d.m.Y H:i:s"), "\n";
// 2017 => 11.01.2017 20:17:00

$dt = new DateTime("2017 JUN");
echo "2017 JUN => ", $dt->format("d.m.Y H:i:s"), "\n";
// 2017 JUN => 01.06.2017 00:00:00


// Zeit-Formate
echo "\n\nZeit-Formate:\n";
// Zeit-Formate:

$dt = new DateTime("11:11:11.11");
echo "11:11:11.11 => ", $dt->format("d.m.Y H:i:s,u"), "\n";
// 11:11:11.11 => 11.01.2017 11:11:11,110000

$dt = new DateTime("14:00 Europe/Berlin"); // Eastern Standard Time
echo "14:00 Europe/Berlin => ", $dt->format("d.m.Y H:i:s"), "\n";
// 14:00 Europe/Berlin => 11.01.2017 14:00:00

$dt = new DateTime("2pm");
echo "2pm => ", $dt->format("d.m.Y H:i:s"), "\n";
// 2pm => 11.01.2017 14:00:00


// Zusammengesetzte Formate
echo "\n\nZusammengesetzte Formate:\n";
// Zusammengesetzte Formate;

$dt = new DateTime("1999-12-31 23:59:59");
echo "1999-12-31 23:59:59 => ", $dt->format("d.m.Y H:i:s"), "\n";
// 1999-12-31 23:59:59 => 31.12.1999 23:59:59

$dt = new DateTime("14/Feb/2012:23:25:56 +0600");
echo "14/Feb/2012:23:25:56 +0600 => ", $dt->format("d.m.Y H:i:s"), "\n";
// 14/Feb/2012:23:25:56 +0600 => 14.02.2012 23:25:56



// Relative Formate
echo "\n\nRelative Formate:\n";
// Relative Formate:

$dt = new DateTime("yesterday 10:00");
echo "yesterday 10:00 => ", $dt->format("d.m.Y H:i:s"), "\n";
// 10.01.2017 10:00:00

$dt = new DateTime("now - 3 weeks");
echo "now - 3 weeks => ", $dt->format("d.m.Y H:i:s"), "\n";
// now - 3 weeks => 21.12.2016 12:36:07

$dt = new DateTime("next Sunday 12:00");
echo "next Sunday 12:00 => ", $dt->format("d.m.Y H:i:s"), "\n";
// next Sunday => 15.01.2017 12:00:00

$dt = new DateTime("First Sunday May 2017");
echo "First Sunday May 2017 => ", $dt->format("d.m.Y H:i:s"), "\n";


// Timestamp
$dt = new DateTime("@".time());
echo "time() => ", $dt->format("d.m.Y H:i:s"), "\n";