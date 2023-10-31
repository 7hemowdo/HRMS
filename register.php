<?php
include('db_init.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    $fullname = mysqli_real_escape_string($conn, $fullname);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (fullname, username, password) VALUES ('$fullname', '$username', '$hashedPassword')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>Registration successful. You can now log in.</h2><a href='login.html'>Login here</a>";
    } else {
        echo "Error registering user: " . $conn->error;
    }
}
?>
