<?php
    //Required file
    require_once "connection.php";

echo <<<_END
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Students log</title>
        </head>
        <body><center>
            <form action="insert.php" method="POST">
                <label for="name">Student Name: 
                    <input type="text" id="name" name="st_name" required>
                </label><br>
                <label for="age">Student Age: 
                    <input type="text" id="age" name="st_age" maxlength="3" required>
                </label><br>
                <label for="index_no">Index number: 
                    <input type="text" maxlength="16" id="index_no" name="index_no" required>
                </label><br>
                <input type="submit" value="ADD DATA">
            </form>
        </center></body>
        </html>
_END;


    if (isset($_POST["st_name"], $_POST["st_age"], $_POST["index_no"])) {
        $name = $_POST["st_name"];
        $age = $_POST["st_age"];
        $index_no = $_POST["index_no"];
    }
    else {
        die ($conn->error);
    }

    // Insert data through html
    $query = "INSERT INTO students(st_name, st_age, index_no)
    VALUE ('$name', '$age', '$index_no')";

    if ($conn->query($query)) {
       echo "Data successfuilly inserted<br>";
    } 
    else {
        echo "Problem with command<br>";
    }

    $conn->close();
