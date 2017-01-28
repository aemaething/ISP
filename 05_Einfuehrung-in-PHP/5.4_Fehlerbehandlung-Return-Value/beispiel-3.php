<?php

// PHP 7.1 Alternative
// Der Datentyp des Rückgabewerts ist mit einen ? prefixt.
// Dies bedeutet, dass anstelle eines int auch ein null
// zurückgeliefert werden kann.
function someFunction(int $a, int $b) : ?int
{
    // some magic
    // Im Fehlerfall geben wir hier ein null zurück
    return null; // simulierter Fehler
}

if (is_null($result = someFunction(3, 4))) {
    echo "Ein Fehler!";
} else {
    echo "Ergebnis: ", $result, "\n";
}
// Ein Fehler!