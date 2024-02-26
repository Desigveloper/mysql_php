<?php
   require_once "server_conn.php";


    if (isset($_POST['delete']) && isset($_POST['isbn'])) {
        $isbn = $_POST['isbn'];
        $query = "DELETE FROM classics WHERE isbn='$isbn'";


        if (!$db_server->query($query)) {
            echo "DELETION failed: $query<br>" .
            $db_server->connect_error. "<br><br>";
        }
    }

    if (isset($_POST["author"]) && 
        isset($_POST["title"]) &&
        isset($_POST["category"]) &&
        isset($_POST["year"]) &&
        isset($_POST["isbn"])
    ) {
        $author = $_POST["author"];
        $title = $_POST["title"];
        $category = $_POST["category"];
        $year = $_POST["year"];
        $isbn = $_POST["isbn"];

        $query = "INSERT INTO classics (author, title, category, year, isbn)" .
        "VALUES ('$author', '$title', '$category', $year, '$isbn')";

        
        if (!$db_server->query($query)) {
             echo "INSERTION failed: $query<br>" .
             $db_server->connect_error. "<br><br>";
        }
    }
    
echo <<<_END
<form action='sqltest.php' method='POST'>
<pre>
  Author <input type='text' name='author'>
   Title <input type='text' name='title'>
Category <input type='text' name='category'>
    Year <input type='text' name='year'>
    ISBN <input type='text' name='isbn'>
         <input type='submit' value='ADD RECORD'>
</pre>
</form>
_END;

    $query = "SELECT * FROM classics";
    $result = $db_server->query($query);

    // Check result status
    if (!$result) die ("Database access failed: " . mysqli_error($db_server));

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo <<<_END
            <pre>
                Author: $row[author]
                Title: $row[title]
                Category: $row[category]
                Year: $row[year]
                ISBN: $row[isbn]
            </pre>

            <form action="sqltest.php" method="post">
                <input type="hidden" name="delete" value="yes">
                <input type="hidden" name="isbn" value="$row[isbn]">
                <input type="submit" value="DELETE RECORD">
            </form>
            _END;
        }
    }

    $db_server->close();