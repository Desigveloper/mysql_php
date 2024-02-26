<?php
// Building an executable query
require_once "connect_server.php";

// Select data
$query = "SELECT * FROM classics"; // customers WHERE classics.isbn = customers.isbn";
$result = $db_server->query($query);
