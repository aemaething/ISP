<?php

$regex = "/ein( php)* test/";

var_dump(preg_match($regex, "ein php test"));
// int(1)

var_dump(preg_match($regex, "ein php php test"));
// int(1)

var_dump(preg_match($regex, "ein test"));
// int(1)