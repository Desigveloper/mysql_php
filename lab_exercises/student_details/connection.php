<?php
    //Logins
    $server_name = "localhost";
    $db_username = "root";
    $db_password = "root";
    $db_database = "students_db";

    //Connection
    $conn = new mysqli($server_name, $db_username, $db_password, $db_database);

    //Check connection
    if($conn->connect_error) {
        die("Connection failed " . $conn->connect_error);
    }