<?php
    require_once "login.php";

    // Connect to MySQL server
    $connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);

    //Check connection
    if ($connection->connect_error) die ($connection->connect_error);

    // Execute query
    $query = "SELECT * FROM series";
    $result = $connection->query($query);

    if (!$result) die ($connection->connect_error);

    $row = $result->num_rows;

     if ($row > 0) {
        while ($row = $result->fetch_assoc())
        {
            echo "ShowId: " . $row['id'] . "<br>";
            echo "Title: " . $row['title'] . "<br>";
            echo "Released year: " . $row['released_year'] . "<br>";
            echo "genre: " . $row['genre'] . "<br>";
            echo "----------------------------------------<br>";
        }
     } else {
        echo "0 results";
     }

     $result->close();
     $connection->close();