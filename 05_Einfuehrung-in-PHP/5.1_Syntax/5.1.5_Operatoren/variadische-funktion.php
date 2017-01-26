<?php

function variadicFunction(string $paramA, string $paramB, string ...$paramsC) : void
{
    var_dump($paramA);
    var_dump($paramB);
    var_dump($paramsC);
}

variadicFunction("a", "b", "c", "d", "e");

/*
string(1) "a"
string(1) "b"
array(3) {
    [0]=>
  string(1) "c"
    [1]=>
  string(1) "d"
    [2]=>
  string(1) "e"
}
*/