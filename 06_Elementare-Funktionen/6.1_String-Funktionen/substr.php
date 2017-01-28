<?php

$str = "Internetserver-Programmierung";

echo substr($str, 0, 8);    // Internet
echo substr($str, 8, 6);    // server
echo substr($str, 8, -15);  // server
echo substr($str, 1, -1);   // nternetserver-Programmierun
echo substr($str, 15, -15); // "" (leerer String)