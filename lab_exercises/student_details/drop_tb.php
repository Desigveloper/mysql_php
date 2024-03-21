<?php
require_once "connection.php";

// DROP TABLE if exists in database
$query = "DROP TABLE students";

// Check database selection
if ($conn->query($query)) {
    echo "Table successfully deleted<br>";
}
else {
    echo "Table does not exist<br>";
}