<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process registration form
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Example: Insert into database (you need to set up your database connection and query)
    // Placeholder code to simulate successful registration
    $_SESSION['username'] = $username;
    
    header("Location: ../profile.html");
    exit();
}
?>

