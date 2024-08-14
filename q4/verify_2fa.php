<?php
session_start();
require_once 'PHPGangsta/GoogleAuthenticator.php';
require_once 'userprofile.php'; // contains dummy user data

$ga = new PHPGangsta_GoogleAuthenticator();

$otp = $_POST['otp'];

// Check if the 2FA code is correct
$checkResult = $ga->verifyCode($dummy_user['secret'], $otp, 2); // 2*30sec clock tolerance

if ($checkResult) {
    echo "<h1>Welcome to the webpage. 2FA verification successful.</h1>";
    echo '<form action="logout.php" method="post">';
    echo '<button type="submit">Logout</button>';
    echo '</form>';
} else {
    echo "Invalid 2FA code. Please try again.";
}
?>
