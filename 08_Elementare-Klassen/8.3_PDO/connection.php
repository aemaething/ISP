<?php
// connection.php

$config = require_once "config.php";

$dbh = new PDO($config["dsn"], $config["user"], $config["pass"], $config["options"]);
printf("Connection established!\n");

return $dbh;