<?php
include('db_init.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            session_start();
            $_SESSION['username'] = $row['username'];
            $_SESSION['fullname'] = $row['fullname'];
            $_SESSION['id'] = $row['id'];
            header("Location: dashboard.php");
            exit();
        } else {
            echo "<script>alert('Invalid username or password');</script>";
            header("Location: login.html");
        }
    } else {
            echo "<script>alert('Invalid username or password');</script>";
            header("Location: login.html");
    }
}
$conn->close();
?>
