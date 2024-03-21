<?php
// Include file
require_once "connection.php";

// Create database
$query = "CREATE DATABASE students_db";

if (mysqli_query($conn, $query)) {
    echo "Database created successfully<br>";
}
else {
    echo "Database not created<br>";
}

$conn->close();