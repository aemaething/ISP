<?php

$data1 = ["hierbei", "handelt", "es", "sich", "um", "dummy-daten"];
$data2 = ["zip" => 20099, "city" => "Hamburg", "country" => "Germany"];


// einfache Iteration
foreach ($data1 as $value) {
    echo $value, "\n";
}
/*
hierbei
handelt
es
sich
um
dummy-daten
*/

// Iteration mit key und value
foreach ($data2 as $key => $value) {
    echo $key, " => ", $value, "\n";
}
/*
zip => 20099
city => Hamburg
country => Germany
*/

// Iteration mit key und einer Referenz auf value
foreach ($data2 as $key => &$value) {
    if ($key == "zip") {
        $value = "12345"; // Änderung der PLZ
    }
}
unset($value);
print_r($data2); // Kontrollausgabe
/*
Array
(
    [zip] => 12345
    [city] => Hamnburg
    [country] => Germany
)
*/