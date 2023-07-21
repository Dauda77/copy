<?php
session_start();
require 'const.inc.php';

// Check if the user is already logged in
if (isset($_SESSION['user_id'])) {
    header('location: dashboard.php');
    exit();
}

// Handle the login form submission
if (isset($_POST['submit'])) {
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $pass = filter_var($_POST['pass'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Check if the username and password are provided
    if (empty($username) || empty($pass)) {
        $_SESSION['signin'] = "Please enter your username and password";
        header('location: signin.php');
        exit();
    }

    // Query the database to check the username and password combination
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username LIMIT 1");
    $stmt->execute([':username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        if (password_verify($pass, $user['pass'])) {
            // Set user session data
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['admin'] = $user['admin']; // Set the admin session variable

            // Redirect to the dashboard or the desired page after successful login
            header('location: home.php');
            exit();
        } else {
            $_SESSION['signin'] = "Invalid password";
        }
    } else {
        $_SESSION['signin'] = "Invalid username";
    }
    
    header('location: signin.php');
    exit();
}
?>