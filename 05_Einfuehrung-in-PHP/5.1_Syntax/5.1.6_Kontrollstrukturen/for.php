<?php

// mehrfache Ausführung von Code
for ($i=0; $i<3 ; $i++) {
    echo "i hat den Wert: ", $i, "\n";
}
/*
i hat den Wert: 0
i hat den Wert: 1
i hat den Wert: 2
*/

// Iterieren durch ein Array
$data = ["a", "b", "c"];
for ($i=0; $i<count($data); $i++) {
    printf("data[%d] hat den Wert: %s\n", $i, $data[$i]);
}
/*
data[0] hat den Wert: a
data[1] hat den Wert: b
data[2] hat den Wert: c
*/

// mehrfache Ausführung von Code,
// vorzeitiger Abbruch
for ($i=0; $i<3 ; $i++) {
    echo "i hat den Wert: ", $i, "\n";

    if ($i == 1) {
        echo "break\n";
        break;
    }
}
/*
i hat den Wert: 0
i hat den Wert: 1
break
*/

// Dekrementieren geht auch.
for ($i=3; $i>0; $i--) {
    echo "i hat den Wert: ", $i, "\n";
}
/*
i hat den Wert: 3
i hat den Wert: 2
i hat den Wert: 1
*/