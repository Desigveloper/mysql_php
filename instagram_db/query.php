<?php
    require_once "connect.php";

    $query = "SELECT * FROM users";
    $result = $connection->query($query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "User ID: " . $row['id'] . "<br>";
            echo "Username: " . $row['username'] . "<br>";
            echo "Created At: " . $row['created_at'] . "<br>";
            echo "Followed By: " . $row['followee_id'] . "<br>";
            echo "----------------------------------" . "<br><br>";
        }
    }

    $result->close();
    $connection->close();