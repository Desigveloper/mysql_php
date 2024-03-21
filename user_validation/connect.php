<?php
    // Login credential
    $db_hostname = "localhost";
    $db_username = "root";
    $db_password = "root";
    $db_database = "users_db";

    //New connection
    $conn = new mysqli($db_hostname, $db_username, $db_password, $db_database);

    // Check connection
    if($conn->connect_error) {
        die("Server connection failed: " . $conn->error);
    }

    echo "connection successfull<br>";
