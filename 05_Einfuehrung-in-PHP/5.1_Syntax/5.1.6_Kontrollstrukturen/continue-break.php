<?php

$i = 0;
$j = 0;
while (true) {
    $i++;
    $j++;
    while (true) {
        if ($i == 3 && $j == 3) {
            break 2;
        }
        break;
    }
    printf("i = %d, j = %d\n", $i, $j);
}

$i = 0;
while (true) {
    switch ($i) {
        case 1:
            echo "i = 1\n";
            break;
        case 2:
            echo "i = 2\n";
            break;
        case 3:
            echo "i = 3\n";
            echo "break";
            break 2;
    }
    $i++;
}
/*
i = 1
i = 2
i = 3
break
*/

$i = 0;
while (++$i <= 3) {
    if ($i == 2) {
        continue;
    }
    echo "i = ", $i, "\n";
}
/*
i = 1
i = 3
*/