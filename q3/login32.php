<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="styles2a.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
    <div class="login-container">
        <form id="loginForm" method="post" action="verify.php">
            <h1>Login</h1>

            <div class="input_box">
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                <i class="uil uil-envelope-alt email"></i>
            </div>

            <div class="input_box">
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
                <i class="uil uil-lock password"></i>
                <i class="uil uil-eye-slash pw_hide"></i>
            </div>

            <button type="submit">Login</button>
        </form>
    </div>
    <script src="script2a.js"></script>
</body>
</html>
