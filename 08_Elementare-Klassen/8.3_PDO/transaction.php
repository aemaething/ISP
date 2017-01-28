<?php

// transaction

try {
    /** @var PDO $dbh */
    $dbh = require_once "connection.php";

    $dbh->beginTransaction();

    $stmt = $dbh->prepare("UPDATE messages SET author = :author");
    $stmt->bindValue(":author", "Melissa Transaction");
    $stmt->execute();

    $dbh->commit();

} catch (PDOException $e) {
    printf("Error [%d]: %s\n", $e->getCode(), $e->getMessage());

    if ($dbh->inTransaction()) {
        $dbh->rollBack();
        printf("Rollback executed!\n");
    }
}