<?php
require_once "server_conn.php";

// Using place holders to insert data to avoid SQL injections
$query = 'PREPARE stmt FROM "INSERT INTO classics VALUES(?, ?, ?, ?, ?)"';
$db_server->query($query);

$query = 'SET @author = "Emily Bronte",' .
         '@title = "Wuthering Heights",' .
         '@category = "Classic Fiction",' . 
         '@year = "1847",' . 
         '@isbn = "9780553212587"';
$db_server->query($query);


$query = 'EXECUTE stmt USING @author, @title, @category, @year, @isbn';
$db_server->query($query);

$query = 'DEALLOCATE PREPARE stmt';
$db_server->query($query);