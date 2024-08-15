<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Account</title>
    <link rel="stylesheet" href="styles2b.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://www.google.com/recaptcha/api.js?render=6LdSniYqAAAAANxaaT5ChelCVhtMCb76aK4yulB1"></script>
</head>
<body>
    <div class="login-container">
        <form id="registrationForm" action="process2b.php" method="post">
            <h1> Create Account </h1>

            <div class="input_box">
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                <i class="uil uil-envelope-alt email"></i>
            </div>

            <div class="input_box">
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
                <i class="uil uil-lock password"></i>
                <i class="uil uil-eye-slash pw_hide"></i>
            </div>

            <div class="input_box">
                <input type="password" id="retype_password" name="retype_password" placeholder="Re-type your password" required>
                <i class="uil uil-lock password"></i>
                <i class="uil uil-eye-slash pw_hide"></i>
            </div>

            <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">

            <button type="submit">Create Account</button>
            <p id="error-message"></p>
        </form>
    </div>
    <script src="script2b.js"></script>
</body>
</html>




