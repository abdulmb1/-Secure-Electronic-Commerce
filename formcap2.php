<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <div class="container">
        <h2>Create Account</h2>
        <form action="process.php" method="post">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <div class="requirements">Minimum 10 characters. Must include uppercase, lowercase, and number(s).</div>
            
            <label for="retype_password">Re-type Password</label>
            <input type="password" id="retype_password" name="retype_password" required>
            
            <div class="g-recaptcha" data-sitekey="6Le0PyIqAAAAAGU88ljN08CjFtZ0Vl5JvSWy-eD6"></div>
            
            <button type="submit">Create Account</button>
        </form>
    </div>
</body>
</html>


