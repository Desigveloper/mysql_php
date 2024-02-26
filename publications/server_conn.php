<?php
     require_once "login.php";

     //Connect to server
     $db_server = new mysqli($db_hostname, $db_username, $db_password, $db_database);
 
     // Check connections
     if ($db_server->connect_error) {
         die("Unable to connect to MySQL server ". $db_server->connect_error);
     }
 