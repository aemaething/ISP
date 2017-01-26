<?php

$ao = new ArrayObject();

$ao["foo"] = "bar";
$ao->append("Katze");


foreach ($ao as $key => $value) {
    var_dump($value);
}
// string(3) "bar"
// string(5) "Katze"


var_dump($ao->getArrayCopy());
/*
array(2) {
    ["foo"]=>
  string(3) "bar"
    [0]=>
  string(5) "Katze"
}
*/