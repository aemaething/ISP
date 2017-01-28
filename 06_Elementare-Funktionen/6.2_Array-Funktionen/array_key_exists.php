<?php

$data = ["email" => "john@doe.com", "name" => "john", "country" => "USA"];
if (array_key_exists("email", $data)) {
    echo "key 'email' found: ", $data["email"];
} else {
    echo "key 'email not found";
}
// key 'email' found: john@doe.com

if (array_key_exists("zip", $data)) {
    echo "key 'zip' found: ", $data["email"];
} else {
    echo "key 'zip' not found";
}
// key 'zip not found


$letters = ["a", "b", "c"];
var_dump(array_key_exists(0, $letters));
// bool(true)