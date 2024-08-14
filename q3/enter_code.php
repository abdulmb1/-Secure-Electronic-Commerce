<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Two Factor Authentication</title>
    <link rel="stylesheet" href="styles2a.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
    <div class="login-container">
        <form id="verifyForm" method="post" action="check_code.php">
            <h1>Two Factor Authentication</h1>

            <div class="input_box">
                <input type="text" id="verificationCode" name="verificationCode" placeholder="Enter your 2FA code" required>
                <i class="uil uil-key-skeleton"></i>
            </div>

            <button type="submit">Verify Code</button>
        </form>
    </div>
    <script src="script2a.js"></script>
</body>
</html>
