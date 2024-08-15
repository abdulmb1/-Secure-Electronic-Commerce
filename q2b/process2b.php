<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $recaptchaSecret = '6LdSniYqAAAAAPpbAEhUOBmWGV6VT5ls7QLkjAyr';
    $recaptchaResponse = $_POST['g-recaptcha-response'];

    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = [
        'secret' => $recaptchaSecret,
        'response' => $recaptchaResponse,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    ];

    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data),
        ],
    ];

    $context  = stream_context_create($options);
    $response = file_get_contents($url, false, $context);
    $result = json_decode($response, true);

    if (isset($result['success']) && $result['success'] === true) {
        if (isset($result['score']) && $result['score'] > 0.5) {
            echo 'CAPTCHA was completed successfully!';
        } else {
            echo 'CAPTCHA validation failed. Please try again.';
        }
    } else {
        echo 'CAPTCHA validation failed. Please try again.';
    }
}
?>
