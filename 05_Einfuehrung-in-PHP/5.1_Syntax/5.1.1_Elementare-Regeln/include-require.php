<?php

$config = require "lib/config.php";
var_dump($config);

/*
array(2) {
    ["username"]=>
  string(7) "example"
    ["password"]=>
  string(10) "top-secret"
}
*/

require_once "lib/math-funcs.php";
var_dump(add(3, 8));
// int(11)