<?php
$servername = "localhost";  // Usually "localhost"
$username = "root";         // Your database username (default is "root" in XAMPP)
$password = "";             // Your database password (default is empty in XAMPP)
$dbname = "todo_list_db"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
