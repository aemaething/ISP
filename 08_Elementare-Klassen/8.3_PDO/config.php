<?php

// config.php

printf("Database file directory: %s\n", sys_get_temp_dir());

return [
    "dsn" => sprintf("sqlite:%s/ISP-Database.sq3", sys_get_temp_dir()),
    "user" => null,
    "pass" => null,
    "options" => [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
];