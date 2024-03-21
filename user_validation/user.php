<?php
include_once "connect.php";

// Grab user info
if (isset($_POST['username'], $_POST['userpassword'])) {
    $username = $_POST["username"];
    $userpassword1 = $_POST["userpassword"];
}
else {
    die($conn->error);
}

// Fetch user record from database
$query = "SELECT username, userpassword FROM users WHERE username= '$username'";
$result = $conn->query($query);

// Check if user is selected
if ($result === false) {
    die ("No record selected " . $conn->error);
}

$row = mysqli_fetch_array($result);

if ($userpassword1 === $row['$userpassword']) {
    echo "Valid user";
}
else {
    echo "Invalid user";
}

$conn->close();

