<?php

$data = ["email" => "john@doe.com", "name" => "John Doe", "age" => 37, "junk" => 0.0];

if (in_array("John Doe", $data)) {
	echo "'John Doe' found in array!\n";
}

if (in_array(0, $data)) {
	echo "0 found in array, NOT strict!\n";
}

if (in_array(0, $data, true)) {
	echo "0 found in array, strict!\n";
} else {
	echo "0 found NOT in array, strict!\n";
}