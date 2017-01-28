<?php

$i = 3;
do {
    echo "i = ", $i--, "\n";
} while ($i > 0);
/*
i = 3
i = 2
i = 1
*/

$i = -5;
do {
    echo "i = ", $i--, "\n";
} while ($i > 0);
// i = -5