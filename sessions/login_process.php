<?php
session_start();
require_once('db_connection.php'); // Create this file to connect to your MySQL database

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header('Location: home.php');
    } else {
        echo "Invalid username or password. <a href='login.php'>Try again</a>";
    }
} else {
    echo "Please fill in both fields. <a href='login.php'>Try again</a>";
}
?>
