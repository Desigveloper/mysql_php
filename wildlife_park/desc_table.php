<?php
    require_once "connections.php";

    $query = "DESCRIBE cats";
    $result = $connection->query($query);

    if (!$result) {
        die ("Database access failed: " . $connection->error);
    }

    $rows = mysqli_num_rows($result);

    echo "<table></tr><th>Column</th><th>Type</th><th>Null</th><th>Key</th></tr>";

    for ($i = 0; $i < $rows; ++$i) {
        $row = mysqli_fetch_row($result);
        
        echo "<tr>";
        for ($j = 0; $j < $rows; $j++)
            echo "<td>$row[$j]</td>";
        
        echo "</tr>";
    }
    echo "</table>";

    $connection->close();

    