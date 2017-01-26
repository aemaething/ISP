<?php

// insert

try {
    /** @var PDO $dbh */
    $dbh = require_once "connection.php";

    $ids = [];

    $stmt = $dbh->prepare("INSERT INTO messages 
                                  (author, title, message, created_at) 
                           VALUES (:author, :title, :message, :created_at)");

    for ($i = 1; $i <= 10; $i++) {
        $stmt->execute([
            ":author" => "Anthony Example",
            ":title" => sprintf("Title: %d", $i),
            ":message" => sprintf("Message: %d", $i),
            ":created_at" => (new DateTime())->format("Y-m-d H:i:s")
        ]);

        $ids[] = $dbh->lastInsertId();
    }

    printf("Data inserted, IDs: [%s]\n", implode(", ", $ids));

} catch (PDOException $e) {
    printf("Error [%d]: %s\n", $e->getCode(), $e->getMessage());
}