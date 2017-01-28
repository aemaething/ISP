<?php

$data = ["firstname", "lastname", "zip", "city", "country"];
$csvData = implode(";", $data);
echo $csvData; // firstname;lastname;zip;city;country

$color = ["r" => 127, "g" => 127, "b" => 255];
printf("Color: rgb(%s)", implode(", ", $color));
// Color: rgb(127, 127, 255)