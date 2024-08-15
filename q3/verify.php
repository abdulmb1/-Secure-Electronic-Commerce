<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
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

        // Send the email with the verification code using PHPMailer
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp-mail.outlook.com'; // Set your SMTP server
            $mail->SMTPAuth   = true;
            $mail->Username   = 'abdurrahiym@live.com'; // SMTP username
            $mail->Password   = 'Esmanurum1'; // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            //Recipients
            $mail->setFrom('abdurrahiym@live.com', 'Verification Service'); // Sender's email and name
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

