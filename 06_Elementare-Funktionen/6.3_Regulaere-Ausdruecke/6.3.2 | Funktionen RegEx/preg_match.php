<?php

$data = "Dies ist ein langer Text. Ob wohl das Wort Katze darin vorkommt?";
$regex = "/katze/i";

$success = preg_match($regex, $data);
if ($success) {
    echo "'Katze' steckt in den Daten!\n\n";
    // 'Katze' steckt in den Daten!
}


$results = [];
$data = "Es wurden 10 kg Bananen, 3 kg Apfelsinen und 14 kg Mango geerntet.";
$regex = '/(\d+ kg) ([a-z]+)/i';

if (preg_match($regex, $data, $results)) {
    echo "Suche ohne Flag:\n";
    var_dump($results);
    echo "\n";
    /*
    Suche ohne Flag:
    array(3) {
        [0]=>
            string(13) "10 kg Bananen"
        [1]=>
            string(5) "10 kg"
        [2]=>
            string(7) "Bananen"
    }
    */
}

if (preg_match($regex, $data, $results, PREG_OFFSET_CAPTURE)) {
    echo "Suche mit Flag:\n";
    var_dump($results);
    echo "\n";
    /*
    Suche mit Flag:
    array (3) {
        [0]=>
            array (2) {
                [0]=>
                    string(13) "10 kg Bananen"
                [1]=>
                    int(10)
            }
        [1]=>
            array (2) {
                [0]=>
                    string(5) "10 kg"
                [1]=>
                    int(10)
            }
        [2]=>
            array (2) {
                [0]=>
                    string(7) "Bananen"
                [1]=>
                    int(16)
            }
        }
    */
}
