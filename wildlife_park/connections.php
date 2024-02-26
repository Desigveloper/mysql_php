<?php
    require_once "login.php";

    //Connect to server
    $connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);

    // Check connections
    if ($connection->connect_error) {
        die ("Connection to MySQL failed: " . $connection->connect_error);
    }

