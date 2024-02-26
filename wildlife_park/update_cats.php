<?php
    require_once "connections.php";

    // Update data
    $query = "UPDATE cats SET name='Charlie' WHERE name='Charly'";
    $result = $connection->query($query);

    if (!$result)
        die ("Database access failed " . $connection->error);