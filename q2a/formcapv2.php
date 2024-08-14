<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Account</title>
    <link rel="stylesheet" href="styles2a.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <div class="login-container">
            <form id="registrationForm">
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

            <div class="g-recaptcha" data-sitekey="6Le0PyIqAAAAAGU88ljN08CjFtZ0Vl5JvSWy-eD6"></div>

            <button type="submit">Create Account</button>
            <p id="error-message"></p>
        </form>
    </div>
    <script src="script2a.js"></script>
</body>
</html>




