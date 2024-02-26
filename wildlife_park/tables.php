<?php
    require_once "connections.php";

    $drop_query = "DROP TABLE IF EXISTS cats";
    $result = $connection->query($drop_query);

    $query = "CREATE TABLE cats (
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        family VARCHAR(32) NOT NULL,
        name VARCHAR(32) NOT NULL,
        age TINYINT UNSIGNED NOT NULL
        
    )";

    $result = $connection->query($query);

    if (!$result){
        die ("Database access failed: " . $connection->error);
    } else {
        echo "Table cats successfully created.";
    }

$connection->close();
