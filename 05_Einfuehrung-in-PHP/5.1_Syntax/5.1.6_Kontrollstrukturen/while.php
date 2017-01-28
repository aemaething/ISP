<?php

// numerischer Vergleich:
// erst vergleichen, dann inkrementieren
$i = 0;
while ($i++ < 3) {
    echo "i = ", $i, "\n";
}
/*
i = 1
i = 2
i = 3
*/

// numerischer Vergleich:
// erst inkrementieren, dann vergleichen
$i = 0;
while (++$i < 3) {
    echo "i = ", $i, "\n";
}
/*
i = 1
i = 2
*/


$i = 0;
while (true) {
    $i++;
    if ($i % 2) {
        continue;
    }
    echo "i = ", $i, "\n";

    if ($i > 7) {
        break;
    }
}
/*
i = 2
i = 4
i = 6
i = 8
*/