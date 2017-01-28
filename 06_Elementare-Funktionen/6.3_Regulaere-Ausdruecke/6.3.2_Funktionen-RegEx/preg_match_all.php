<?php

$results = [];
$data = "Es wurden 10 kg Bananen, 3 kg Apfelsinen und 14 kg Mango geerntet.";
$regex = '/(\d+ kg) ([a-z]+)/i';


if (preg_match_all($regex, $data, $results, PREG_PATTERN_ORDER)) {
    echo "Pattern order:\n";
    var_dump($results);
    echo "\n";
    /*
    Pattern order:
    array (3) {
        [0]=>
            array (3) {
                [0]=>
                    string(13) "10 kg Bananen"
                [1]=>
                    string(15) "3 kg Apfelsinen"
                [2]=>
                    string(11) "14 kg Mango"
        }
        [1]=>
            array (3) {
                [0]=>
                    string(5) "10 kg"
                [1]=>
                    string(4) "3 kg"
                [2]=>
                    string(5) "14 kg"
            }
        [2]=>
            array (3) {
                [0]=>
                    string(7) "Bananen"
                [1]=>
                    string(10) "Apfelsinen"
                [2]=>
                    string(5) "Mango"
            }
        }
    */
}

if (preg_match_all($regex, $data, $results, PREG_SET_ORDER)) {
    echo "Set order:\n";
    var_dump($results);
    echo "\n";
    /*
    Set order:
    array (3) {
        [0]=>
            array (3) {
                [0]=>
                    string(13) "10 kg Bananen"
                [1]=>
                    string(5) "10 kg"
                [2]=>
                    string(7) "Bananen"
            }
        [1]=>
            array (3) {
                [0]=>
                    string(15) "3 kg Apfelsinen"
                [1]=>
                    string(4) "3 kg"
                [2]=>
                    string(10) "Apfelsinen"
            }
        [2]=>
            array (3) {
                [0]=>
                    string(11) "14 kg Mango"
                [1]=>
                    string(5) "14 kg"
                [2]=>
                    string(5) "Mango"
            }
        }
    */
}
