<?php
session_start();
require_once 'userprofile.php'; // contains dummy user data

$email = $_POST['email'];
$password = $_POST['password'];

// Check if email and password match the dummy user's data
if ($email === $dummy_user['username'] && $password === $dummy_user['password']) {
    $_SESSION['authenticated_user'] = $email; // Store user info in session
    header('Location: enter_2fa.php'); // Redirect to 2FA form
} else {
    echo "Invalid email or password.";
}
?>
