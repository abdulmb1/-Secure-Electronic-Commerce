<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredCode = $_POST['verificationCode'];

    if ($enteredCode == $_SESSION['verificationCode']) {
        // Redirect to the success page
        header("Location: successCode.php");
        exit(); // Ensure the script stops executing after the redirect
    } else {
        header("Location: code_failed.php");
    }
}
?>
