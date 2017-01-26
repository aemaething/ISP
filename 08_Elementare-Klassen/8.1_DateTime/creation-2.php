<?php

$dt = DateTime::createFromFormat("d-M-Y", "11-Jan-2017");
echo "'j-M-Y', '11-Jan-2017' => ", $dt->format("d.m.Y H:i:s"), "\n";
// 'j-M-Y', '11-Jan-2017' => 11.01.2017 13:32:48


$dt = DateTime::createFromFormat("Y-m-d H:i:s", "2017-01-11 11:12:13");
echo "'Y-m-d H:i:s', '11-Jan-2017 11:12:13' => ", $dt->format("d.m.Y H:i:s"), "\n";
// 'Y-m-d H:i:s', '11-Jan-2017 11:12:13' => 11.01.2017 11:12:13


$dt = DateTime::createFromFormat("Y z", "2015 200");
echo "'Y z', '2015 200' => ", $dt->format("d.m.Y H:i:s"), "\n";
// 'Y-m-d H:i:s', '2015 200' => 20.07.2015 13:34:58