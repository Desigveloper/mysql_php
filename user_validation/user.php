<?php
include_once "connect.php";


echo <<<_END
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css">
            <title>Login Form - User Validation</title>
        </head>
    </html>
_END;

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

