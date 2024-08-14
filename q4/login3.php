<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="stylesq3.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
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
                <i class="uil uil-eye-slash pw_hide"></i>
            </div>

            <button type="submit">Login</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Password toggle functionality
            const togglePasswordIcons = document.querySelectorAll('.pw_hide');
            const passwordInputs = document.querySelectorAll('.input_box input[type="password"]');

            togglePasswordIcons.forEach((icon, index) => {
                icon.addEventListener('click', () => {
                    // Toggle the type attribute using a ternary operator
                    const type = passwordInputs[index].getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordInputs[index].setAttribute('type', type);

                    // Toggle the eye/eye-slash icon
                    icon.classList.toggle('uil-eye-slash');
                    icon.classList.toggle('uil-eye');
                });
            });
        });
    </script>
</body>
</html>
