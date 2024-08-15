<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Load the configuration
$config = require 'config.php';

// Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Here, you would normally check the email and password against a database

    if ($email == "s3947514@student.rmit.edu.au" && $password == "1234") {
        $verificationCode = rand(100000, 999999);
        
        // Store the verification code in session or database
        session_start();
        $_SESSION['verificationCode'] = $verificationCode;

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host       = $config['smtp_host'];
            $mail->SMTPAuth   = true;
            $mail->Username   = $config['smtp_username'];
            $mail->Password   = $config['smtp_password'];
            $mail->SMTPSecure = $config['smtp_secure'];
            $mail->Port       = $config['smtp_port'];

            // Recipients
            $mail->setFrom($config['smtp_username'], 'Verification Service'); // Sender's email and name
            $mail->addAddress($email); // Recipient's email (the logged-in user)

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Your Verification Code';
            $mail->Body    = "Your verification code is: $verificationCode";

            $mail->send();
            header("Location: enter_code.php");
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Invalid email or password";
    }
}
?>
