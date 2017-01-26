<?php

// delete

try {

    /** @var PDO $dbh */
    $dbh = require_once "connection.php";

    $stmt = $dbh->prepare("DELETE FROM messages where author LIKE :author");
    $stmt->bindValue(":author", "% Example");
    $stmt->execute();
    $rowsDeleted = $stmt->rowCount();

    printf("Es wurden %d Datensätze gelöscht!\n", $rowsDeleted);


} catch (PDOException $e) {
    printf("Error [%d]: %s\n", $e->getCode(), $e->getMessage());
}