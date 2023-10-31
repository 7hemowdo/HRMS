<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web_2_project";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!$conn->select_db($dbname)) {
    // If the database doesn't exist, you can create it, or check your database name
    die("Database selection failed: " . $conn->error);
}

$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
)";

if ($conn->query($sql) === TRUE) {
    //echo "Table 'users' created or already exists.";
} else {
    // Redirect to login.html
    header("Location: login.html");
}
