<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredCode = $_POST['verificationCode'];

    if ($enteredCode == $_SESSION['verificationCode']) {
        echo "Login Successful!";
    } else {
        echo "Login Failed!";
    }
}
?>
