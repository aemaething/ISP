<?php

$data = "Die Hund jagt hinter der Maus hinterher!";
$search = "Hund";
$replace = "Katze";

$result = str_replace($search, $replace, $data);
printf("Ergebnis: %s\n", $result);
// Ergebnis: Die Katze jagt hinter der Maus hinterher!




$data = "Drei Chinesen mit dem Kontrabass, saßen auf der Straße und erzählten sich was.";
$search = ["a", "e", "i", "o", "u"];
$replace = $search;

foreach ($replace as $char) {
    printf("[%s]\t%s\n", $char, str_replace($search, $char, $data));
}
/*
[a]	Draa Chanasan mat dam Kantrabass, saßan aaf dar Straßa and arzähltan sach was.
[e]	Dree Chenesen met dem Kentrebess, seßen eef der Streße end erzählten sech wes.
[i]	Drii Chinisin mit dim Kintribiss, sißin iif dir Strißi ind irzähltin sich wis.
[o]	Droo Chonoson mot dom Kontroboss, soßon oof dor Stroßo ond orzählton soch wos.
[u]	Druu Chunusun mut dum Kuntrubuss, sußun uuf dur Strußu und urzähltun such wus.
*/



$data = "1 Apfel, 2 Birnen, 3 Pflaumen, 4 Kirschen, 5 Rosinen";
$search = ["1", "2", "3", "4", "5"];
$replace = ["ein", "zwei", "drei", "vier", "fünf"];
$count = 0;
printf("Ergebnis: %s,\nDas sind %d Ersetzungen", str_replace($search, $replace, $data, $count), $count);
// Ergebnis: ein Apfel, zwei Birnen, drei Pflaumen, vier Kirschen, fünf Rosinen,
// Das sind 5 Ersetzungen

