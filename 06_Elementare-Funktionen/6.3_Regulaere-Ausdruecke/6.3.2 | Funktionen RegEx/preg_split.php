<?php

$data = "Ein Satz, der in seine Worte zerfällt: dank RegEx!";
$regex = '/([ ,\.:;!\?])/';

var_dump(preg_split($regex, $data));
/*
array(12) {
    [0]=>
  string(3) "Ein"
    [1]=>
  string(4) "Satz"
    [2]=>
  string(0) ""
    [3]=>
  string(3) "der"
    [4]=>
  string(2) "in"
    [5]=>
  string(5) "seine"
    [6]=>
  string(5) "Worte"
    [7]=>
  string(9) "zerfällt"
    [8]=>
  string(0) ""
    [9]=>
  string(4) "dank"
    [10]=>
  string(5) "RegEx"
    [11]=>
  string(0) ""
}
*/

var_dump(preg_split($regex, $data, -1, PREG_SPLIT_NO_EMPTY));
/*
array(9) {
    [0]=>
  string(3) "Ein"
    [1]=>
  string(4) "Satz"
    [2]=>
  string(3) "der"
    [3]=>
  string(2) "in"
    [4]=>
  string(5) "seine"
    [5]=>
  string(5) "Worte"
    [6]=>
  string(9) "zerfällt"
    [7]=>
  string(4) "dank"
    [8]=>
  string(5) "RegEx"
}
*/


var_dump(preg_split($regex, $data, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_OFFSET_CAPTURE));
/*
array(9) {
  [0]=>
  array(2) {
    [0]=>
    string(3) "Ein"
    [1]=>
    int(0)
  }
  [1]=>
  array(2) {
    [0]=>
    string(4) "Satz"
    [1]=>
    int(4)
  }
  [2]=>
  array(2) {
    [0]=>
    string(3) "der"
    [1]=>
    int(10)
  }
  [3]=>
  array(2) {
    [0]=>
    string(2) "in"
    [1]=>
    int(14)
  }
  [4]=>
  array(2) {
    [0]=>
    string(5) "seine"
    [1]=>
    int(17)
  }
  [5]=>
  array(2) {
    [0]=>
    string(5) "Worte"
    [1]=>
    int(23)
  }
  [6]=>
  array(2) {
    [0]=>
    string(9) "zerfällt"
    [1]=>
    int(29)
  }
  [7]=>
  array(2) {
    [0]=>
    string(4) "dank"
    [1]=>
    int(40)
  }
  [8]=>
  array(2) {
    [0]=>
    string(5) "RegEx"
    [1]=>
    int(45)
  }
}
*/