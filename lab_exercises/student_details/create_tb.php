<?php
    //Required file
    require_once "connection.php";

    // Select database
    $query = "USE students_db";

    // Check database selection
    if ($conn->query($query)) {
        echo "Database successfully selected<br>";
    }
    else {
        echo "Database not selected<br>";
    }
    

    //Create table
    $query = "CREATE TABLE students (
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        st_name VARCHAR(128),
        st_age VARCHAR(4),
        index_no VARCHAR(16) UNIQUE
    )";

    if ($conn->query($query)) {
        echo "Table successfully created<br>";
    }
    else {
        echo "Table not created<br>";
    }

    $conn->close();
