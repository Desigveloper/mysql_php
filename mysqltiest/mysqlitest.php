<?php
require_once "login.php";

// Create connection
$db_server = new mysqli($db_hostname, $db_username, $db_password, $db_database);

//Check connection
if ($db_server->connect_error) die ($db_server->connect_error);

if (isset($_POST["delete"]) && isset($_POST["isbn"])) {
    $isbn = getPost($db_server, 'isbn');
    $query = "DELETE FROM classics WHERE isbn = '$isbn'";
    $result = $db_server->query($query);


    if (!$result) echo "DELETE failed: $query" . "<br>" . 
        $db_server->error . "<br><br>";
}

if (isset($_POST['author']) &&
    isset($_POST['title']) &&
    isset($_POST['category']) &&
    isset($_POST['year']) &&
    isset($_POST['isbn']))
    {
        $author = getPost($db_server, 'author');
        $title = getPost($db_server, 'title');
        $category = getPost($db_server, 'category');
        $year = getPost($db_server, 'year');
        $isbn = getPost($db_server, 'isbn');

        $query = "INSERT INTO classics (author, title, category, year, isbn)" .
        "VALUES ('$author', '$title', '$category', $year, '$isbn')";

        $result = $db_server->query($query);

        if (!$result) echo "INSERT failed: " . "<br>" . 
        $db_server->error . "<br><br>";
    }

    echo <<<_END
    <form action="mysqlitest.php" method="post"><pre>
      Author: <input type="text" name="author">
       Title: <input type="text" name="title">
    Category: <input type="text" name="category">
        Year: <input type="text" name="year">
        ISBN: <input type="text" name="isbn">
              <input type="submit" value="ADD RECORD">
    </pre></form>
    _END;

    $query = "SELECT * FROM classics";
    $result = $db_server->query($query);

    if (!$result) die ("Database access failed: " . mysqli_error($db_server));

    $rows = $result->num_rows;

    for ($i = 0; $i < $rows; $i++) {
        $result->data_seek($i);
        $row = $result->fetch_array(MYSQLI_NUM);
        
        echo <<<_END
        <pre>
           Author: $row[0]
            Title: $row[1]
         Category: $row[2]
             Year: $row[3]
             ISBN: $row[4]
        </pre>
        <form action="mysqlitest.php" method="post">
        <input type="hidden" name="delete" value="yes">
        <input type="hidden" name="isbn" value="$row[4]">
            <input type="submit" value="DELETE RECORD">
        </form>
        _END;
    }

    $result->close();
    $db_server->close();

    function getPost($connection, $var) {
        if (isset($_POST[$var]))
        return $connection->real_escape_string($_POST[$var]);
        else 
        return null;
    }