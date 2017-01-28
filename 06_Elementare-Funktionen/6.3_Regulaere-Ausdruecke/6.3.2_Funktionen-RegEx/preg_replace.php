<?php

// Suchen und Ersetzen, jenseits von einfachen Zeichenketten
$subject = "Zuerst trank ich 1 Bier, danach 2 Bier und danach 3 Bier!";

$pattern = "/[0-9]+ Bier/";
$replace = "Apfelsaft";

echo preg_replace($pattern, $replace, $subject), "\n";
// Zuerst trank ich Apfelsaft, danach Apfelsaft und danach Apfelsaft!




// Ein Beispiel mit Rück-Referenzierung
// Der Ersatz wird dynamisch zur Laufzeit aus dem Suchergebnis erzeugt
$subject = "Das Datum 2016-12-31 wechselt das Format!";

$pattern = '/(\d{4})-(\d{2})-(\d{2})/';
$replace = '${3}.${2}.${1} (original war ${0})';

echo preg_replace($pattern, $replace, $subject), "\n";
// Das Datum 31.12.2016 (original war 2016-12-31) wechselt das Format!