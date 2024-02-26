<?php
  require_once "connections.php";
  
  $query = "DELETE FROM cats WHERE id IN (4, 5, 6)";
  $result = $connection->query( $query );

  if (!$result) {
    die("Unable to connect to database". mysqli_error($connection));
  }

  $connection->close();