<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="stylesq3.css">
</head>
<body>
    <div class="login-container">
        <form id="loginForm" action="process_login.php" method="post">
            <h1>Login</h1>

            <div class="input_box">
                <input type="email" name="email" placeholder="Enter your email" required>
                <i class="uil uil-envelope-alt email"></i>
            </div>

            <div class="input_box">
                <input type="password" name="password" placeholder="Enter your password" required>
                <i class="uil uil-lock password"></i>
            </div>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
