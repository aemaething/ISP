<?php

// read

try {
    /** @var PDO $dbh */
    $dbh = require_once "connection.php";

    $stmt = $dbh->prepare("SELECT * FROM messages ORDER BY ID DESC");
    $stmt->execute();

    while (is_array($row = $stmt->fetch(PDO::FETCH_ASSOC))) {
        var_dump($row);
    }

} catch (PDOException $e) {
    printf("Error [%d]: %s\n", $e->getCode(), $e->getMessage());
}