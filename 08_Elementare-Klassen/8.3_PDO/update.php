<?php

// update

try {
    /** @var PDO $dbh */
    $dbh = require_once "connection.php";

    $stmt = $dbh->prepare("UPDATE messages SET author = :author");
    $stmt->bindValue(":author", "Hugo Example");
    $stmt->execute();

} catch (PDOException $e) {
    printf("Error [%d]: %s\n", $e->getCode(), $e->getMessage());
}


