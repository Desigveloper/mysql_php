<?php
    require_once "connections.php";

    $query = "INSERT INTO cats(family, name, age) VALUES
        ('Lion', 'Leo', 4),
        ('Cougar', 'Growler', 2),
        ('Cheetah', 'Charly', 3)";
    $result = $connection->query($query);

    if (! $result) {
        die ("Databaase access failed " . $connection->error);
    }

    $connection->close();