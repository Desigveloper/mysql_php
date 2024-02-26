<?php
require_once "query.php";

//Fetch data
if ($result->num_rows > 0) {
    echo "<h2>Publisher's info</h2>" . "<br>";
    while ($row = $result->fetch_assoc()) {
        echo "ISBN: " . $row['isbn'] . "<br>";
        echo "Author: " . $row['author'] . "<br>";
        echo "Title: " . $row['title'] . "<br>";
        echo "Category: " . $row['category'] . "<br>";
        echo "Year: " . $row['year'] . "<br>";
        echo "----------------------------------" . "<br>";
    }
} 
else {
    echo "0 results";
}

/*
    This version using the for-loop iterates beyong the expected data
*/

// $row = mysqli_num_rows($result);

// if ($result->num_rows > 0) {
//    for ( $i = 0; $i < $row; ++$i ) {
//         $row = mysqli_fetch_row($result);
    
//         echo 'Author: ' . $row[0] . '<br>';
//         echo 'Title: ' . $row[1] . '<br>';
//         echo 'Category: ' . $row[2] . '<br>';
//         echo 'Year: ' . $row[3] . '<br>';
//         echo 'ISBN: ' . $row[4] . '<br><br>';
//    }
// } 
// else {
//     echo "0 results";
// }

// Close connection
//$db_server->close();
mysqli_close($db_server);
