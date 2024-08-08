<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $recaptchaSecret = '6Le0PyIqAAAAADVVLcmjm-lqcggiZagWGUHhm8TM';
    $recaptchaResponse = $_POST['g-recaptcha-response'];

    // Make a request to the Google reCAPTCHA API
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecret&response=$recaptchaResponse");
    $responseKeys = json_decode($response, true);

    if (intval($responseKeys["success"]) !== 1) {
        echo 'Please complete the CAPTCHA';
    } else {
        // Proceed with form processing
        // Your code to handle the form submission, e.g., save user data to the database
        echo 'CAPTCHA was completed successfully!';
    }
}
?>
