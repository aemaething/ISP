<?php

// create

try {
    /** @var PDO $dbh */
    $dbh = require_once "connection.php";

    $stmt = $dbh->prepare(
        "CREATE TABLE IF NOT EXISTS messages (
            id INTEGER PRIMARY KEY, 
            author VARCHAR(64),
            title VARCHAR(255),
            message TEXT,
            created_at TEXT)
       ");
    $stmt->execute();

    printf("Table 'messages' created\n");

} catch (PDOException $e) {
    printf("Error [%d]: %s\n", $e->getCode(), $e->getMessage());
}

