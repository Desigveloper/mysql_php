<?php
    require_once "server_conn.php";

    // Longer version of fetching data

    // $query = "SELECT * FROM customers";
    // $result = $db_server->query($query);

    // if (!$result) {
    //     die("Database access failed ". $db_server->connect_error);
    // }

    // if ($result->num_rows > 0) {
    //     while ($row = $result->fetch_assoc()) {
    //         echo "$row[name] purchesed ISBN $row[isbn]:<br>";

    //         $subquery = "SELECT * FROM classics WHERE isbn = '$row[isbn]'";
    //         $subresult = $db_server->query($subquery);

    //         if (!$subresult) {
    //             die("Database access failed ". $db_server->connect_error);
    //         }

    //         if ($subresult->num_rows > 0) {
    //             while ($subrow = $subresult->fetch_assoc()) {
    //                 echo "   '$subrow[title]' by $subrow[author]<br>";
    //             }
    //         }
    //     }
    // } else {
    //    echo "0 results";
    // }

    // Alternative shorter version of fetching data
    $query = "SELECT name, isbn, title, author FROM customers NATURAL JOIN classics";
    $result = $db_server->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "$row[name] purchesed ISBN $row[isibn]:<br>";
            echo "   '$row[title]' by $row[author]<br>";
            echo "-----------------------------------------------------------<br>";
        }
    } else {
        echo "0 results";
    }

    // Close connection
    $db_server->close();
