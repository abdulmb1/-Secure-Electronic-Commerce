<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Here, you would normally check the email and password against a database

    if ($email == "s3947514@student.rmit.edu.au" && $password == "1234") {
        $verificationCode = rand(100000, 999999);
        
        // Store the verification code in session or database
        session_start();
        $_SESSION['verificationCode'] = $verificationCode;

        // Send the email with the verification code
        $subject = "Your Verification Code";
        $message = "Your verification code is: $verificationCode";
        mail($email, $subject, $message);

        header("Location: enter_code.php");
    } else {
        echo "Invalid email or password";
    }
}
?>
