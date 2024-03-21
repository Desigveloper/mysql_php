<?php
    require_once "connection.php";

    $query = "SELECT * FROM students
    ORDER BY st_name, index_no";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        echo "<h2>Students Info</h2><br>";
        while($row = $result->fetch_assoc()) {
            echo "Name: " . $row['st_name'] . "<br>";
            echo "Age: " . $row['st_age'] . "<br>";
            echo "Index number: " . $row['index_no'] . "<br>";
            echo "------------------------------------------<br>";
        }
    }
    else {
        echo "0 result<br>";
    }

    $conn->close();