<?php
require_once "login.php";

// Create connection
$db_server = new mysqli($db_hostname, $db_username, $db_password, $db_database);

//Check connection
if ($db_server->connect_error) {
    die ("Connection failed: " . $db_server->connect_error);
}