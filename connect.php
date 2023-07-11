<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "UIU_StudentSphere";

// Create a connection
$conn = new mysqli($server, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>
