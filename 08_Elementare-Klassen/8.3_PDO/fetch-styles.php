<?php

// fetch-styles

try {
    /** @var PDO $dbh */
    $dbh = require_once "connection.php";

    $stmt = $dbh->prepare("SELECT * FROM messages ORDER BY ID DESC LIMIT 1");

    // PDO::FETCH_ASSOC
    $stmt->execute();
    while (is_array($row = $stmt->fetch(PDO::FETCH_ASSOC))) {
        var_dump($row);
    }
    /*
        array(5) {
            ["id"]=>
                string(2) "10"
            ["author"]=>
                string(15) "Anthony Example"
            ["title"]=>
                string(9) "Title: 10"
            ["message"]=>
                string(11) "Message: 10"
            ["created_at"]=>
                string(19) "2017-01-23 16:25:58"
        }
    */


    echo str_repeat("=", 80), "\n";

    // PDO::FETCH_OBJ
    $stmt->execute();
    while (is_object($obj = $stmt->fetch(PDO::FETCH_OBJ))) {
        var_dump($obj);
    }
    /*
        object(stdClass)#3 (5) {
            ["id"]=>
                string(2) "10"
            ["author"]=>
                string(15) "Anthony Example"
            ["title"]=>
                string(9) "Title: 10"
            ["message"]=>
                string(11) "Message: 10"
            ["created_at"]=>
                string(19) "2017-01-23 16:25:58"
        }
    */


    echo str_repeat("=", 80), "\n";
    $stmt->execute();
    while (is_array($row = $stmt->fetch(PDO::FETCH_NUM))) {
        var_dump($row);
    }
    /*
        array(5) {
            [0]=>
                string(2) "10"
            [1]=>
                string(15) "Anthony Example"
            [2]=>
                string(9) "Title: 10"
            [3]=>
                string(11) "Message: 10"
            [4]=>
                string(19) "2017-01-23 16:25:58"
        }
    */

} catch (PDOException $e) {
    printf("Error [%d]: %s\n", $e->getCode(), $e->getMessage());
}