<?php

/**
 * @param string $path
 * @return array|bool
 */
function getDataFromFile(string $path)
{
    // datei öffnen
    // datei in array einlesen
    // array zurückgeben

    // aber irgendwas geht schief, daher:
    return false;
}


$data = getDataFromFile("some/location");
if (is_array($data)) {          // der Erfolgsfall
    // some magic with data...
} else {                        // der Fehlerfall
    echo "Datei konnte nicht gelesen werden!";
}
// Datei konnte nicht gelesen werden!