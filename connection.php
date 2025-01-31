<?php
$servername = "localhost"; // or your MySQL server hostname
$username = "your_username";
$password = "your_password";
$database = "pms_db";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select database
if (!mysqli_select_db($conn, $database)) {
    die("Database selection failed: " . mysqli_error($conn));
}
?>