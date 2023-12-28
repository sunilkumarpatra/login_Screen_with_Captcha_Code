<?php
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate the username, password, and captcha
    $username = $_POST['username'];
    $password = $_POST['password'];
    $captcha = $_POST['captcha'];

    // Validate the captcha code
    if ($captcha !== $_SESSION['captcha_code']) {
        $_SESSION['error_message'] = "Invalid captcha code. Please try again.";
        header("Location: login.php"); // Redirect back to the login page
        exit;
    }
    header("Location: dashboard.php");
    // Rest of your authentication logic...
} else {
    // Redirect to the login page if accessed directly without submitting the form
    header("Location: login.php");
    exit;
}
?>
